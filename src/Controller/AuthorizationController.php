<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/authorization/', name: 'authorization_')]
class AuthorizationController extends AbstractController
{
    #[Route('sign-in/', name: 'sign_in')]
    public function index(): Response
    {
        return $this->render('authorization/index.html.twig', [
            'controller_name' => 'AuthorizationController',
        ]);
    }
}
