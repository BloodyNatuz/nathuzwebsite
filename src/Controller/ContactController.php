<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(UserRepository $userRepo): Response
    {
        return $this->render('contact/index.html.twig', [
            'page_title' => 'Nathuz - Contact',
            'users' => $userRepo->findAll(),
        ]);
    }
}
