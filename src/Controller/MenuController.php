<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use http\Message\Body;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MenuController extends AbstractController
{
    public function menu(): Response
    {
        return $this->render('Menu.html.twig');    }
}
