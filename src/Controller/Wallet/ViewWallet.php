<?php

declare(strict_types=1);

namespace App\Controller\Wallet;

use App\Model\Wallet;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewWallet extends AbstractController
{
    /**
     * @Route("/wallet/{id}", name="wallet_view")
     * @ParamConverter("wallet", options={"converter"="wallet_converter"})
     */
    public function __invoke(Request $request, Wallet $wallet): Response
    {
        return $this->render('wallets/view.html.twig', ['wallet' => $wallet]);
    }
}
