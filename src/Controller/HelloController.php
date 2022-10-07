<?php

namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/etudiant/{id}', name: 'app_hello')]
    public function etudiantPost(\Symfony\Component\HttpFoundation\Request $request, int $id):Response

    {

        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
            'Kobi'=>'Thayendran',
            'id'=>$id,
            'name'=>$request->get("name")

        ]);
    }
}
