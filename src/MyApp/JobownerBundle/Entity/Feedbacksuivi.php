<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacksuivi
 *
 * @ORM\Table(name="feedbacksuivi")
 * @ORM\Entity
 */
class Feedbacksuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedback_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $feedbackId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $utilisateurId;
    public function getFeedbackId() {
        return $this->feedbackId;
    }

    public function getUtilisateurId() {
        return $this->utilisateurId;
    }

    public function setFeedbackId($feedbackId) {
        $this->feedbackId = $feedbackId;
    }

    public function setUtilisateurId($utilisateurId) {
        $this->utilisateurId = $utilisateurId;
    }



}
