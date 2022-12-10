<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/restaurant', name: 'app_restaurant')]
    public function index(): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('restaurant/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('restaurant/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('restaurant/about.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('restaurant/contact.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }

    #[Route('/menu', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('restaurant/menu.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }


    #[Route('/booktable', name: 'app_booktable')]
    public function book(): Response
    {
        return $this->render('restaurant/Resrvation.html.twig', [
            'controller_name' => 'aboutController',
        ]);
    }

    #[Route('/offre', name: 'app_offre')]
    public function offre(): Response
    {
        return $this->render('restaurant/offre.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/listrest', name: 'app_listrest')]
    public function list(): Response
    {
        return $this->render('restaurant/Listrestaurant.html.twig', [
            'controller_name' => 'listrestController',
        ]);
    }

   

  
}
