<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetv
 *
 * @ORM\Table(name="projetv")
 * @ORM\Entity(repositoryClass="MyApp\JobownerBundle\Entity\ProjetvRepository")
 */
class Projetv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id;

    /**
     * @var string
     *
     * @ORM\Column(name="freelancer", type="string", length=255, nullable=true)
     */
    private $freelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="jobowner", type="string", length=255, nullable=true)
     */
    private $jobowner;

    /**
     * @var string
     *
     * @ORM\Column(name="projetid", type="integer",nullable=true)
     */
    private $projetId;

    public function getId() {
        return $this->Id;
    }

    public function getFreelancer() {
        return $this->freelancer;
    }

    public function getJobowner() {
        return $this->jobowner;
    }

    public function getProjetId() {
        return $this->projetId;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setFreelancer($freelancer) {
        $this->freelancer = $freelancer;
    }

    public function setJobowner($jobowner) {
        $this->jobowner = $jobowner;
    }

    public function setProjetId($projetId) {
        $this->projetId = $projetId;
    }


    
    
}