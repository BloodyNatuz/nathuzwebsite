<?php

namespace App\Controller;

use App\Entity\Real;
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

    /**
     * @Route("/work/{id}/show", name="app_work_show")
     */
    public function real_show(Real $real): Response
    {
        return $this->render('works/work.html.twig', [
            'page_title' => 'Nathuz - Réalisation',
            'real' => $real,
        ]);
    }
}
