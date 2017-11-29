<?php

namespace MyApp\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testsuivi
 *
 * @ORM\Table(name="testsuivi")
 * @ORM\Entity
 */
class Testsuivi
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
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     */
    private $utilisateurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="test_id", type="integer", nullable=false)
     */
    private $testId;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;



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
     * Set utilisateurId
     *
     * @param integer $utilisateurId
     *
     * @return Testsuivi
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    /**
     * Get utilisateurId
     *
     * @return integer
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * Set testId
     *
     * @param integer $testId
     *
     * @return Testsuivi
     */
    public function setTestId($testId)
    {
        $this->testId = $testId;

        return $this;
    }

    /**
     * Get testId
     *
     * @return integer
     */
    public function getTestId()
    {
        return $this->testId;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Testsuivi
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }
}
