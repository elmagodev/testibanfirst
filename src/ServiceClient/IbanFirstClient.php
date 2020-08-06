<?php

declare(strict_types=1);

namespace App\ServiceClient;

use DateTime;
use Exception;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class IbanFirstClient
{
    private $client;
    private $baseUri;
    private $userName;
    private $password;

    public function __construct(HttpClientInterface $client, string $baseUri, string $userName, string $password)
    {
        $this->client = $client;
        $this->baseUri = $baseUri;
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * Request IbanFirst API
     */
    private function doRequest(string $method, string $uri, array $options = []): ResponseInterface
    {
        if (!isset($options['headers'])) {
            $options['headers'] = $this->buildHeaders();
        }
        return $this->client->request($method, $this->baseUri.$uri, $options);
    }

    /**
     * Try to do request multiple times because it sometimes returns 400
     */
    public function tryRequest(string $method, string $uri, array $options = [], int $try = 5)
    {
        try {
            $resp = $this->doRequest($method, $uri, $options);
            $content = $resp->getContent();
        } catch (Exception $e) {
            if (--$try > 0) {
                usleep(100);
                return $this->tryRequest($method, $uri, $options, $try);
            }
            throw $e;
        }
        return $content;
    }

    /**
     * Build X-WSSE header
     */
    private function buildHeaders(): array
    {
        $nonce = substr(sha1((string)time()), 0, 15);
        $nonce64 = base64_encode($nonce);
        /*
         * @see https://api.ibanfirst.com/APIDocumentation/IbanfirstAPI/
         * If we don't retrieve 2 seconds, sometimes it throw 'future date' error
         */
        $date = new DateTime('-2 seconds');
        $formattedDate = $date->format('Y-m-d\TH:i:s\Z');
        $digest = base64_encode(sha1($nonce.$formattedDate.$this->password, true));
        $header = sprintf('X-WSSE: UsernameToken Username="%s", PasswordDigest="%s", Nonce="%s", Created="%s"', $this->userName, $digest, $nonce64, $formattedDate);
        
        return [
            $header,
            'Content-Type: application/json',
        ];
    }
}
