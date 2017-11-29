<?php

namespace MyApp\JobownerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UtilisateursController extends Controller{

    public function parametreJobOwnerAction()
    {
        $em=$this->getDoctrine()->getEntityManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id=$user->getId();
        $jobowner=$em->getRepository('JobownerBundle:Utilisateurs')->GetJobowner($id);
        return $this->render('JobownerBundle:Utilisateurs:ParametreJobOwner.html.twig',  array('jobowner'=> $jobowner));
    }
    
    public function updateJobOwnerAction()
    {
         $Request = $this->getRequest();
        if($Request->getMethod()=="POST"){
          $em=$this->getDoctrine()->getEntityManager();$id=$Request->get('id');
        $jobowner=$em->getRepository('JobownerBundle:Utilisateurs')->find($id);
        $nom=$Request->get('nom');
        $prenom=$Request->get('prenom');
        $age=$Request->get('age');
        $adresse=$Request->get('adresse');
        $email=$Request->get('email');
        //$mdp=$Request->get('mdp');
        //$photo=uploadImage($Request->get('photo'));
        $jobowner->setNom($nom);
        $jobowner->setPrenom($prenom);
        $jobowner->setAge($age);
        $jobowner->setAdresse($adresse);
        $jobowner->setEmail($email);
        //$jobowner->setPassword($mdp);
       // $jobowner->setPhotoprofil($photo);
        $em->flush();
        return ($this->redirect($this->generateUrl("tunisian_freelancer_parametreJobowner")));  
        }
    }
    
    
    public function removeJobOwnerAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $jobowner=$em->getRepository('JobownerBundle:Utilisateurs')->findByUsername($id);
        $em->remove($jobowner);
        $em->flush();
        return $this->render('JobownerBundle:Utilisateurs:farewellJobowner.html.twig',  array());
    }

}
