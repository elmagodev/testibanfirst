<?php

declare(strict_types=1);

namespace App\Tests\Unit\Client;

use App\ServiceClient\IbanFirstClient;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class IbanFirstClientTest extends TestCase
{
    /** @var IbanFirstClient */
    private $ibanFirstClient;

    /** @var HttpClientInterface|ObjectProphecy */
    private $httpClientInterface;

    protected function setup(): void
    {
        $this->httpClientInterface = $this->prophesize(HttpClientInterface::class);
        $baseUri = $password = $username = '';
        $this->ibanFirstClient = new IbanFirstClient($this->httpClientInterface->reveal(), $baseUri, $username, $password);
    }

    public function testTryRequestThrowException(): void
    {
        /** @var ResponseInterface|ObjectProphecy */
        $response = $this->prophesize(ResponseInterface::class);
        $this->httpClientInterface->request(Argument::type('string'), Argument::type('string'), Argument::type('array'))->willReturn($response->reveal())->shouldBeCalledOnce();
        $response->getContent()->willThrow(ClientException::class)->shouldBeCalledOnce();

        $this->expectException(ClientException::class);
        $this->ibanFirstClient->tryRequest('GET','/wallets/', [], 1);
    }

    public function testTryRequest(): void
    {
        $wallets = '[
            {
              "id": "Na5Dv6E",
              "tag": "string",
              "currency": "USD",
              "bookingAmount": {
                "value": "2.257",
                "currency": "USD"
              },
              "valueAmount": {
                "value": "2.257",
                "currency": "USD"
              },
              "dateLastFinancialMovement": "2016-01-01"
            }
          ]';

        /** @var ResponseInterface|ObjectProphecy */
        $response = $this->prophesize(ResponseInterface::class);
        $this->httpClientInterface->request(Argument::type('string'), Argument::type('string'), Argument::type('array'))->willReturn($response->reveal())->shouldBeCalledOnce();
        $response->getContent()->willReturn($wallets)->shouldBeCalledOnce();

        $this->ibanFirstClient->tryRequest('GET','/wallets/', [], 1);
    }

    protected function tearDown(): void
    {
        $this->ibanFirstClient = null;
        $this->httpClientInterface = null;
    }
}