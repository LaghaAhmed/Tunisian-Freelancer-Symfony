<?php

namespace MyApp\JobownerBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ProjetvRepository extends EntityRepository{

public function findProjetvDQL($id)
{
    $query=$this->getEntityManager()
            ->createQuery("SELECT v from JobownerBundle:Projetv v WHERE v.projetId like :projetid ")
            ->setParameter('projetid','%'.$id.'%');
    return $query->getResult();
}
public function suppProjetvDQL($id)
    {

    $query=$this->getEntityManager()
            ->createQuery("Delete from JobownerBundle:Projetv v WHERE v.projetId like :projetid ")
            ->setParameter('projetid', $id);
    $query->execute();
    }


}