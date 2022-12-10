<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurateurController extends AbstractController
{
    #[Route('/restaurateur', name: 'app_restaurateur')]
    public function index(): Response
    {
        return $this->render('restaurateur/index.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }

    #[Route('/indexr', name: 'app_indexr')]
    public function indexr(): Response
    {
        return $this->render('restaurateur/indexr.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }
    #[Route('/signup', name: 'app_signup')]
    public function signup(): Response
    {
        return $this->render('restaurateur/sign-up.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }
    #[Route('/add', name: 'app_res_add')]
    public function add(): Response
    {
        return $this->render('restaurateur/user-add.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }
    #[Route('/listuser', name: 'app_reslist')]
    public function user_list(): Response
    {
        
        return $this->render('restaurateur/user-list.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }
    #[Route('/profil', name: 'app_res_prof')]
    public function profil(): Response
    {
        return $this->render('restaurateur/user-profile.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }


    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        return $this->render('restaurateur/index.html.twig', [
            'controller_name' => 'RestaurateurController',
        ]);
    }

}
