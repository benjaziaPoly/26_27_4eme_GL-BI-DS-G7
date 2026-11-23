<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Image;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
/**
  Ajout d'un job 
  affichage des list des jobs
  affichage info d'un seul job
 */
final class JobController extends AbstractController
{
    
   #[Route("/job/create-demo", name:"job_add_demo")] 
   public function createDemo(EntityManagerInterface $em):Response {
    //C+M
    $job = new Job();
    $job->setType("CDI");
    $job->setCompany("Société 1");
    $job->setDescription("Ingénieur DataScience");
    $job->setExpiresAt(new \DateTimeImmutable(" + 45 days"));
    //creation d'une image
    $img= new Image();
    $img->setUrl('https://www.esiee-it.fr/sites/default/files/2026-08/pourquoi-ia-ne-remplacera-pas-les-developpeurs.webp');
    $img->setAlt('description image 1');
    $job->setImage($img);

    //save 
    $em->persist($job);
    $em->flush();//////
    //V
    return $this->render(
        'job/create_demo.html.twig',
         ["id"=>$job->getId()]
        );
   }

   #[Route('/job', name: 'job_index')]
    public function index(EntityManagerInterface $em): Response
    {
        /*
          find($id) : rechrche en se basant sur Id: => 0, 1
          findAll() : => array
          findBy()  : recherche selon plusiuers criteres
                    findBy(["ville"=>"sousse","type"=>"cdi"])
          findOne() :findBy(["ville"=>"sousse","type"=>"cdi"]) : 0, 1
         */
        $listjob = $em->getRepository(Job::class)->findAll();

        return $this->render('job/index.html.twig', [
            'jobs' => $listjob
        ]);
    }

    #[Route("/job/{id}", name:"job_show")]
    public function show(int $id, EntityManagerInterface $em){
       $job=$em->getRepository(Job::class)->find($id);
       
       return $this->render("job/show.html.twig",['job'=>$job]);
    }
}
