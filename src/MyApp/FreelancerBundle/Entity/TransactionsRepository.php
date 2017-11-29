<?php

namespace MyApp\FreelancerBundle\Entity;
use Doctrine\ORM\EntityRepository;

class TransactionsRepository extends EntityRepository{
    
    
    
    public function listTransactionJobOwner($idjobowner){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.utilisateurId=u.id and t.payeurId=".$idjobowner);
        return $query->getResult();
    }
    
    public function listTransactionFreelancer($idfreelancer){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.payeurId=u.id and t.utilisateurId=".$idfreelancer);
        return $query->getResult();
    }
    
    public function listTransactionJobOwnerByEmailandDate($idjobowner,$email,$date1,$date2){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.utilisateurId=u.id and t.payeurId=".$idjobowner."and u.email='".$email."' and t.date between '".$date1." 'and '".$date2."'");
        return $query->getResult();
    }
    
    public function listTransactionFreelancerByEmailandDate($idfreelancer,$email,$date1,$date2){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.payeurId=u.id and t.utilisateurId=".$idfreelancer."and u.email='".$email."' and t.date between '".$date1." 'and '".$date2."'");
        return $query->getResult();
    }
    
    public function listTransactionJobOwnerByDate($idjobowner,$date1,$date2){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.utilisateurId=u.id and t.payeurId=".$idjobowner."and t.date between '".$date1."'and'".$date2."'");
        return $query->getResult();
    }
    
    public function listTransactionFreelancerByDate($idfreelnacer,$date1,$date2){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id,u.nom,u.prenom,u.email,t.transactionId,t.date,t.montant FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.payeurId=u.id and t.utilisateurId=".$idfreelnacer."and t.date between '".$date1."'and'".$date2."'");
        return $query->getResult();
    }
    
    public function listEmailFreelancer($idjobowner){
        $query=$this->getEntityManager()
        ->createQuery("SELECT DISTINCT u.email FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.utilisateurId=u.id and t.payeurId=".$idjobowner);
        return $query->getResult();
    }
    
    public function listEmailJobowner($idfreelancer){
        $query=$this->getEntityManager()
        ->createQuery("SELECT DISTINCT u.email FROM FreelancerBundle:Transactions t JOIN FreelancerBundle:Utilisateurs u where t.payeurId=u.id and t.utilisateurId=".$idfreelancer);
        return $query->getResult();
    }
    
    public function findIdByEmail($email){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id FROM FreelancerBundle:Utilisateurs u where u.email='".$email."'");
        return $query->getResult();
    }
    
    public function updateFreelancerMontant($id,$montant){
        $query=$this->getEntityManager()
        ->createQuery("update FreelancerBundle:Utilisateurs u set u.montant= u.montant +".$montant."where u.id= ".$id);
        return $query->getResult();
    }
    public function updateJobownerMontant($id,$montant){
        $query=$this->getEntityManager()
        ->createQuery("update FreelancerBundle:Utilisateurs u set u.montant= u.montant -".$montant."where u.id= ".$id);
        return $query->getResult();
    }
    
    public function findMontantById($id){
         $query=$this->getEntityManager()
        ->createQuery("SELECT u.montant FROM FreelancerBundle:Utilisateurs u where u.id= ".$id);
        return $query->getResult();
    }
    
}
