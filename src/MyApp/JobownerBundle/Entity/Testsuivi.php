<?php

namespace MyApp\JobownerBundle\Entity;

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

    public function getId() {
        return $this->id;
    }

    public function getUtilisateurId() {
        return $this->utilisateurId;
    }

    public function getTestId() {
        return $this->testId;
    }

    public function getScore() {
        return $this->score;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUtilisateurId($utilisateurId) {
        $this->utilisateurId = $utilisateurId;
    }

    public function setTestId($testId) {
        $this->testId = $testId;
    }

    public function setScore($score) {
        $this->score = $score;
    }


}
