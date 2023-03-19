<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use http\Message\Body;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MentionsController extends AbstractController
{
    public function mentions(): Response
    {
        return $this->render('Mentionslegales.html.twig');    }
}
