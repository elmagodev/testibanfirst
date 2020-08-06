<?php

declare(strict_types=1);

namespace App\Controller\Wallet;

use App\ServiceClient\IbanFirstClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class ListWallet extends AbstractController
{
    private $ibanFirstClient;
    private $serializer;

    public function __construct(IbanFirstClient $ibanFirstClient, SerializerInterface $serializer)
    {
        $this->ibanFirstClient = $ibanFirstClient;
        $this->serializer = $serializer;
    }

    /**
     * @Route("/wallets", name="wallet_list")
     */
    public function __invoke(Request $request): Response
    {
        if($sort = $request->query->get('sort')) {
            $options['query']['sort'] = $sort;
        }
        if($page = $request->query->get('page')) {
            $options['query']['page'] = $page;
        }
        if($perPage = $request->query->get('per_page')) {
            $options['query']['per_page'] = $perPage;
        }
        $content = $this->ibanFirstClient->tryRequest('GET', '/wallets/', $options ?? []);
        $wallets = $this->serializer->deserialize($content, 'App\Model\Wallet[]', 'json');
        
        return $this->render('wallets/list.html.twig', [
            'wallets' => $wallets['wallets'],
            'sort' => $sort,
            'page' => $page ?? 1,
            'per_page' => $perPage ?? 2,
        ]);
    }
}
