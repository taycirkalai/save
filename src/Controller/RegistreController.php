<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegistreController extends AbstractController
{
    #[Route('/registre', name: 'app_registre')]
    public function registre(Request $request): Response
    {
        $user =new User();
        $form =$this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //$user = $form->getData();
                       $this->getDoctrine()
                            ->getRepository(User::class)
                            ->add($user,true);//ajouter a la base 
            // ... perform some action, such as saving the task to the database
            return $this->redirectToRoute('app_login');
        }
        return $this->renderForm('registre/registre.html.twig', [
            'form' => $form,
                ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('registre/login.html.twig');
    }
}
