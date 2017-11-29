<?php

namespace MyApp\JobownerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="MyApp\JobownerBundle\Entity\UtilisateursRepository")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;

    /**
    * 
    *  @ORM\Column(name="photoprofil", type="string", length=255, nullable=true)
    */
    private $photoprofil;
     /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255, nullable=true)
     */
    private $cv;
    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=true)
     */
    private $montant;
   
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getType() {
        return $this->type;
    }

    public function getPhotoprofil() {
        return $this->photoprofil;
    }

    public function getCv() {
        return $this->cv;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setPhotoprofil($photoprofil) {
        $this->photoprofil = $photoprofil;
    }

    public function setCv($cv) {
        $this->cv = $cv;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }

        public function getAbsolutePath()
    {
        return null === $this->photoprofil
            ? null
            : $this->getUploadRootDir().'/'.$this->photoprofil;
    }

    public function getWebPath()
    {
        return null === $this->photoprofil
            ? null
            : $this->getUploadDir().'/'.$this->photoprofil;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
    
    public function __construct()     
            {         
        parent::__construct();        
        // your own logic     
            } 
    
           

    
}
