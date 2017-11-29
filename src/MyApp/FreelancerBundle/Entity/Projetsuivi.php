<?php

namespace MyApp\FreelancerBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="projetid", type="integer", nullable=true)
     */
    private $projetid;

    /**
     * @var string
     *
     * @ORM\Column(name="jobowner", type="string", length=255, nullable=true)
     */
    private $jobowner;

    /**
     * @var string
     *
     * @ORM\Column(name="freelancer", type="string", length=255, nullable=true)
     */
    private $freelancer;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projetid
     *
     * @param integer $projetid
     *
     * @return Projetsuivi
     */
    public function setProjetid($projetid)
    {
        $this->projetid = $projetid;

        return $this;
    }

    /**
     * Get projetid
     *
     * @return integer
     */
    public function getProjetid()
    {
        return $this->projetid;
    }

    /**
     * Set jobowner
     *
     * @param string $jobowner
     *
     * @return Projetsuivi
     */
    public function setJobowner($jobowner)
    {
        $this->jobowner = $jobowner;

        return $this;
    }

    /**
     * Get jobowner
     *
     * @return string
     */
    public function getJobowner()
    {
        return $this->jobowner;
    }

    /**
     * Set freelancer
     *
     * @param string $freelancer
     *
     * @return Projetsuivi
     */
    public function setFreelancer($freelancer)
    {
        $this->freelancer = $freelancer;

        return $this;
    }

    /**
     * Get freelancer
     *
     * @return string
     */
    public function getFreelancer()
    {
        return $this->freelancer;
    }
}
