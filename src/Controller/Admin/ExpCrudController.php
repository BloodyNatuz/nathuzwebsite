<?php

namespace App\Controller\Admin;

use App\Entity\Exp;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ExpCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Exp::class;
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
