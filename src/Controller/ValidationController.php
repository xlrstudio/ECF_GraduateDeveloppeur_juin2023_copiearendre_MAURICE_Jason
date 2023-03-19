<?php

namespace App\Controller;

use App\Form\MessageType;
use App\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class ValidationController extends AbstractController
{


    public function validation(Request $request, EntityManagerInterface $entityManager): Response
    {

        $message = new Message();

        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message envoyé');

            return $this->redirectToRoute('validation');
        }
        return $this->render('validator/base3.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
/*

        dd($errors);
*/