<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobAccounting
 *
 * @ORM\Table(name="ot_job_accounting")
 * @ORM\Entity
 */
class JobAccounting
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
     * @var integer
     *
     * @ORM\Column(name="job_accounting_first_check_amount", type="integer")
     */
    private $jobAccountingFirstCheckAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_accounting_depreciation_check_amount", type="integer")
     */
    private $jobAccountingDepreciationCheckAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_accounting_coupon_amount", type="integer")
     */
    private $jobAccountingCouponAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_accounting_advertising_credit_amount", type="integer")
     */
    private $jobAccountingAdvertisingCreditAmount;


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
     * Set jobAccountingFirstCheckAmount
     *
     * @param integer $jobAccountingFirstCheckAmount
     * @return JobAccounting
     */
    public function setJobAccountingFirstCheckAmount($jobAccountingFirstCheckAmount)
    {
        $this->jobAccountingFirstCheckAmount = $jobAccountingFirstCheckAmount;

        return $this;
    }

    /**
     * Get jobAccountingFirstCheckAmount
     *
     * @return integer 
     */
    public function getJobAccountingFirstCheckAmount()
    {
        return $this->jobAccountingFirstCheckAmount;
    }

    /**
     * Set jobAccountingDepreciationCheckAmount
     *
     * @param integer $jobAccountingDepreciationCheckAmount
     * @return JobAccounting
     */
    public function setJobAccountingDepreciationCheckAmount($jobAccountingDepreciationCheckAmount)
    {
        $this->jobAccountingDepreciationCheckAmount = $jobAccountingDepreciationCheckAmount;

        return $this;
    }

    /**
     * Get jobAccountingDepreciationCheckAmount
     *
     * @return integer 
     */
    public function getJobAccountingDepreciationCheckAmount()
    {
        return $this->jobAccountingDepreciationCheckAmount;
    }

    /**
     * Set jobAccountingCouponAmount
     *
     * @param integer $jobAccountingCouponAmount
     * @return JobAccounting
     */
    public function setJobAccountingCouponAmount($jobAccountingCouponAmount)
    {
        $this->jobAccountingCouponAmount = $jobAccountingCouponAmount;

        return $this;
    }

    /**
     * Get jobAccountingCouponAmount
     *
     * @return integer 
     */
    public function getJobAccountingCouponAmount()
    {
        return $this->jobAccountingCouponAmount;
    }

    /**
     * Set jobAccountingAdvertisingCreditAmount
     *
     * @param integer $jobAccountingAdvertisingCreditAmount
     * @return JobAccounting
     */
    public function setJobAccountingAdvertisingCreditAmount($jobAccountingAdvertisingCreditAmount)
    {
        $this->jobAccountingAdvertisingCreditAmount = $jobAccountingAdvertisingCreditAmount;

        return $this;
    }

    /**
     * Get jobAccountingAdvertisingCreditAmount
     *
     * @return integer 
     */
    public function getJobAccountingAdvertisingCreditAmount()
    {
        return $this->jobAccountingAdvertisingCreditAmount;
    }
}
