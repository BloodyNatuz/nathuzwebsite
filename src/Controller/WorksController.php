<?php

namespace App\Controller;

use App\Repository\RealRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorksController extends AbstractController
{
    /**
     * @Route("/works", name="app_works")
     */
    public function index(RealRepository $realRepo): Response
    {
        return $this->render('works/index.html.twig', [
            'page_title' => 'Nathuz - Réalisations',
            'reals' => $realRepo->findAll(),
        ]);
    }
}
