<?php

namespace MyApp\JobownerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\JobownerBundle\Entity\Transactions;





class TransactionsController extends Controller{
    
        public function addTransactionJobOwnerAction()
    {
        $Request = $this->getRequest();
        $transaction = new Transactions();
        if($Request->getMethod()=="POST")
        {
            $em=$this->getDoctrine()->getEntityManager();
            $email = $Request->get('email');
            
            $u=$em->getRepository("JobownerBundle:Transactions")
                ->findIdByEmail($email);
            
            $p=$Request->get('idp');
            $date = $Request->get('date');
            $montant = $Request->get('montant');
            
            if($u != null && $date != "" && $montant > 0){
                
               while(list($key1, $sub_array) = each($u)) {
            while(list($key2, $value) = each($sub_array)) {
            $em->getRepository("JobownerBundle:Transactions")
                ->updateFreelancerMontant($value,$montant);
            $transaction->setUtilisateurId($value);
            }
            }
            
            $em->getRepository("JobownerBundle:Transactions")
                ->updateJobownerMontant($p,$montant);
            
            $transaction->setPayeurId($p);
            $transaction->setDate(new \DateTime($date));
            $transaction->setMontant($montant);
            $em->persist($transaction);
            $em->flush(); 
            
            }
            
           return ($this->redirect($this->generateUrl("tunisian_freelancer_listTransactionByJobowner")));
        }
    }
    
