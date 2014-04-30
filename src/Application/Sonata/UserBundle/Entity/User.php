<?php

/**
 * This file is part of the OnTrack project.
 *
 * (c)2014 Jason Balthis jason.balthis@gmail.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author Jason Balthis jason.balthis@gmail.com
 */
class User extends BaseUser
{
    /**
     * @var integer $id
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