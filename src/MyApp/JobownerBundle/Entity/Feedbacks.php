<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacks
 *
 * @ORM\Table(name="feedbacks")
 * @ORM\Entity
 */
class Feedbacks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedback_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedbackId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     */
    private $utilisateurId;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;
    public function getFeedbackId() {
        return $this->feedbackId;
    }

    public function getUtilisateurId() {
        return $this->utilisateurId;
    }

    public function getCommentaire() {
        return $this->commentaire;
    }

    public function getScore() {
        return $this->score;
    }

    public function setFeedbackId($feedbackId) {
        $this->feedbackId = $feedbackId;
    }

    public function setUtilisateurId($utilisateurId) {
        $this->utilisateurId = $utilisateurId;
    }

    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    public function setScore($score) {
        $this->score = $score;
    }



}
