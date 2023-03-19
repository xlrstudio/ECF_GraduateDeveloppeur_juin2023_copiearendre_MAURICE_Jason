<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\HeureOuvertureType;
use App\Entity\HeureOuverture;
class HeureOuvertureController extends AbstractController
{
    #[Route('/heure/ouverture', name: 'app_heure_ouverture')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new HeureOuverture();

        $form = $this->createForm(HeureOuvertureType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($contact);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation pris en compte, à bientôt');

            return $this->redirectToRoute('validation');
        }

        return $this->render('heure_ouverture/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}