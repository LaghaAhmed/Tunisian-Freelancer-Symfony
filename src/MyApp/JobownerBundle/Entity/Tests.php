<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table(name="tests")
 * @ORM\Entity
 */
class Tests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="test_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $testId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTest", type="string", length=255, nullable=false)
     */
    private $nomtest;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionTest", type="string", length=255, nullable=false)
     */
    private $descriptiontest;

    /**
     * @var string
     *
     * @ORM\Column(name="typeTest", type="string", length=255, nullable=false)
     */
    private $typetest;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreQuestions", type="integer", nullable=false)
     */
    private $nombrequestions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Questions", inversedBy="test")
     * @ORM\JoinTable(name="testquestions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="test_id", referencedColumnName="test_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="question_id", referencedColumnName="question_id")
     *   }
     * )
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getTestId() {
        return $this->testId;
    }

    public function getNomtest() {
        return $this->nomtest;
    }

    public function getDescriptiontest() {
        return $this->descriptiontest;
    }

    public function getTypetest() {
        return $this->typetest;
    }

    public function getNombrequestions() {
        return $this->nombrequestions;
    }

    public function getQuestion() {
        return $this->question;
    }

    public function setTestId($testId) {
        $this->testId = $testId;
    }

    public function setNomtest($nomtest) {
        $this->nomtest = $nomtest;
    }

    public function setDescriptiontest($descriptiontest) {
        $this->descriptiontest = $descriptiontest;
    }

    public function setTypetest($typetest) {
        $this->typetest = $typetest;
    }

    public function setNombrequestions($nombrequestions) {
        $this->nombrequestions = $nombrequestions;
    }

    public function setQuestion(\Doctrine\Common\Collections\Collection $question) {
        $this->question = $question;
    }


}
