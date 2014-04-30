<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Application\Sonata\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="is_sales_rep", type="boolean")
     */
    protected $isRep;

    public function setIsRep($isRep){
        $this->isRep = $isRep;
    }

    public function getIsRep(){
        return $this->isRep;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}