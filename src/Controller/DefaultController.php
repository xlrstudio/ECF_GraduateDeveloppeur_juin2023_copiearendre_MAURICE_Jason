<?php

namespace App\Controller;

use http\Message\Body;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'accueil')]

    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}