<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\HeureOuvertureType;
use App\Entity\HeureOuverture;
class HoursController extends AbstractController
{
    #[Route('/hours', name: 'app_hours')]
    public function notification(): Response
    {
        $form = new HeureOuverture();
    // get the user information and notifications somehow
    return $this->render('heure_ouverture/heure.html.twig');
    }


}