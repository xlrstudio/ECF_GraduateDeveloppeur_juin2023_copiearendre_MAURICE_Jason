<?php

namespace App\Controller;

use App\Form\FormType;
use App\Repository\FormRepository;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use http\Message\Body;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Form;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Twig\AppVariable;

class FormController extends AbstractController
{


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Form();

        $form = $this->createForm(FormType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($contact);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation pris en compte, à bientôt');

            return $this->redirectToRoute('formulaire');
        }

        return $this->render('base2.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
/*
public function add(ManagerRegistry $doctrine, Request $request)
{
    $entityManager = $doctrine->getManager();

    $form = $this->createForm(Form::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        dd($form);

    }
    $entityManager->persist($form);
    $entityManager->flush();

    return $this->render('base.html.twig', [
        'form' => $form->createView(),
    ]);
}
}*/