<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobDetails
 *
 * @ORM\Table(name="ot_job_details")
 * @ORM\Entity
 */
class JobDetails
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
     * @ORM\Column(name="job_details_type", type="string", length=255)
     */
    private $jobDetailsType;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_status", type="string", length=255)
     */
    private $jobDetailsStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_description_of_loss", type="string", length=255)
     */
    private $jobDetailsDescriptionOfLoss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_details_date_of_loss", type="date")
     */
    private $jobDetailsDateOfLoss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_details_start_date", type="date")
     */
    private $jobDetailsStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_details_estimated_end_date", type="date")
     */
    private $jobDetailsEstimatedEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_needs", type="string", length=255)
     */
    private $jobDetailsNeeds;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_peril", type="string", length=255)
     */
    private $jobDetailsPeril;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_source", type="string", length=255)
     */
    private $jobDetailsSource;

    /**
     * @var string
     *
     * @ORM\Column(name="job_details_special_comments", type="string", length=255)
     */
    private $jobDetailsSpecialComments;


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
     * Set jobDetailsType
     *
     * @param string $jobDetailsType
     * @return JobDetails
     */
    public function setJobDetailsType($jobDetailsType)
    {
        $this->jobDetailsType = $jobDetailsType;

        return $this;
    }

    /**
     * Get jobDetailsType
     *
     * @return string 
     */
    public function getJobDetailsType()
    {
        return $this->jobDetailsType;
    }

    /**
     * Set jobDetailsStatus
     *
     * @param string $jobDetailsStatus
     * @return JobDetails
     */
    public function setJobDetailsStatus($jobDetailsStatus)
    {
        $this->jobDetailsStatus = $jobDetailsStatus;

        return $this;
    }

    /**
     * Get jobDetailsStatus
     *
     * @return string 
     */
    public function getJobDetailsStatus()
    {
        return $this->jobDetailsStatus;
    }

    /**
     * Set jobDetailsDescriptionOfLoss
     *
     * @param string $jobDetailsDescriptionOfLoss
     * @return JobDetails
     */
    public function setJobDetailsDescriptionOfLoss($jobDetailsDescriptionOfLoss)
    {
        $this->jobDetailsDescriptionOfLoss = $jobDetailsDescriptionOfLoss;

        return $this;
    }

    /**
     * Get jobDetailsDescriptionOfLoss
     *
     * @return string 
     */
    public function getJobDetailsDescriptionOfLoss()
    {
        return $this->jobDetailsDescriptionOfLoss;
    }

    /**
     * Set jobDateOfLoss
     *
     * @param \DateTime $jobDateOfLoss
     * @return JobDetails
     */
    public function setJobDateOfLoss($jobDateOfLoss)
    {
        $this->jobDateOfLoss = $jobDateOfLoss;

        return $this;
    }

    /**
     * Get jobDateOfLoss
     *
     * @return \DateTime 
     */
    public function getJobDateOfLoss()
    {
        return $this->jobDateOfLoss;
    }

    /**
     * Set jobStartDate
     *
     * @param \DateTime $jobStartDate
     * @return JobDetails
     */
    public function setJobStartDate($jobStartDate)
    {
        $this->jobStartDate = $jobStartDate;

        return $this;
    }

    /**
     * Get jobStartDate
     *
     * @return \DateTime 
     */
    public function getJobStartDate()
    {
        return $this->jobStartDate;
    }

    /**
     * Set jobDetailsDateOfLoss
     *
     * @param \DateTime $jobDetailsDateOfLoss
     * @return JobDetails
     */
    public function setJobDetailsDateOfLoss($jobDetailsDateOfLoss)
    {
        $this->jobDetailsDateOfLoss = $jobDetailsDateOfLoss;

        return $this;
    }

    /**
     * Get jobDetailsDateOfLoss
     *
     * @return \DateTime 
     */
    public function getJobDetailsDateOfLoss()
    {
        return $this->jobDetailsDateOfLoss;
    }

    /**
     * Set jobDetailsStartDate
     *
     * @param \DateTime $jobDetailsStartDate
     * @return JobDetails
     */
    public function setJobDetailsStartDate($jobDetailsStartDate)
    {
        $this->jobDetailsStartDate = $jobDetailsStartDate;

        return $this;
    }

    /**
     * Get jobDetailsStartDate
     *
     * @return \DateTime 
     */
    public function getJobDetailsStartDate()
    {
        return $this->jobDetailsStartDate;
    }

    /**
     * Set jobDetailsEstimatedEndDate
     *
     * @param \DateTime $jobDetailsEstimatedEndDate
     * @return JobDetails
     */
    public function setJobDetailsEstimatedEndDate($jobDetailsEstimatedEndDate)
    {
        $this->jobDetailsEstimatedEndDate = $jobDetailsEstimatedEndDate;

        return $this;
    }

    /**
     * Get jobDetailsEstimatedEndDate
     *
     * @return \DateTime 
     */
    public function getJobDetailsEstimatedEndDate()
    {
        return $this->jobDetailsEstimatedEndDate;
    }

    /**
     * Set jobDetailsNeeds
     *
     * @param string $jobDetailsNeeds
     * @return JobDetails
     */
    public function setJobDetailsNeeds($jobDetailsNeeds)
    {
        $this->jobDetailsNeeds = $jobDetailsNeeds;

        return $this;
    }

    /**
     * Get jobDetailsNeeds
     *
     * @return string 
     */
    public function getJobDetailsNeeds()
    {
        return $this->jobDetailsNeeds;
    }

    /**
     * Set jobDetailsPeril
     *
     * @param string $jobDetailsPeril
     * @return JobDetails
     */
    public function setJobDetailsPeril($jobDetailsPeril)
    {
        $this->jobDetailsPeril = $jobDetailsPeril;

        return $this;
    }

    /**
     * Get jobDetailsPeril
     *
     * @return string 
     */
    public function getJobDetailsPeril()
    {
        return $this->jobDetailsPeril;
    }

    /**
     * Set jobDetailsSource
     *
     * @param string $jobDetailsSource
     * @return JobDetails
     */
    public function setJobDetailsSource($jobDetailsSource)
    {
        $this->jobDetailsSource = $jobDetailsSource;

        return $this;
    }

    /**
     * Get jobDetailsSource
     *
     * @return string 
     */
    public function getJobDetailsSource()
    {
        return $this->jobDetailsSource;
    }

    /**
     * Set jobDetailsSpecialComments
     *
     * @param string $jobDetailsSpecialComments
     * @return JobDetails
     */
    public function setJobDetailsSpecialComments($jobDetailsSpecialComments)
    {
        $this->jobDetailsSpecialComments = $jobDetailsSpecialComments;

        return $this;
    }

    /**
     * Get jobDetailsSpecialComments
     *
     * @return string 
     */
    public function getJobDetailsSpecialComments()
    {
        return $this->jobDetailsSpecialComments;
    }
}
