<?php

namespace App\Controller;

use App\Entity\Subscribers;
use App\Form\SubscribersFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SubscribersController extends AbstractController
{

	/**
	 * @Route("/subscribe", name="subscribe")
	 * @param Request $request
	 * @param EntityManagerInterface $em
	 * @return JsonResponse
	 */
	public function subscribe(Request $request, EntityManagerInterface $em): JsonResponse
	{
		$form = $this->createForm(SubscribersFormType::class);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			/** @var Subscribers $subscribers */
			$subscribers = $form->getData();

			$em->persist($subscribers);
			$em->flush();
			$this->addFlash('success', 'Registered successfully!');
		}
		return $this->json(['username' => 'jane.doe']);
	}
}