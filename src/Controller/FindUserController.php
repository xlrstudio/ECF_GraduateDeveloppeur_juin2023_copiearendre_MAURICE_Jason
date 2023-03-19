<?php

namespace App\Controller;

use App\Entity\Form;
use App\Repository\FormRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FindUserController extends AbstractController
{
    /**
     * @Route("/find-user")
     */
    public function find(FormRepository $formRepository): Response
    {
        $formRepository = $formRepository->findAll();

    }
}