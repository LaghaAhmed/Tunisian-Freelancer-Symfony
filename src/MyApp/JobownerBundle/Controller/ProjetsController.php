<?php

namespace MyApp\JobownerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\JobownerBundle\Entity\Projets;
use MyApp\JobownerBundle\Entity\Projetsuivi;
use MyApp\JobownerBundle\Form\AjoutProjetForm;

class ProjetsController extends Controller {


    public function addAction()
    {
      
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userID=$user->getUsername();
    //Instantiation de l'entité Modele
        $Projets = new Projets();
        // Créer notre formulaire
        $form = $this->createForm(new AjoutProjetForm(),$Projets);
        //Récuperer les données
        $Request = $this->get('request');
        //Verifier si l'appel se fait suite à un POST
        //Inserer les données saisies par l'user dans l'entity Modele
        $form->handleRequest($Request);
        //Tester si les données saisies sont bien validées 
        if($form->isValid())
        {
           //
            $em= $this->getDoctrine()->getManager();
            $em->persist($Projets);
            $Projets->setUsername($userID);
            $em->flush();
            return $this->redirect($this->generateUrl('Freelance_Affichage_Projets'));
        }
        return $this->render('JobownerBundle:Projets:add.html.twig',array(
            'form'=>$form->createView()
        ));
    }
     public function listAction()
    {
        //Créer une instance de l'em*
        $em = $this->getDoctrine()->getEntityManager();
        $modeles = $em->getRepository('JobownerBundle:Projets')->findAll();
        return $this->render('JobownerBundle:Projets:list.html.twig',array(
                'modeles'=>$modeles
        ));
    }

     public function finduserAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userID=$user->getUsername();
        $em = $this->get('doctrine')->getManager();
        $modeles = $em->getRepository('JobownerBundle:Projets')
                    ->findProjetsDQL($userID);
        return $this->render('JobownerBundle:Projets:listmp.html.twig',array(
                'modeles'=>$modeles
        ));
    }
    
    public function findidAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $modeles = $em->getRepository('JobownerBundle:Projetv')
                    ->findProjetvDQL($id);
        return $this->render('JobownerBundle:Projets:listp.html.twig',array(
                'modeles'=>$modeles
        ));
    }
    public function rechercheAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $modeles = $em->getRepository('JobownerBundle:Projets')
                    ->findDQL($id);
        return $this->render('JobownerBundle:Projets:recherche.html.twig',array(
                'modeles'=>$modeles
        ));
    }
    
    
    
     public function deleteAction($id)
    {
       //Créer une instance de l'EntityManager
      $em = $this->getDoctrine()->getEntityManager();
      $Modele = $em->getRepository('JobownerBundle:Projets')->find($id);
      $em->remove($Modele);
      $em->flush();
      return $this->redirect($this->generateUrl('Freelance_Affichage_Pjob'));
      
    }
    
        public function updateAction($id)
    {
        //em
        $em = $this->getDoctrine()->getManager();
        //Recuperer l'entité Modele de l'id correspond
        $Modele = $em->getRepository('JobownerBundle:Projets')->find($id);
        //Recuperer les données
        $Request = $this->get('request');
        // Créer une instance du formulaire
        $form = $this->createForm(new AjoutProjetForm(),$Modele);
        $form->handleRequest($Request);
        if($form->isValid())
        {
            $em->persist($Modele);
            $em->flush();
            return $this->redirect($this->generateUrl('Freelance_Affichage_Pjob'));
        }
        return $this->render('JobownerBundle:Projets:add.html.twig',array(
            'form'=>$form->createView()
        ));
    }
    
    
    public function deleteProjetAction($id)
    {
       //Créer une instance de l'EntityManager
      $em = $this->getDoctrine()->getManager();
      $Modele = $em->getRepository('JobownerBundle:Projetv')->suppProjetvDQL($id);
      $em->flush();
      return $this->redirect($this->generateUrl('Freelance_Affichage_Projets'));
      
    }
        public function ajoutAction($id,$freelancer,$jobowner)
    {
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
            //instantiation de Modele
 
            //Recuperation des données
            $Modele = new Projetsuivi();
            $Modele->setFreelancer($freelancer);
            $Modele->setJobowner ($jobowner);
            $Modele->setProjetid ($id);
            //instantiation de l'em
            $em = $this->getDoctrine()->getManager();
            $em->persist($Modele);
            $em->flush();
            return $this->redirect($this->generateUrl('Freelance_supprimer_projet', array('id' => $id)));
        }
        return $this->render('JobownerBundle:Projets:affecter.html.twig', array());
    }
    public function listProjetSuiviAction()
    {
        //Créer une instance de l'em*
        $em = $this->getDoctrine()->getEntityManager();
        $modeles = $em->getRepository('JobownerBundle:Projetsuivi')->findAll();
        return $this->render('JobownerBundle:Projets:projetencours.html.twig',array(
                'modeles'=>$modeles
        ));
    }
    
    
    public function ProjetSuiviAction()
    {
        //Créer une instance de l'em*
        $em = $this->getDoctrine()->getEntityManager();
        $modeles = $em->getRepository('JobownerBundle:Projetsuivi')->findAll();
        return $this->render('JobownerBundle:Projets:projetencours.html.twig',array(
                'modeles'=>$modeles
        ));
    }
}
