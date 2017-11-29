<?php

namespace MyApp\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetv
 *
 * @ORM\Table(name="projetv")
 * @ORM\Entity
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
    private $id;

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
     * @var integer
     *
     * @ORM\Column(name="projetid", type="integer", nullable=true)
     */
    private $projetid;



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
     * Set freelancer
     *
     * @param string $freelancer
     *
     * @return Projetv
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

    /**
     * Set jobowner
     *
     * @param string $jobowner
     *
     * @return Projetv
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
     * Set projetid
     *
     * @param integer $projetid
     *
     * @return Projetv
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
}
