<?php

namespace MyApp\JobownerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity
 */
class Groupes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="chefgroup_id", type="integer", nullable=false)
     */
    private $chefgroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomgroup", type="string", length=255, nullable=false)
     */
    private $nomgroup;

    public function getGroupId() {
        return $this->groupId;
    }

    public function getChefgroupId() {
        return $this->chefgroupId;
    }

    public function getNomgroup() {
        return $this->nomgroup;
    }

    public function setGroupId($groupId) {
        $this->groupId = $groupId;
    }

    public function setChefgroupId($chefgroupId) {
        $this->chefgroupId = $chefgroupId;
    }

    public function setNomgroup($nomgroup) {
        $this->nomgroup = $nomgroup;
    }


}
