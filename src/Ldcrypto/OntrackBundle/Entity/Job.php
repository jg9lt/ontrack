<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="ot_job")
 * @ORM\Entity
 */
class Job
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
     * @ORM\Column(name="job_id", type="string", length=255)
     */
    private $jobId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_created_on", type="datetime")
     */
    private $jobCreatedOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_modified_on", type="datetime")
     */
    private $jobModifiedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="job_sales_rep_id", type="string", length=255)
     */
    private $jobSalesRepId;

    /**
     * @var string
     *
     * @ORM\Column(name="job_customer_id", type="string", length=255)
     */
    private $jobCustomerId;


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
     * Set jobId
     *
     * @param string $jobId
     * @return Job
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return string 
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set jobCreatedOn
     *
     * @param \DateTime $jobCreatedOn
     * @return Job
     */
    public function setJobCreatedOn($jobCreatedOn)
    {
        $this->jobCreatedOn = $jobCreatedOn;

        return $this;
    }

    /**
     * Get jobCreatedOn
     *
     * @return \DateTime 
     */
    public function getJobCreatedOn()
    {
        return $this->jobCreatedOn;
    }

    /**
     * Set jobModifiedOn
     *
     * @param \DateTime $jobModifiedOn
     * @return Job
     */
    public function setJobModifiedOn($jobModifiedOn)
    {
        $this->jobModifiedOn = $jobModifiedOn;

        return $this;
    }

    /**
     * Get jobModifiedOn
     *
     * @return \DateTime 
     */
    public function getJobModifiedOn()
    {
        return $this->jobModifiedOn;
    }

    /**
     * Set jobSalesRepId
     *
     * @param string $jobSalesRepId
     * @return Job
     */
    public function setJobSalesRepId($jobSalesRepId)
    {
        $this->jobSalesRepId = $jobSalesRepId;

        return $this;
    }

    /**
     * Get jobSalesRepId
     *
     * @return string 
     */
    public function getJobSalesRepId()
    {
        return $this->jobSalesRepId;
    }

    /**
     * Set jobCustomerId
     *
     * @param string $jobCustomerId
     * @return Job
     */
    public function setJobCustomerId($jobCustomerId)
    {
        $this->jobCustomerId = $jobCustomerId;

        return $this;
    }

    /**
     * Get jobCustomerId
     *
     * @return string 
     */
    public function getJobCustomerId()
    {
        return $this->jobCustomerId;
    }
}
