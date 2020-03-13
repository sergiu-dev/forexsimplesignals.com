<?php

namespace App\Controller;

use App\Entity\Subscribers;
use App\Form\SubscribersFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SubscribersController extends AbstractController
{

	/**
	 * @Route("/subscribe", name="subscribe")
	 * @param Request $request
	 * @param EntityManagerInterface $em
	 * @return RedirectResponse
	 */
	public function subscribe(Request $request, EntityManagerInterface $em) : RedirectResponse {
		if ($request->isMethod('POST')) {
			$subscribers = new Subscribers();
			$subscribers->setEmail($request->get('email'));

			$em->persist($subscribers);
			$em->flush();
			$this->addFlash('success', 'Registered successfully!');
		}
		return $this->redirectToRoute('home');
	}
}