<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetsuivi
 *
 * @ORM\Table(name="projetsuivi")
 * @ORM\Entity
 */
class Projetsuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
    *
    * @ORM\Column(name="projetid", type="integer", nullable=true)
    */
    private $projetid;

    /**
    *
    * @ORM\Column(name="jobowner", type="string", length=255, nullable=true)
    */
    private $jobowner;
    /**
    *
    * @ORM\Column(name="freelancer", type="string", length=255, nullable=true)
    */
    private $freelancer;
    
    

    public function getId() {
        return $this->id;
    }

    public function getProjetid() {
        return $this->projetid;
    }

    public function getJobowner() {
        return $this->jobowner;
    }

    public function getFreelancer() {
        return $this->freelancer;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setProjetid($projetid) {
        $this->projetid = $projetid;
    }

    public function setJobowner($jobowner) {
        $this->jobowner = $jobowner;
    }

    public function setFreelancer($freelancer) {
        $this->freelancer = $freelancer;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


}
