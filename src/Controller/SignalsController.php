<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignalsController extends AbstractController {

    /**
     * @Route("/signals", name = "signals")
     * @return Response
     */
    public function index() :Response {

        return $this->render('signals/index.html.twig', [

        ]);
    }
}