<?php

namespace App\Controller;

use App\Repository\SignalRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignalsController extends AbstractController {

    /**
     * @Route("/signals", name = "signals")
     * @param SignalRepository $signalRepository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function index(SignalRepository $signalRepository, Request $request, PaginatorInterface $paginator) :Response {

        $query = $signalRepository->findAllClosedSignals();

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('signals/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}