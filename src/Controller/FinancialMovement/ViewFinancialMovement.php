<?php

declare(strict_types=1);

namespace App\Controller\FinancialMovement;

use App\Model\FinancialMovement;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author idetox <edouard.lescot@gmail.com>
 */
class ViewFinancialMovement extends AbstractController
{
    /**
     * @Route("/financial-movement/{id}", name="financial_movement_view")
     * @ParamConverter("financialMovement", options={"converter"="financial_movement_converter"})
     */
    public function __invoke(Request $request, FinancialMovement $financialMovement): Response
    {
        return $this->render('financialMovements/view.html.twig', ['financial_movement' => $financialMovement]);
    }
}
