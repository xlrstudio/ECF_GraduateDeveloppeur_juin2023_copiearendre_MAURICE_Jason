<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use http\Message\Body;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConnectionController extends AbstractController
{
    public function connection(): Response
    {
        return $this->render('connection.html.twig');
    }
}
