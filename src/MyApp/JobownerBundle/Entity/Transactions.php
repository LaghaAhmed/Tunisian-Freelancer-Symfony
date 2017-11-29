<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions")
 * @ORM\Entity(repositoryClass="MyApp\JobownerBundle\Entity\TransactionsRepository")
 */
class Transactions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transactionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilisateur_id", type="integer", nullable=false)
     */
    private $utilisateurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="payeur_id", type="integer", nullable=false)
     */
    private $payeurId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    public function getTransactionId() {
        return $this->transactionId;
    }

    public function getUtilisateurId() {
        return $this->utilisateurId;
    }

    public function getPayeurId() {
        return $this->payeurId;
    }

    public function getDate() {
        return $this->date;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function setTransactionId($transactionId) {
        $this->transactionId = $transactionId;
    }

    public function setUtilisateurId($utilisateurId) {
        $this->utilisateurId = $utilisateurId;
    }

    public function setPayeurId($payeurId) {
        $this->payeurId = $payeurId;
    }

    public function setDate(\DateTime $date) {
        $this->date = $date;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }


}
