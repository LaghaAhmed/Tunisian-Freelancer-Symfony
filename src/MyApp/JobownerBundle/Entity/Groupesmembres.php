<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupesmembres
 *
 * @ORM\Table(name="groupesmembres")
 * @ORM\Entity
 */
class Groupesmembres
{
    /**
     * @var string
     *
     * @ORM\Column(name="member_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;
    public function getMemberId() {
        return $this->memberId;
    }

    public function getGroupId() {
        return $this->groupId;
    }

    public function setMemberId($memberId) {
        $this->memberId = $memberId;
    }

    public function setGroupId($groupId) {
        $this->groupId = $groupId;
    }



}
