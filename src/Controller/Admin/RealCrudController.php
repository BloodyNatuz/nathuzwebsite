<?php

namespace App\Controller\Admin;

use App\Entity\Real;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RealCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Real::class;
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
