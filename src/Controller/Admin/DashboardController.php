<?php

namespace App\Controller\Admin;
// src/Controller/Admin/DashboardController.php

namespace App\Controller\Admin;

use App\Entity\Form;
use App\Entity\Message;
use App\Entity\User;
use App\Entity\Recipe;
use App\Entity\HeureOuverture;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\User\UserInterface;
class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('@EasyAdmin/page/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EasyAdminBundle');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Panneau de contrôle', 'fa fa-home');
        yield MenuItem::linkToCrud('Reservations', 'fas fa-list', Form::class);
        yield MenuItem::LinkToCrud('Messages',  'fas fa-list', Message::class);
        yield MenuItem::LinkToCrud('Inscriptions',  'fas fa-list', User::class);
        yield MenuItem::LinkToCrud('Images',  'fas fa-list', Recipe::class);
        yield MenuItem::LinkToCrud('Horaires',  'fas fa-list', HeureOuverture::class);

    }
    public function configureAssets(): Assets
    {
        return parent::configureAssets('app');
    }
}
