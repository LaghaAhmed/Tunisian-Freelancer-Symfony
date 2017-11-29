<?php

namespace MyApp\FreelancerBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ProjetsRepository extends EntityRepository{

public function findProjetsDQL($username)
{
    $query=$this->getEntityManager()
            ->createQuery("SELECT v from FreelancerBundle:Projets v WHERE v.username like :username and v.etat like '0'")
            ->setParameter('username','%'.$username.'%');
    return $query->getResult();
}
public function findDQL($id)
{
    $query=$this->getEntityManager()
            ->createQuery("SELECT v from FreelancerBundle:Projets v WHERE v.projetId like :projetid ")
            ->setParameter('projetid','%'.$id.'%');
    return $query->getResult();
}
}