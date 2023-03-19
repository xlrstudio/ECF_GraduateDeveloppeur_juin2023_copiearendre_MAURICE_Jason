<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserPasswordType;
use App\Form\UserProfileType;
use Symfony\Component\Security\Core\User\UserInterface;

class RegistrationController extends AbstractController
{



    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setRoles(["ROLE_USER"]);
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Inscription réussie');

            return $this->redirectToRoute('validation');
        }

        return $this->render('user/inscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/profile', name: 'app_profile')]
    public function notification(): Response
    {
        // get the user information and notifications somehow
        $user = $this->getUser();

        return $this->render('user/Profile.html.twig', [
            'user' => $user,
        ]);
    }


}
