<?php

namespace App\Controller\Admin;

use App\Entity\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DashboardCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dashboard::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
