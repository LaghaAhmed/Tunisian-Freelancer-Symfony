<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="corpsQuestion", type="string", length=255, nullable=false)
     */
    private $corpsquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="poidsQuestion", type="string", length=255, nullable=false)
     */
    private $poidsquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=false)
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tests", mappedBy="question")
     */
    private $test;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->test = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getQuestionId() {
        return $this->questionId;
    }

    public function getCorpsquestion() {
        return $this->corpsquestion;
    }

    public function getPoidsquestion() {
        return $this->poidsquestion;
    }

    public function getReponse() {
        return $this->reponse;
    }

    public function getType() {
        return $this->type;
    }

    public function getTest() {
        return $this->test;
    }

    public function setQuestionId($questionId) {
        $this->questionId = $questionId;
    }

    public function setCorpsquestion($corpsquestion) {
        $this->corpsquestion = $corpsquestion;
    }

    public function setPoidsquestion($poidsquestion) {
        $this->poidsquestion = $poidsquestion;
    }

    public function setReponse($reponse) {
        $this->reponse = $reponse;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setTest(\Doctrine\Common\Collections\Collection $test) {
        $this->test = $test;
    }


}
