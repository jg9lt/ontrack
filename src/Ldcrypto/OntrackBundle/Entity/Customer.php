<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="ot_customer")
 * @ORM\Entity
 */
class Customer
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
     * @ORM\Column(name="customer_name", type="string", length=255)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=255)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_primary_phone", type="string", length=255)
     */
    private $customerPrimaryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_alternate_phone", type="string", length=255)
     */
    private $customerAlternatePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=255)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_street_1", type="string", length=255)
     */
    private $customerStreet1;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_street_2", type="string", length=255)
     */
    private $customerStreet2;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city", type="string", length=255)
     */
    private $customerCity;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_state", type="string", length=255)
     */
    private $customerState;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_zip", type="string", length=255)
     */
    private $customerZip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_created_on", type="datetime")
     */
    private $customerCreatedOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="customer_modified_on", type="datetime")
     */
    private $customerModifiedOn;


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
     * Set customerName
     *
     * @param string $customerName
     * @return Customer
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string 
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set customerPrimaryPhone
     *
     * @param string $customerPrimaryPhone
     * @return Customer
     */
    public function setCustomerPrimaryPhone($customerPrimaryPhone)
    {
        $this->customerPrimaryPhone = $customerPrimaryPhone;

        return $this;
    }

    /**
     * Get customerPrimaryPhone
     *
     * @return string 
     */
    public function getCustomerPrimaryPhone()
    {
        return $this->customerPrimaryPhone;
    }

    /**
     * Set customerAlternatePhone
     *
     * @param string $customerAlternatePhone
     * @return Customer
     */
    public function setCustomerAlternatePhone($customerAlternatePhone)
    {
        $this->customerAlternatePhone = $customerAlternatePhone;

        return $this;
    }

    /**
     * Get customerAlternatePhone
     *
     * @return string 
     */
    public function getCustomerAlternatePhone()
    {
        return $this->customerAlternatePhone;
    }

    /**
     * Set customerEmail
     *
     * @param string $customerEmail
     * @return Customer
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get customerEmail
     *
     * @return string 
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set customerStreet1
     *
     * @param string $customerStreet1
     * @return Customer
     */
    public function setCustomerStreet1($customerStreet1)
    {
        $this->customerStreet1 = $customerStreet1;

        return $this;
    }

    /**
     * Get customerStreet1
     *
     * @return string 
     */
    public function getCustomerStreet1()
    {
        return $this->customerStreet1;
    }

    /**
     * Set customerStreet2
     *
     * @param string $customerStreet2
     * @return Customer
     */
    public function setCustomerStreet2($customerStreet2)
    {
        $this->customerStreet2 = $customerStreet2;

        return $this;
    }

    /**
     * Get customerStreet2
     *
     * @return string 
     */
    public function getCustomerStreet2()
    {
        return $this->customerStreet2;
    }

    /**
     * Set customerCity
     *
     * @param string $customerCity
     * @return Customer
     */
    public function setCustomerCity($customerCity)
    {
        $this->customerCity = $customerCity;

        return $this;
    }

    /**
     * Get customerCity
     *
     * @return string 
     */
    public function getCustomerCity()
    {
        return $this->customerCity;
    }

    /**
     * Set customerState
     *
     * @param string $customerState
     * @return Customer
     */
    public function setCustomerState($customerState)
    {
        $this->customerState = $customerState;

        return $this;
    }

    /**
     * Get customerState
     *
     * @return string 
     */
    public function getCustomerState()
    {
        return $this->customerState;
    }

    /**
     * Set customerZip
     *
     * @param string $customerZip
     * @return Customer
     */
    public function setCustomerZip($customerZip)
    {
        $this->customerZip = $customerZip;

        return $this;
    }

    /**
     * Get customerZip
     *
     * @return string 
     */
    public function getCustomerZip()
    {
        return $this->customerZip;
    }

    /**
     * Set customerCreatedOn
     *
     * @param \DateTime $customerCreatedOn
     * @return Customer
     */
    public function setCustomerCreatedOn($customerCreatedOn)
    {
        $this->customerCreatedOn = $customerCreatedOn;

        return $this;
    }

    /**
     * Get customerCreatedOn
     *
     * @return \DateTime 
     */
    public function getCustomerCreatedOn()
    {
        return $this->customerCreatedOn;
    }

    /**
     * Set customerModifiedOn
     *
     * @param \DateTime $customerModifiedOn
     * @return Customer
     */
    public function setCustomerModifiedOn($customerModifiedOn)
    {
        $this->customerModifiedOn = $customerModifiedOn;

        return $this;
    }

    /**
     * Get customerModifiedOn
     *
     * @return \DateTime 
     */
    public function getCustomerModifiedOn()
    {
        return $this->customerModifiedOn;
    }
}