    public function listTransactionJobOwnerAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id=$user->getId();
        $em=$this->getDoctrine()->getEntityManager();
        $listTransationJobOwner=$em->getRepository("JobownerBundle:Transactions")
                ->listTransactionJobOwner($id);
        $listEmailFreelancer=$em->getRepository("JobownerBundle:Transactions")
                ->listEmailFreelancer($id);
        $montant=$em->getRepository("JobownerBundle:Transactions")
                ->findMontantById($id);
        $length=sizeof($listTransationJobOwner);
            if($length > 0){
              $paginator  = $this->get('knp_paginator')->paginate($listTransationJobOwner,$this->get('request')->query->get('page', 1),2);
        return $this->render("JobownerBundle:Transactions:TransactionsJobOwner.html.twig", array("listTransactionByjobOwner" => $paginator,"listEmailFreelancer" => $listEmailFreelancer,"idp"=>$id,"montant"=>$montant));  
            }else{
               return $this->render("JobownerBundle:Transactions:TransactionsJobOwner.html.twig", array("listTransactionByjobOwner" => $listTransationJobOwner,"listEmailFreelancer" => $listEmailFreelancer,"idp"=>$id,"montant"=>$montant)); 
            }
        
    }
    
    
    
    public function deleteTransactionJobOwnerAction($idt,$idp)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $transaction=$em->getRepository("JobownerBundle:Transactions")->find($idt);
        $em->remove($transaction);
        $em->flush();
        return ($this->redirect($this->generateUrl("tunisian_freelancer_listTransactionByJobowner")));
    }
    
    public function updateTransactionJobOwnerAction()
    {
        $Request = $this->getRequest();
        $transaction = new Transactions();
        if($Request->getMethod()=="POST")
        {
            $em=$this->getDoctrine()->getEntityManager();
            $idt = $Request->get('idtransaction');
            $idp = $Request->get('idp');
            $transaction=$em->getRepository("JobownerBundle:Transactions")->find($idt);
            $date = $Request->get('date');
            $transaction->setDate(new \DateTime($date));
            $em->flush();
           return ($this->redirect($this->generateUrl("tunisian_freelancer_listTransactionByJobowner")));
        }
    }
    
    
    public function searchTransactionJobOwnerAction()
    {
        $Request = $this->getRequest();
        $transaction = new Transactions();
        if($Request->getMethod()=="POST")
        {
            $em=$this->getDoctrine()->getEntityManager();
            $email = $Request->get('email');
            $idp = $Request->get('idp');
            $date1 = $Request->get('date1');
            $date2 = $Request->get('date2');
            if($email != "tous")
            {$transaction=$em->getRepository("JobownerBundle:Transactions")
            ->listTransactionJobOwnerByEmailandDate($idp,$email,$date1,$date2);
            }else
            {$transaction=$em->getRepository("JobownerBundle:Transactions")
            ->listTransactionJobOwnerByDate($idp,$date1,$date2);
            }
            $listEmailFreelancer=$em->getRepository("JobownerBundle:Transactions")
                ->listEmailFreelancer($idp);
            $montant=$em->getRepository("JobownerBundle:Transactions")
                ->findMontantById($idp);
            $length=sizeof($transaction);
            if($length > 0){
               $paginator  = $this->get('knp_paginator')->paginate($transaction,$this->get('request')->query->get('page', 1),sizeof($transaction));
           return $this->render("JobownerBundle:Transactions:TransactionsJobOwner.html.twig", array("listTransactionByjobOwner" => $paginator,"listEmailFreelancer" => $listEmailFreelancer,"idp"=>$idp,"montant"=>$montant)); 
            }else{
              return $this->render("JobownerBundle:Transactions:TransactionsJobOwner.html.twig", array("listTransactionByjobOwner" => $transaction,"listEmailFreelancer" => $listEmailFreelancer,"idp"=>$idp,"montant"=>$montant));  
            }
        }
    }
    
    
    public function listTransactionFreelancerAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $listTransationFreelancer=$em->getRepository("JobownerBundle:Transactions")
                ->listTransactionFreelancer($id);
        $montant=$em->getRepository("JobownerBundle:Transactions")
                ->findMontantById($id);
        $listEmailJobowner=$em->getRepository("JobownerBundle:Transactions")
                ->listEmailJobowner($id);
        $length=sizeof($listTransationFreelancer);
        if($length > 0){
          $paginator  = $this->get('knp_paginator')->paginate($listTransationFreelancer,$this->get('request')->query->get('page', 1),2);
        return $this->render("JobownerBundle:Transactions:TransactionsFreelancer.html.twig", array("listTransactionByfreelancer" => $paginator,"idf"=>$id,"montant"=>$montant,"listEmailJobowner" => $listEmailJobowner));  
        }else{
           return $this->render("JobownerBundle:Transactions:TransactionsFreelancer.html.twig", array("listTransactionByfreelancer" => $listTransationFreelancer,"idf"=>$id,"montant"=>$montant,"listEmailJobowner" => $listEmailJobowner)); 
        }
        
    }
    
    public function searchTransactionFreelancerAction()
    {
        $Request = $this->getRequest();
        $transaction = new Transactions();
        if($Request->getMethod()=="POST")
        {
            $em=$this->getDoctrine()->getEntityManager();
            $email = $Request->get('email');
            $idf = $Request->get('idf');
            $date1 = $Request->get('date1');
            $date2 = $Request->get('date2');
            if($email != "tous")
            {$transaction=$em->getRepository("JobownerBundle:Transactions")
            ->listTransactionFreelancerByEmailandDate($idf,$email,$date1,$date2);
            }else
            {$transaction=$em->getRepository("JobownerBundle:Transactions")
            ->listTransactionFreelancerByDate($idf,$date1,$date2);
            }
            $listEmailFreelancer=$em->getRepository("JobownerBundle:Transactions")
                ->listEmailJobowner($idf);
            $montant=$em->getRepository("JobownerBundle:Transactions")
                ->findMontantById($idf);
            $length=sizeof($transaction);
            if($length > 0){
              $paginator  = $this->get('knp_paginator')->paginate($transaction,$this->get('request')->query->get('page', 1),$length);
           return $this->render("JobownerBundle:Transactions:TransactionsFreelancer.html.twig", array("listTransactionByfreelancer" => $paginator ,"listEmailJobowner" => $listEmailFreelancer,"idf"=>$idf,"montant"=>$montant));  
            }else{
                return $this->render("JobownerBundle:Transactions:TransactionsFreelancer.html.twig", array("listTransactionByfreelancer" => $transaction ,"listEmailJobowner" => $listEmailFreelancer,"idf"=>$idf,"montant"=>$montant)); 
            }
            
        }
    }
}
