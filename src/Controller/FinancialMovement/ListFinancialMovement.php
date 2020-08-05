<?php

declare(strict_types=1);

namespace App\Controller\FinancialMovement;

use App\ServiceClient\IbanFirstClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ListFinancialMovement extends AbstractController
{
    private $ibanFirstClient;
    private $serializer;

    public function __construct(IbanFirstClient $ibanFirstClient, SerializerInterface $serializer)
    {
        $this->ibanFirstClient = $ibanFirstClient;
        $this->serializer = $serializer;
    }

    /**
     * @Route("/financial-movements", name="financial_movement_list")
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
        if($walletId = $request->query->get('wallet_id')) {
            $options['query']['walletId'] = $walletId;
        }
        if($fromDate = $request->query->get('from_date')) {
            $options['query']['fromDate'] = $fromDate;
        }
        if($toDate = $request->query->get('to_date')) {
            $options['query']['toDate'] = $toDate;
        }
        $content = $this->ibanFirstClient->tryRequest('GET', '/financialMovements/', $options ?? []);
        $financialMovements = $this->serializer->deserialize($content, 'App\Model\FinancialMovement[]', 'json');
        
        return $this->render('financialMovements/list.html.twig', [
            'financial_movements' => $financialMovements['financialMovements']
        ]);
    }
}
