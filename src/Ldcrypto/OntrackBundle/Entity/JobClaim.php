<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobClaim
 *
 * @ORM\Table(name="ot_job_claim")
 * @ORM\Entity
 */
class JobClaim
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
     * @ORM\Column(name="job_claim_insurance_claim_number", type="string", length=255)
     */
    private $jobClaimInsuranceClaimNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_claim_insurance_adjuster_appointment_date", type="date")
     */
    private $jobClaimInsuranceAdjusterAppointmentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="job_claim_insurance_carrier_name", type="string", length=255)
     */
    private $jobClaimInsuranceCarrierName;

    /**
     * @var integer
     *
     * @ORM\Column(name="job_claim_insurance_deductible_amount", type="integer")
     */
    private $jobClaimInsuranceDeductibleAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="job_claim_mortage_company_name", type="string", length=255)
     */
    private $jobClaimMortageCompanyName;


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
     * Set jobClaimInsuranceClaimNumber
     *
     * @param string $jobClaimInsuranceClaimNumber
     * @return JobClaim
     */
    public function setJobClaimInsuranceClaimNumber($jobClaimInsuranceClaimNumber)
    {
        $this->jobClaimInsuranceClaimNumber = $jobClaimInsuranceClaimNumber;

        return $this;
    }

    /**
     * Get jobClaimInsuranceClaimNumber
     *
     * @return string 
     */
    public function getJobClaimInsuranceClaimNumber()
    {
        return $this->jobClaimInsuranceClaimNumber;
    }

    /**
     * Set jobClaimInsuranceAdjusterAppointmentDate
     *
     * @param \DateTime $jobClaimInsuranceAdjusterAppointmentDate
     * @return JobClaim
     */
    public function setJobClaimInsuranceAdjusterAppointmentDate($jobClaimInsuranceAdjusterAppointmentDate)
    {
        $this->jobClaimInsuranceAdjusterAppointmentDate = $jobClaimInsuranceAdjusterAppointmentDate;

        return $this;
    }

    /**
     * Get jobClaimInsuranceAdjusterAppointmentDate
     *
     * @return \DateTime 
     */
    public function getJobClaimInsuranceAdjusterAppointmentDate()
    {
        return $this->jobClaimInsuranceAdjusterAppointmentDate;
    }

    /**
     * Set jobClaimInsuranceCarrierName
     *
     * @param string $jobClaimInsuranceCarrierName
     * @return JobClaim
     */
    public function setJobClaimInsuranceCarrierName($jobClaimInsuranceCarrierName)
    {
        $this->jobClaimInsuranceCarrierName = $jobClaimInsuranceCarrierName;

        return $this;
    }

    /**
     * Get jobClaimInsuranceCarrierName
     *
     * @return string 
     */
    public function getJobClaimInsuranceCarrierName()
    {
        return $this->jobClaimInsuranceCarrierName;
    }

    /**
     * Set jobClaimInsuranceDeductibleAmount
     *
     * @param integer $jobClaimInsuranceDeductibleAmount
     * @return JobClaim
     */
    public function setJobClaimInsuranceDeductibleAmount($jobClaimInsuranceDeductibleAmount)
    {
        $this->jobClaimInsuranceDeductibleAmount = $jobClaimInsuranceDeductibleAmount;

        return $this;
    }

    /**
     * Get jobClaimInsuranceDeductibleAmount
     *
     * @return integer 
     */
    public function getJobClaimInsuranceDeductibleAmount()
    {
        return $this->jobClaimInsuranceDeductibleAmount;
    }

    /**
     * Set jobClaimMortageCompanyName
     *
     * @param string $jobClaimMortageCompanyName
     * @return JobClaim
     */
    public function setJobClaimMortageCompanyName($jobClaimMortageCompanyName)
    {
        $this->jobClaimMortageCompanyName = $jobClaimMortageCompanyName;

        return $this;
    }

    /**
     * Get jobClaimMortageCompanyName
     *
     * @return string 
     */
    public function getJobClaimMortageCompanyName()
    {
        return $this->jobClaimMortageCompanyName;
    }
}
