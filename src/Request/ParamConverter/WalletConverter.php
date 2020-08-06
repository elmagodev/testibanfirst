<?php

declare(strict_types=1);

namespace App\Request\ParamConverter;

use App\ServiceClient\IbanFirstClient;
use App\Model\Wallet;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class WalletConverter implements ParamConverterInterface
{
    public function __construct(IbanFirstClient $ibanFirstClient, SerializerInterface $serializer)
    {
        $this->ibanFirstClient = $ibanFirstClient;
        $this->serializer = $serializer;
    }
    
    public function apply(Request $request, ParamConverter $configuration)
    {
        if (!$request->attributes->has('id')) {
            return false;
        }
        
        $id = $request->attributes->get('id');

        $content = $this->ibanFirstClient->tryRequest('GET', "/wallets/-$id");

        $request->attributes->set('wallet', $this->serializer->deserialize($content, Wallet::class, 'json'));

        return true;
    }

    public function supports(ParamConverter $configuration)
    {
        if (null === $configuration->getClass()) {
            return false;
        }
            
        return Wallet::class === $configuration->getClass();
    }
}
