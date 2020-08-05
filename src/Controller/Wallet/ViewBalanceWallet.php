<?php

declare(strict_types=1);

namespace App\Controller\Wallet;

use App\ServiceClient\IbanFirstClient;
use App\Model\Wallet;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ViewBalanceWallet extends AbstractController
{
    private $ibanFirstClient;
    private $serializer;

    public function __construct(IbanFirstClient $ibanFirstClient, SerializerInterface $serializer)
    {
        $this->ibanFirstClient = $ibanFirstClient;
        $this->serializer = $serializer;
    }

    /**
    * @Route("/wallet/{id}/balance/{date}", name="wallet_balance_view")
    */
    public function __invoke(Request $request, string $id, DateTime $date): Response
    {
        $formattedDate = $date->format('Y-m-d');
        $content = $this->ibanFirstClient->tryRequest('GET', "/wallets/-$id/balance/$formattedDate");
        $wallet = $this->serializer->deserialize($content, Wallet::class, 'json');
        
        return $this->render('wallets/view_balance.html.twig', ['wallet' => $wallet]);
    }
}
