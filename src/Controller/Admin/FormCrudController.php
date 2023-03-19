<?php

namespace App\Controller\Admin;

use App\Entity\Form;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FormCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Form::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('Nom'),
            TextField::new('Prenom'),
            TextField::new('email'),
            IntegerField::new('Couverts'),
            TextField::new('Heure'),
            TextField::new('Allergies'),
            DateTimeField::new('Date'),
        ];
    }
}
