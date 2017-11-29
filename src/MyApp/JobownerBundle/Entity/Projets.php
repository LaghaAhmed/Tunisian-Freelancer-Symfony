<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity(repositoryClass="MyApp\JobownerBundle\Entity\ProjetsRepository")
 */
class Projets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="projet_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projetId;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_freelancer", type="integer", nullable=true)
     */
    private $nombreFreelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="typeContrat", type="string", length=255, nullable=true)
     */
    private $typecontrat;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=true)
     */
    private $duree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat=0;
    
    /**
    *
    * @ORM\Column(name="username", type="string", length=255, nullable=true)
    */
    private $username;

    public function getProjetId() {
        return $this->projetId;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function getNombreFreelancer() {
        return $this->nombreFreelancer;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getTypecontrat() {
        return $this->typecontrat;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getEtat() {
        return $this->etat;
    }


    public function setProjetId($projetId) {
        $this->projetId = $projetId;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function setNombreFreelancer($nombreFreelancer) {
        $this->nombreFreelancer = $nombreFreelancer;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function setTypecontrat($typecontrat) {
        $this->typecontrat = $typecontrat;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }




}
