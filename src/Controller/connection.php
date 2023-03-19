<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class connection extends AbstractController
{
    public function connection(): Response
    {
        return new Response('<body>Hello la connection<body>');
    }
}
