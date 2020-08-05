<?php

declare(strict_types=1);

namespace App\Controller\Wallet;

use App\ServiceClient\IbanFirstClient;
use App\Form\WalletForm;
use App\Model\Wallet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class CreateWallet extends AbstractController
{
    private $ibanFirstClient;
    private $serializer;

    public function __construct(IbanFirstClient $ibanFirstClient, SerializerInterface $serializer)
    {
        $this->ibanFirstClient = $ibanFirstClient;
        $this->serializer = $serializer;
    }
    
    /**
     * @Route("/wallet/add", name="wallet_add")
     */
    public function __invoke(Request $request): Response
    {
        $wallet = new Wallet();

        $form = $this->createForm(WalletForm::class, $wallet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $body = $this->serializer->serialize($wallet, 'json', [AbstractObjectNormalizer::SKIP_NULL_VALUES => true]);
            $this->ibanFirstClient->tryRequest('POST', '/wallets/', ['body' => $body]);
            $this->addFlash('success','wallet.create.success');
            
            return $this->redirectToRoute('wallet_list', ['sort' => 'DESC']);
        }
        return $this->render('wallets/add.html.twig', [
         'form' => $form->createView()
        ]);
    }
}
