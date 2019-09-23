<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\Type\UsersFormType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $form=$this->createForm(ContactType::class);
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    public function afficheContact()
    {
        $entity_manager=$this->getDoctrine()->getManager();
        $c=new Contat();
        $c=setFirstname('', TextType::class);
        $c=setLastname('', TextType::class);
        $c=setEmail('', TextType::class);
        $c=setMessage('', TextType::class);
        $entity_manager->persist($c);
        return new Response('Users'.$c->getId()."crée avec succés");
    }

    /**
     * @Route("/formulaire", name="formulaire")
     */

    public function viewContact()
    {
        $registry=$this->getDoctrine()->getRepository(Users::class);
        $users=$registry->findAll();
        return $this->render('formulaire.html.twig', ["Users"=>$users]);
    }
}
