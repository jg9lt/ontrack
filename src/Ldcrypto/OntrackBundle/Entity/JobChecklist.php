<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobChecklist
 *
 * @ORM\Table(name="ot_job_checklist")
 * @ORM\Entity
 */
class JobChecklist
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
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_signed_contract", type="boolean")
     */
    private $jobChecklistHasSignedContract;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_color_selection_sheet", type="boolean")
     */
    private $jobChecklistHasColorSelectionSheet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_precautionary_letter", type="boolean")
     */
    private $jobChecklistHasPrecautionaryLetter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_roof_siding_specs", type="boolean")
     */
    private $jobChecklistHasRoofSidingSpecs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_pre_job_photos", type="boolean")
     */
    private $jobChecklistHasPreJobPhotos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_p_and_l", type="boolean")
     */
    private $jobChecklistHasPAndL;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_permit", type="boolean")
     */
    private $jobChecklistHasPermit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_connect_point", type="boolean")
     */
    private $jobChecklistHasConnectPoint;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_work_order", type="boolean")
     */
    private $jobChecklistHasWorkOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_company_estimate", type="boolean")
     */
    private $jobChecklistHasCompanyEstimate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_company_warranty", type="boolean")
     */
    private $jobChecklistHasCompanyWarranty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_manufacturer_warranty", type="boolean")
     */
    private $jobChecklistHasManufacturerWarranty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_first_check_acv", type="boolean")
     */
    private $jobChecklistHasFirstCheckAcv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_depreciation_check", type="boolean")
     */
    private $jobChecklistHasDepreciationCheck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_coupon", type="boolean")
     */
    private $jobChecklistHasCoupon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_rai_invoice", type="boolean")
     */
    private $jobChecklistHasRaiInvoice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_final_invoice", type="boolean")
     */
    private $jobChecklistHasFinalInvoice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_receipt", type="boolean")
     */
    private $jobChecklistHasReceipt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_checklist_has_insurance_estimate", type="boolean")
     */
    private $jobChecklistHasInsuranceEstimate;


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
     * Set jobChecklistHasSignedContract
     *
     * @param boolean $jobChecklistHasSignedContract
     * @return JobChecklist
     */
    public function setJobChecklistHasSignedContract($jobChecklistHasSignedContract)
    {
        $this->jobChecklistHasSignedContract = $jobChecklistHasSignedContract;

        return $this;
    }

    /**
     * Get jobChecklistHasSignedContract
     *
     * @return boolean 
     */
    public function getJobChecklistHasSignedContract()
    {
        return $this->jobChecklistHasSignedContract;
    }

    /**
     * Set jobChecklistHasColorSelectionSheet
     *
     * @param boolean $jobChecklistHasColorSelectionSheet
     * @return JobChecklist
     */
    public function setJobChecklistHasColorSelectionSheet($jobChecklistHasColorSelectionSheet)
    {
        $this->jobChecklistHasColorSelectionSheet = $jobChecklistHasColorSelectionSheet;

        return $this;
    }

    /**
     * Get jobChecklistHasColorSelectionSheet
     *
     * @return boolean 
     */
    public function getJobChecklistHasColorSelectionSheet()
    {
        return $this->jobChecklistHasColorSelectionSheet;
    }

    /**
     * Set jobChecklistHasPrecautionaryLetter
     *
     * @param boolean $jobChecklistHasPrecautionaryLetter
     * @return JobChecklist
     */
    public function setJobChecklistHasPrecautionaryLetter($jobChecklistHasPrecautionaryLetter)
    {
        $this->jobChecklistHasPrecautionaryLetter = $jobChecklistHasPrecautionaryLetter;

        return $this;
    }

    /**
     * Get jobChecklistHasPrecautionaryLetter
     *
     * @return boolean 
     */
    public function getJobChecklistHasPrecautionaryLetter()
    {
        return $this->jobChecklistHasPrecautionaryLetter;
    }

    /**
     * Set jobChecklistHasRoofSidingSpecs
     *
     * @param boolean $jobChecklistHasRoofSidingSpecs
     * @return JobChecklist
     */
    public function setJobChecklistHasRoofSidingSpecs($jobChecklistHasRoofSidingSpecs)
    {
        $this->jobChecklistHasRoofSidingSpecs = $jobChecklistHasRoofSidingSpecs;

        return $this;
    }

    /**
     * Get jobChecklistHasRoofSidingSpecs
     *
     * @return boolean 
     */
    public function getJobChecklistHasRoofSidingSpecs()
    {
        return $this->jobChecklistHasRoofSidingSpecs;
    }

    /**
     * Set jobChecklistHasPreJobPhotos
     *
     * @param boolean $jobChecklistHasPreJobPhotos
     * @return JobChecklist
     */
    public function setJobChecklistHasPreJobPhotos($jobChecklistHasPreJobPhotos)
    {
        $this->jobChecklistHasPreJobPhotos = $jobChecklistHasPreJobPhotos;

        return $this;
    }

    /**
     * Get jobChecklistHasPreJobPhotos
     *
     * @return boolean 
     */
    public function getJobChecklistHasPreJobPhotos()
    {
        return $this->jobChecklistHasPreJobPhotos;
    }

    /**
     * Set jobChecklistHasPAndL
     *
     * @param boolean $jobChecklistHasPAndL
     * @return JobChecklist
     */
    public function setJobChecklistHasPAndL($jobChecklistHasPAndL)
    {
        $this->jobChecklistHasPAndL = $jobChecklistHasPAndL;

        return $this;
    }

    /**
     * Get jobChecklistHasPAndL
     *
     * @return boolean 
     */
    public function getJobChecklistHasPAndL()
    {
        return $this->jobChecklistHasPAndL;
    }

    /**
     * Set jobChecklistHasPermit
     *
     * @param boolean $jobChecklistHasPermit
     * @return JobChecklist
     */
    public function setJobChecklistHasPermit($jobChecklistHasPermit)
    {
        $this->jobChecklistHasPermit = $jobChecklistHasPermit;

        return $this;
    }

    /**
     * Get jobChecklistHasPermit
     *
     * @return boolean 
     */
    public function getJobChecklistHasPermit()
    {
        return $this->jobChecklistHasPermit;
    }

    /**
     * Set jobChecklistHasConnectPoint
     *
     * @param boolean $jobChecklistHasConnectPoint
     * @return JobChecklist
     */
    public function setJobChecklistHasConnectPoint($jobChecklistHasConnectPoint)
    {
        $this->jobChecklistHasConnectPoint = $jobChecklistHasConnectPoint;

        return $this;
    }

    /**
     * Get jobChecklistHasConnectPoint
     *
     * @return boolean 
     */
    public function getJobChecklistHasConnectPoint()
    {
        return $this->jobChecklistHasConnectPoint;
    }

    /**
     * Set jobChecklistHasWorkOrder
     *
     * @param boolean $jobChecklistHasWorkOrder
     * @return JobChecklist
     */
    public function setJobChecklistHasWorkOrder($jobChecklistHasWorkOrder)
    {
        $this->jobChecklistHasWorkOrder = $jobChecklistHasWorkOrder;

        return $this;
    }

    /**
     * Get jobChecklistHasWorkOrder
     *
     * @return boolean 
     */
    public function getJobChecklistHasWorkOrder()
    {
        return $this->jobChecklistHasWorkOrder;
    }

    /**
     * Set jobChecklistHasCompanyEstimate
     *
     * @param boolean $jobChecklistHasCompanyEstimate
     * @return JobChecklist
     */
    public function setJobChecklistHasCompanyEstimate($jobChecklistHasCompanyEstimate)
    {
        $this->jobChecklistHasCompanyEstimate = $jobChecklistHasCompanyEstimate;

        return $this;
    }

    /**
     * Get jobChecklistHasCompanyEstimate
     *
     * @return boolean 
     */
    public function getJobChecklistHasCompanyEstimate()
    {
        return $this->jobChecklistHasCompanyEstimate;
    }

    /**
     * Set jobChecklistHasCompanyWarranty
     *
     * @param boolean $jobChecklistHasCompanyWarranty
     * @return JobChecklist
     */
    public function setJobChecklistHasCompanyWarranty($jobChecklistHasCompanyWarranty)
    {
        $this->jobChecklistHasCompanyWarranty = $jobChecklistHasCompanyWarranty;

        return $this;
    }

    /**
     * Get jobChecklistHasCompanyWarranty
     *
     * @return boolean 
     */
    public function getJobChecklistHasCompanyWarranty()
    {
        return $this->jobChecklistHasCompanyWarranty;
    }

    /**
     * Set jobChecklistHasManufacturerWarranty
     *
     * @param boolean $jobChecklistHasManufacturerWarranty
     * @return JobChecklist
     */
    public function setJobChecklistHasManufacturerWarranty($jobChecklistHasManufacturerWarranty)
    {
        $this->jobChecklistHasManufacturerWarranty = $jobChecklistHasManufacturerWarranty;

        return $this;
    }

    /**
     * Get jobChecklistHasManufacturerWarranty
     *
     * @return boolean 
     */
    public function getJobChecklistHasManufacturerWarranty()
    {
        return $this->jobChecklistHasManufacturerWarranty;
    }

    /**
     * Set jobChecklistHasFirstCheckAcv
     *
     * @param boolean $jobChecklistHasFirstCheckAcv
     * @return JobChecklist
     */
    public function setJobChecklistHasFirstCheckAcv($jobChecklistHasFirstCheckAcv)
    {
        $this->jobChecklistHasFirstCheckAcv = $jobChecklistHasFirstCheckAcv;

        return $this;
    }

    /**
     * Get jobChecklistHasFirstCheckAcv
     *
     * @return boolean 
     */
    public function getJobChecklistHasFirstCheckAcv()
    {
        return $this->jobChecklistHasFirstCheckAcv;
    }

    /**
     * Set jobChecklistHasDepreciationCheck
     *
     * @param boolean $jobChecklistHasDepreciationCheck
     * @return JobChecklist
     */
    public function setJobChecklistHasDepreciationCheck($jobChecklistHasDepreciationCheck)
    {
        $this->jobChecklistHasDepreciationCheck = $jobChecklistHasDepreciationCheck;

        return $this;
    }

    /**
     * Get jobChecklistHasDepreciationCheck
     *
     * @return boolean 
     */
    public function getJobChecklistHasDepreciationCheck()
    {
        return $this->jobChecklistHasDepreciationCheck;
    }

    /**
     * Set jobChecklistHasCoupon
     *
     * @param boolean $jobChecklistHasCoupon
     * @return JobChecklist
     */
    public function setJobChecklistHasCoupon($jobChecklistHasCoupon)
    {
        $this->jobChecklistHasCoupon = $jobChecklistHasCoupon;

        return $this;
    }

    /**
     * Get jobChecklistHasCoupon
     *
     * @return boolean 
     */
    public function getJobChecklistHasCoupon()
    {
        return $this->jobChecklistHasCoupon;
    }

    /**
     * Set jobChecklistHasRaiInvoice
     *
     * @param boolean $jobChecklistHasRaiInvoice
     * @return JobChecklist
     */
    public function setJobChecklistHasRaiInvoice($jobChecklistHasRaiInvoice)
    {
        $this->jobChecklistHasRaiInvoice = $jobChecklistHasRaiInvoice;

        return $this;
    }

    /**
     * Get jobChecklistHasRaiInvoice
     *
     * @return boolean 
     */
    public function getJobChecklistHasRaiInvoice()
    {
        return $this->jobChecklistHasRaiInvoice;
    }

    /**
     * Set jobChecklistHasFinalInvoice
     *
     * @param boolean $jobChecklistHasFinalInvoice
     * @return JobChecklist
     */
    public function setJobChecklistHasFinalInvoice($jobChecklistHasFinalInvoice)
    {
        $this->jobChecklistHasFinalInvoice = $jobChecklistHasFinalInvoice;

        return $this;
    }

    /**
     * Get jobChecklistHasFinalInvoice
     *
     * @return boolean 
     */
    public function getJobChecklistHasFinalInvoice()
    {
        return $this->jobChecklistHasFinalInvoice;
    }

    /**
     * Set jobChecklistHasReceipt
     *
     * @param boolean $jobChecklistHasReceipt
     * @return JobChecklist
     */
    public function setJobChecklistHasReceipt($jobChecklistHasReceipt)
    {
        $this->jobChecklistHasReceipt = $jobChecklistHasReceipt;

        return $this;
    }

    /**
     * Get jobChecklistHasReceipt
     *
     * @return boolean 
     */
    public function getJobChecklistHasReceipt()
    {
        return $this->jobChecklistHasReceipt;
    }

    /**
     * Set jobChecklistHasInsuranceEstimate
     *
     * @param boolean $jobChecklistHasInsuranceEstimate
     * @return JobChecklist
     */
    public function setJobChecklistHasInsuranceEstimate($jobChecklistHasInsuranceEstimate)
    {
        $this->jobChecklistHasInsuranceEstimate = $jobChecklistHasInsuranceEstimate;

        return $this;
    }

    /**
     * Get jobChecklistHasInsuranceEstimate
     *
     * @return boolean 
     */
    public function getJobChecklistHasInsuranceEstimate()
    {
        return $this->jobChecklistHasInsuranceEstimate;
    }
}
