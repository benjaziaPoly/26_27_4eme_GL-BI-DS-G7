<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription/test', name: 'test')]
    public function index(): Response
    {
        $a=2026;//data
        
        return $this->render(
            'inscription/index.html.twig',
            ["var_a"=>$a]
        );
    }

    #[Route('/tableau-bord',name:'dashbord')]
    public function dashbord(): Response 
    {
        //data statique: tableau associatif

        $indicateurs = [
            ['libelle' => 'Taux de réussite', 'valeur' => 87.4567, 'unite' => '%'],
            ['libelle' => 'Nombre d\'étudiants', 'valeur' => 1245, 'unite' => ''],
            ['libelle' => 'Budget consommé', 'valeur' => 15230.5, 'unite' => 'DT'],
        ];


      return $this->render (
        'inscription/tableau_bord.html.twig',
        [
            "data"=>$indicateurs
        ]);

    }

    #[Route('/etudiants',name:'liste_etudiants')]
    public function etudiants():Response{
        $tab=[
            "ali","salah","rim"
        ];
        return $this->render('inscription/list_etudiants.html.twig',
        ["etudiants"=>$tab]);
    }
    #[Route('/etduiants/{id}',name:'info_etudiants')]
    public function info($id): Response{
        $tab=[
            "ali","salah","rim"
        ];
        $erreur="";
        $nom="";
        if( $id>=0  && $id<=2){
            $nom=$tab[$id];
        }
        else{
            $erreur=" Id incorrect";
        }
     return $this->render('inscription/info_etudiant.html.twig',
     ['id'=>$id,"nom"=>$nom,"erreur"=>$erreur]);
    }

}
