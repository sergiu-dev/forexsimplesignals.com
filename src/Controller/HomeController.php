<?php

namespace App\Controller;

use App\Repository\InsightRepository;
use App\Repository\SignalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name = "home")
     * @param SignalRepository $signalRepository
     * @param InsightRepository $insightRepository
     * @return Response
     */
	public function index(SignalRepository $signalRepository, InsightRepository $insightRepository) :Response {

		$signals = $signalRepository->findAll();
		$insights = $insightRepository->findAll();

		return $this->render('home/index.html.twig', [
			'signals' => $signals,
            'insights' => $insights,
		]);
	}
}