<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AcceuilController extends AbstractController
{
    #[Route('/acceuil/{prenom}', name: 'app_acceuil')]
    public function index($prenom,Request $request): Response
    {
        //dd($request);
        //die('maty leaza ');
        $var= "sedra";
        return $this->render('acceuil/index.html.twig', [
            'name'=> $var,
            'prm'=> $prenom,
        ]);
    }

    #[Route('/pageFormulaireAcceuil', name: 'app_formulaireacceuil')]
    public function acceuil(): Response
    {
        //die('maty leaza ');
        $rand= rand(0,4);
        var_dump($rand);
        if($rand==2){
            $var= "sedra";
            return $this->render('acceuil/acceuil.html.twig', [
                'name'=> $var,
            ]);
        }
        return $this->forward(controller: 'App\\Controller\\AcceuilController::index' );
    }
}
