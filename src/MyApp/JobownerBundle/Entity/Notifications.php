<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifications
 *
 * @ORM\Table(name="notifications")
 * @ORM\Entity
 */
class Notifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notification_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sender_id", type="integer", nullable=false)
     */
    private $senderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver_id", type="integer", nullable=false)
     */
    private $receiverId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    public function getNotificationId() {
        return $this->notificationId;
    }

    public function getSenderId() {
        return $this->senderId;
    }

    public function getReceiverId() {
        return $this->receiverId;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setNotificationId($notificationId) {
        $this->notificationId = $notificationId;
    }

    public function setSenderId($senderId) {
        $this->senderId = $senderId;
    }

    public function setReceiverId($receiverId) {
        $this->receiverId = $receiverId;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }


}
