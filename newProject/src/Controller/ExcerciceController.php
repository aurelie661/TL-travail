<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class ExcerciceController extends AbstractController
{
    /**
     * @Route("/excercice1", name="excercice1")
     */
    public function index1(): Response
    {
        $response=new Response('<h1>Hello World!</h1>',Response::HTTP_OK);
        return $response;
    }
    /**
     * @Route("/excercice2", name="excercice2")
     */
    public function index2(): Response
    {
        return $this->render('excercice/index.html.twig', [
            'controller_name' => ' Hello Excercice 1',
        ]);
    }
    /**
     * @Route("/excercice3", name="excercice3")
     */
    public function index3(): Response
    {
        return $this->json(['Coucou'=>'Json']);
    }

    /**
     * @Route("/excercice4", name="excercice4")
     */
    public function index4(): Response
    {
        return $this->render('excercice/index.html.twig', [
            'users' => [
                new User("toto"),
                new User("tata"),
                new User("titi")
            ]
        ]);
        
    }
}
