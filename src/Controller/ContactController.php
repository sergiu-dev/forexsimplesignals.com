<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController {

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function add(Request $request, EntityManagerInterface $em): Response {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Message $message */
            $message = $form->getData();

            $em->persist($message);
            $em->flush();
            $this->addFlash('success', 'Thank you for your message!');
            return $this->redirectToRoute('home');
        }
        return $this->render('contact/index.html.twig', [
            'messageForm' => $form->createView(),
        ]);
    }

}