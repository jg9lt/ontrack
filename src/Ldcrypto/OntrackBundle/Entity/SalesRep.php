<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesRep
 *
 * @ORM\Table(name="ot_sales_rep")
 * @ORM\Entity
 */
class SalesRep
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_id", type="string", length=255)
     */
    private $salesRepId;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_first_name", type="string", length=255)
     */
    private $salesRepFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_last_name", type="string", length=255)
     */
    private $salesRepLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_username")
     */
    private $salesRepUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_phone", type="string", length=255)
     */
    private $salesRepPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_rep_email", type="string", length=255)
     */
    private $salesRepEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sales_rep_created_on", type="datetime")
     */
    private $salesRepCreatedOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sales_rep_modified_on", type="datetime")
     */
    private $salesRepModifiedOn;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salesRepId
     *
     * @param string $salesRepId
     * @return SalesRep
     */
    public function setSalesRepId($salesRepId)
    {
        $this->salesRepId = $salesRepId;

        return $this;
    }

    /**
     * Get salesRepId
     *
     * @return string 
     */
    public function getSalesRepId()
    {
        return $this->salesRepId;
    }

    /**
     * Set salesRepFirstName
     *
     * @param string $salesRepFirstName
     * @return SalesRep
     */
    public function setSalesRepFirstName($salesRepFirstName)
    {
        $this->salesRepFirstName = $salesRepFirstName;

        return $this;
    }

    /**
     * Get salesRepFirstName
     *
     * @return string 
     */
    public function getSalesRepFirstName()
    {
        return $this->salesRepFirstName;
    }

    /**
     * Set salesRepLastName
     *
     * @param string $salesRepLastName
     * @return SalesRep
     */
    public function setSalesRepLastName($salesRepLastName)
    {
        $this->salesRepLastName = $salesRepLastName;

        return $this;
    }

    /**
     * Get salesRepLastName
     *
     * @return string 
     */
    public function getSalesRepLastName()
    {
        return $this->salesRepLastName;
    }

    /**
     * Set salesRepUsername
     *
     * @param string $salesRepUsername
     * @return SalesRep
     */
    public function setSalesRepUsername($salesRepUsername)
    {
        $this->salesRepUsername = $salesRepUsername;

        return $this;
    }

    /**
     * Get salesRepUsername
     *
     * @return string 
     */
    public function getSalesRepUsername()
    {
        return $this->salesRepUsername;
    }

    /**
     * Set salesRepPhone
     *
     * @param string $salesRepPhone
     * @return SalesRep
     */
    public function setSalesRepPhone($salesRepPhone)
    {
        $this->salesRepPhone = $salesRepPhone;

        return $this;
    }

    /**
     * Get salesRepPhone
     *
     * @return string 
     */
    public function getSalesRepPhone()
    {
        return $this->salesRepPhone;
    }

    /**
     * Set salesRepEmail
     *
     * @param string $salesRepEmail
     * @return SalesRep
     */
    public function setSalesRepEmail($salesRepEmail)
    {
        $this->salesRepEmail = $salesRepEmail;

        return $this;
    }

    /**
     * Get salesRepEmail
     *
     * @return string 
     */
    public function getSalesRepEmail()
    {
        return $this->salesRepEmail;
    }

    /**
     * Set salesRepCreatedOn
     *
     * @param \DateTime $salesRepCreatedOn
     * @return SalesRep
     */
    public function setSalesRepCreatedOn($salesRepCreatedOn)
    {
        $this->salesRepCreatedOn = $salesRepCreatedOn;

        return $this;
    }

    /**
     * Get salesRepCreatedOn
     *
     * @return \DateTime 
     */
    public function getSalesRepCreatedOn()
    {
        return $this->salesRepCreatedOn;
    }

    /**
     * Set salesRepModifiedOn
     *
     * @param \DateTime $salesRepModifiedOn
     * @return SalesRep
     */
    public function setSalesRepModifiedOn($salesRepModifiedOn)
    {
        $this->salesRepModifiedOn = $salesRepModifiedOn;

        return $this;
    }

    /**
     * Get salesRepModifiedOn
     *
     * @return \DateTime 
     */
    public function getSalesRepModifiedOn()
    {
        return $this->salesRepModifiedOn;
    }
}
