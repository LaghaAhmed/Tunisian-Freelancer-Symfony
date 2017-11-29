<?php

namespace MyApp\FreelancerBundle\Entity;
use Doctrine\ORM\EntityRepository;

class UtilisateursRepository extends EntityRepository{
    
    public function GetJobowner($id){
        $query=$this->getEntityManager()
        ->createQuery("SELECT u.id , u.nom , u.prenom ,u.age,u.adresse,u.email,u.password,u.photoprofil,u.type,u.username FROM FreelancerBundle:Utilisateurs u where u.id=".$id);
        return $query->getResult();
    }
       
}
