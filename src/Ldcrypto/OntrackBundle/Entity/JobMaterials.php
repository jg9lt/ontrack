<?php

namespace Ldcrypto\OntrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobMaterials
 *
 * @ORM\Table(name="ot_job_materials")
 * @ORM\Entity
 */
class JobMaterials
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
     * @ORM\Column(name="job_materials_roof_manufacturer", type="string", length=255)
     */
    private $jobMaterialsRoofManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_roof_color", type="string", length=255)
     */
    private $jobMaterialsRoofColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_roof_style", type="string", length=255)
     */
    private $jobMaterialsRoofStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_siding_manufacturer", type="string", length=255)
     */
    private $jobMaterialsSidingManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_siding_color", type="string", length=255)
     */
    private $jobMaterialsSidingColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_siding_style", type="string", length=255)
     */
    private $jobMaterialsSidingStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_drip_edge_manufacturer", type="string", length=255)
     */
    private $jobMaterialsDripEdgeManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_drip_edge_color", type="string", length=255)
     */
    private $jobMaterialsDripEdgeColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_drip_edge_style", type="string", length=255)
     */
    private $jobMaterialsDripEdgeStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_fascia_manufacturer", type="string", length=255)
     */
    private $jobMaterialsFasciaManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_fascia_color", type="string", length=255)
     */
    private $jobMaterialsFasciaColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_fascia_style", type="string", length=255)
     */
    private $jobMaterialsFasciaStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_gutter_manufacturer", type="string", length=255)
     */
    private $jobMaterialsGutterManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_gutter_color", type="string", length=255)
     */
    private $jobMaterialsGutterColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_gutter_style", type="string", length=255)
     */
    private $jobMaterialsGutterStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_outer_corner_manufacturer", type="string", length=255)
     */
    private $jobMaterialsOuterCornerManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_outer_corner_color", type="string", length=255)
     */
    private $jobMaterialsOuterCornerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_outer_corner_style", type="string", length=255)
     */
    private $jobMaterialsOuterCornerStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_inner_corner_manufacturer", type="string", length=255)
     */
    private $jobMaterialsInnerCornerManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_inner_corner_color", type="string", length=255)
     */
    private $jobMaterialsInnerCornerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_inner_corner_style", type="string", length=255)
     */
    private $jobMaterialsInnerCornerStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_window_wrap_manufacturer", type="string", length=255)
     */
    private $jobMaterialsWindowWrapManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_window_wrap_color", type="string", length=255)
     */
    private $jobMaterialsWindowWrapColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_window_wrap_style", type="string", length=255)
     */
    private $jobMaterialsWindowWrapStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_door_wrap_manufacturer", type="string", length=255)
     */
    private $jobMaterialsDoorWrapManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_door_wrap_color", type="string", length=255)
     */
    private $jobMaterialsDoorWrapColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_door_wrap_style", type="string", length=255)
     */
    private $jobMaterialsDoorWrapStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_vents_manufacturer", type="string", length=255)
     */
    private $jobMaterialsVentsManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_vents_color", type="string", length=255)
     */
    private $jobMaterialsVentsColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_vents_style", type="string", length=255)
     */
    private $jobMaterialsVentsStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_valleys_manufacturer", type="string", length=255)
     */
    private $jobMaterialsValleysManufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_valleys_color", type="string", length=255)
     */
    private $jobMaterialsValleysColor;

    /**
     * @var string
     *
     * @ORM\Column(name="job_materials_valleys_style", type="string", length=255)
     */
    private $jobMaterialsValleysStyle;


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
     * Set jobMaterialsRoofManufacturer
     *
     * @param string $jobMaterialsRoofManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsRoofManufacturer($jobMaterialsRoofManufacturer)
    {
        $this->jobMaterialsRoofManufacturer = $jobMaterialsRoofManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsRoofManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsRoofManufacturer()
    {
        return $this->jobMaterialsRoofManufacturer;
    }

    /**
     * Set jobMaterialsRoofColor
     *
     * @param string $jobMaterialsRoofColor
     * @return JobMaterials
     */
    public function setJobMaterialsRoofColor($jobMaterialsRoofColor)
    {
        $this->jobMaterialsRoofColor = $jobMaterialsRoofColor;

        return $this;
    }

    /**
     * Get jobMaterialsRoofColor
     *
     * @return string 
     */
    public function getJobMaterialsRoofColor()
    {
        return $this->jobMaterialsRoofColor;
    }

    /**
     * Set jobMaterialsRoofStyle
     *
     * @param string $jobMaterialsRoofStyle
     * @return JobMaterials
     */
    public function setJobMaterialsRoofStyle($jobMaterialsRoofStyle)
    {
        $this->jobMaterialsRoofStyle = $jobMaterialsRoofStyle;

        return $this;
    }

    /**
     * Get jobMaterialsRoofStyle
     *
     * @return string 
     */
    public function getJobMaterialsRoofStyle()
    {
        return $this->jobMaterialsRoofStyle;
    }

    /**
     * Set jobMaterialsSidingManufacturer
     *
     * @param string $jobMaterialsSidingManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsSidingManufacturer($jobMaterialsSidingManufacturer)
    {
        $this->jobMaterialsSidingManufacturer = $jobMaterialsSidingManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsSidingManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsSidingManufacturer()
    {
        return $this->jobMaterialsSidingManufacturer;
    }

    /**
     * Set jobMaterialsSidingColor
     *
     * @param string $jobMaterialsSidingColor
     * @return JobMaterials
     */
    public function setJobMaterialsSidingColor($jobMaterialsSidingColor)
    {
        $this->jobMaterialsSidingColor = $jobMaterialsSidingColor;

        return $this;
    }

    /**
     * Get jobMaterialsSidingColor
     *
     * @return string 
     */
    public function getJobMaterialsSidingColor()
    {
        return $this->jobMaterialsSidingColor;
    }

    /**
     * Set jobMaterialsSidingStyle
     *
     * @param string $jobMaterialsSidingStyle
     * @return JobMaterials
     */
    public function setJobMaterialsSidingStyle($jobMaterialsSidingStyle)
    {
        $this->jobMaterialsSidingStyle = $jobMaterialsSidingStyle;

        return $this;
    }

    /**
     * Get jobMaterialsSidingStyle
     *
     * @return string 
     */
    public function getJobMaterialsSidingStyle()
    {
        return $this->jobMaterialsSidingStyle;
    }

    /**
     * Set jobMaterialsDripEdgeManufacturer
     *
     * @param string $jobMaterialsDripEdgeManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsDripEdgeManufacturer($jobMaterialsDripEdgeManufacturer)
    {
        $this->jobMaterialsDripEdgeManufacturer = $jobMaterialsDripEdgeManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsDripEdgeManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsDripEdgeManufacturer()
    {
        return $this->jobMaterialsDripEdgeManufacturer;
    }

    /**
     * Set jobMaterialsDripEdgeColor
     *
     * @param string $jobMaterialsDripEdgeColor
     * @return JobMaterials
     */
    public function setJobMaterialsDripEdgeColor($jobMaterialsDripEdgeColor)
    {
        $this->jobMaterialsDripEdgeColor = $jobMaterialsDripEdgeColor;

        return $this;
    }

    /**
     * Get jobMaterialsDripEdgeColor
     *
     * @return string 
     */
    public function getJobMaterialsDripEdgeColor()
    {
        return $this->jobMaterialsDripEdgeColor;
    }

    /**
     * Set jobMaterialsDripEdgeStyle
     *
     * @param string $jobMaterialsDripEdgeStyle
     * @return JobMaterials
     */
    public function setJobMaterialsDripEdgeStyle($jobMaterialsDripEdgeStyle)
    {
        $this->jobMaterialsDripEdgeStyle = $jobMaterialsDripEdgeStyle;

        return $this;
    }

    /**
     * Get jobMaterialsDripEdgeStyle
     *
     * @return string 
     */
    public function getJobMaterialsDripEdgeStyle()
    {
        return $this->jobMaterialsDripEdgeStyle;
    }

    /**
     * Set jobMaterialsFasciaManufacturer
     *
     * @param string $jobMaterialsFasciaManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsFasciaManufacturer($jobMaterialsFasciaManufacturer)
    {
        $this->jobMaterialsFasciaManufacturer = $jobMaterialsFasciaManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsFasciaManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsFasciaManufacturer()
    {
        return $this->jobMaterialsFasciaManufacturer;
    }

    /**
     * Set jobMaterialsFasciaColor
     *
     * @param string $jobMaterialsFasciaColor
     * @return JobMaterials
     */
    public function setJobMaterialsFasciaColor($jobMaterialsFasciaColor)
    {
        $this->jobMaterialsFasciaColor = $jobMaterialsFasciaColor;

        return $this;
    }

    /**
     * Get jobMaterialsFasciaColor
     *
     * @return string 
     */
    public function getJobMaterialsFasciaColor()
    {
        return $this->jobMaterialsFasciaColor;
    }

    /**
     * Set jobMaterialsFasciaStyle
     *
     * @param string $jobMaterialsFasciaStyle
     * @return JobMaterials
     */
    public function setJobMaterialsFasciaStyle($jobMaterialsFasciaStyle)
    {
        $this->jobMaterialsFasciaStyle = $jobMaterialsFasciaStyle;

        return $this;
    }

    /**
     * Get jobMaterialsFasciaStyle
     *
     * @return string 
     */
    public function getJobMaterialsFasciaStyle()
    {
        return $this->jobMaterialsFasciaStyle;
    }

    /**
     * Set jobMaterialsGutterManufacturer
     *
     * @param string $jobMaterialsGutterManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsGutterManufacturer($jobMaterialsGutterManufacturer)
    {
        $this->jobMaterialsGutterManufacturer = $jobMaterialsGutterManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsGutterManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsGutterManufacturer()
    {
        return $this->jobMaterialsGutterManufacturer;
    }

    /**
     * Set jobMaterialsGutterColor
     *
     * @param string $jobMaterialsGutterColor
     * @return JobMaterials
     */
    public function setJobMaterialsGutterColor($jobMaterialsGutterColor)
    {
        $this->jobMaterialsGutterColor = $jobMaterialsGutterColor;

        return $this;
    }

    /**
     * Get jobMaterialsGutterColor
     *
     * @return string 
     */
    public function getJobMaterialsGutterColor()
    {
        return $this->jobMaterialsGutterColor;
    }

    /**
     * Set jobMaterialsGutterStyle
     *
     * @param string $jobMaterialsGutterStyle
     * @return JobMaterials
     */
    public function setJobMaterialsGutterStyle($jobMaterialsGutterStyle)
    {
        $this->jobMaterialsGutterStyle = $jobMaterialsGutterStyle;

        return $this;
    }

    /**
     * Get jobMaterialsGutterStyle
     *
     * @return string 
     */
    public function getJobMaterialsGutterStyle()
    {
        return $this->jobMaterialsGutterStyle;
    }

    /**
     * Set jobMaterialsOuterCornerManufacturer
     *
     * @param string $jobMaterialsOuterCornerManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsOuterCornerManufacturer($jobMaterialsOuterCornerManufacturer)
    {
        $this->jobMaterialsOuterCornerManufacturer = $jobMaterialsOuterCornerManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsOuterCornerManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsOuterCornerManufacturer()
    {
        return $this->jobMaterialsOuterCornerManufacturer;
    }

    /**
     * Set jobMaterialsOuterCornerColor
     *
     * @param string $jobMaterialsOuterCornerColor
     * @return JobMaterials
     */
    public function setJobMaterialsOuterCornerColor($jobMaterialsOuterCornerColor)
    {
        $this->jobMaterialsOuterCornerColor = $jobMaterialsOuterCornerColor;

        return $this;
    }

    /**
     * Get jobMaterialsOuterCornerColor
     *
     * @return string 
     */
    public function getJobMaterialsOuterCornerColor()
    {
        return $this->jobMaterialsOuterCornerColor;
    }

    /**
     * Set jobMaterialsOuterCornerStyle
     *
     * @param string $jobMaterialsOuterCornerStyle
     * @return JobMaterials
     */
    public function setJobMaterialsOuterCornerStyle($jobMaterialsOuterCornerStyle)
    {
        $this->jobMaterialsOuterCornerStyle = $jobMaterialsOuterCornerStyle;

        return $this;
    }

    /**
     * Get jobMaterialsOuterCornerStyle
     *
     * @return string 
     */
    public function getJobMaterialsOuterCornerStyle()
    {
        return $this->jobMaterialsOuterCornerStyle;
    }

    /**
     * Set jobMaterialsInnerCornerManufacturer
     *
     * @param string $jobMaterialsInnerCornerManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsInnerCornerManufacturer($jobMaterialsInnerCornerManufacturer)
    {
        $this->jobMaterialsInnerCornerManufacturer = $jobMaterialsInnerCornerManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsInnerCornerManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsInnerCornerManufacturer()
    {
        return $this->jobMaterialsInnerCornerManufacturer;
    }

    /**
     * Set jobMaterialsInnerCornerColor
     *
     * @param string $jobMaterialsInnerCornerColor
     * @return JobMaterials
     */
    public function setJobMaterialsInnerCornerColor($jobMaterialsInnerCornerColor)
    {
        $this->jobMaterialsInnerCornerColor = $jobMaterialsInnerCornerColor;

        return $this;
    }

    /**
     * Get jobMaterialsInnerCornerColor
     *
     * @return string 
     */
    public function getJobMaterialsInnerCornerColor()
    {
        return $this->jobMaterialsInnerCornerColor;
    }

    /**
     * Set jobMaterialsInnerCornerStyle
     *
     * @param string $jobMaterialsInnerCornerStyle
     * @return JobMaterials
     */
    public function setJobMaterialsInnerCornerStyle($jobMaterialsInnerCornerStyle)
    {
        $this->jobMaterialsInnerCornerStyle = $jobMaterialsInnerCornerStyle;

        return $this;
    }

    /**
     * Get jobMaterialsInnerCornerStyle
     *
     * @return string 
     */
    public function getJobMaterialsInnerCornerStyle()
    {
        return $this->jobMaterialsInnerCornerStyle;
    }

    /**
     * Set jobMaterialsWindowWrapManufacturer
     *
     * @param string $jobMaterialsWindowWrapManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsWindowWrapManufacturer($jobMaterialsWindowWrapManufacturer)
    {
        $this->jobMaterialsWindowWrapManufacturer = $jobMaterialsWindowWrapManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsWindowWrapManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsWindowWrapManufacturer()
    {
        return $this->jobMaterialsWindowWrapManufacturer;
    }

    /**
     * Set jobMaterialsWindowWrapColor
     *
     * @param string $jobMaterialsWindowWrapColor
     * @return JobMaterials
     */
    public function setJobMaterialsWindowWrapColor($jobMaterialsWindowWrapColor)
    {
        $this->jobMaterialsWindowWrapColor = $jobMaterialsWindowWrapColor;

        return $this;
    }

    /**
     * Get jobMaterialsWindowWrapColor
     *
     * @return string 
     */
    public function getJobMaterialsWindowWrapColor()
    {
        return $this->jobMaterialsWindowWrapColor;
    }

    /**
     * Set jobMaterialsWindowWrapStyle
     *
     * @param string $jobMaterialsWindowWrapStyle
     * @return JobMaterials
     */
    public function setJobMaterialsWindowWrapStyle($jobMaterialsWindowWrapStyle)
    {
        $this->jobMaterialsWindowWrapStyle = $jobMaterialsWindowWrapStyle;

        return $this;
    }

    /**
     * Get jobMaterialsWindowWrapStyle
     *
     * @return string 
     */
    public function getJobMaterialsWindowWrapStyle()
    {
        return $this->jobMaterialsWindowWrapStyle;
    }

    /**
     * Set jobMaterialsDoorWrapManufacturer
     *
     * @param string $jobMaterialsDoorWrapManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsDoorWrapManufacturer($jobMaterialsDoorWrapManufacturer)
    {
        $this->jobMaterialsDoorWrapManufacturer = $jobMaterialsDoorWrapManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsDoorWrapManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsDoorWrapManufacturer()
    {
        return $this->jobMaterialsDoorWrapManufacturer;
    }

    /**
     * Set jobMaterialsDoorWrapColor
     *
     * @param string $jobMaterialsDoorWrapColor
     * @return JobMaterials
     */
    public function setJobMaterialsDoorWrapColor($jobMaterialsDoorWrapColor)
    {
        $this->jobMaterialsDoorWrapColor = $jobMaterialsDoorWrapColor;

        return $this;
    }

    /**
     * Get jobMaterialsDoorWrapColor
     *
     * @return string 
     */
    public function getJobMaterialsDoorWrapColor()
    {
        return $this->jobMaterialsDoorWrapColor;
    }

    /**
     * Set jobMaterialsDoorWrapStyle
     *
     * @param string $jobMaterialsDoorWrapStyle
     * @return JobMaterials
     */
    public function setJobMaterialsDoorWrapStyle($jobMaterialsDoorWrapStyle)
    {
        $this->jobMaterialsDoorWrapStyle = $jobMaterialsDoorWrapStyle;

        return $this;
    }

    /**
     * Get jobMaterialsDoorWrapStyle
     *
     * @return string 
     */
    public function getJobMaterialsDoorWrapStyle()
    {
        return $this->jobMaterialsDoorWrapStyle;
    }

    /**
     * Set jobMaterialsVentsManufacturer
     *
     * @param string $jobMaterialsVentsManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsVentsManufacturer($jobMaterialsVentsManufacturer)
    {
        $this->jobMaterialsVentsManufacturer = $jobMaterialsVentsManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsVentsManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsVentsManufacturer()
    {
        return $this->jobMaterialsVentsManufacturer;
    }

    /**
     * Set jobMaterialsVentsColor
     *
     * @param string $jobMaterialsVentsColor
     * @return JobMaterials
     */
    public function setJobMaterialsVentsColor($jobMaterialsVentsColor)
    {
        $this->jobMaterialsVentsColor = $jobMaterialsVentsColor;

        return $this;
    }

    /**
     * Get jobMaterialsVentsColor
     *
     * @return string 
     */
    public function getJobMaterialsVentsColor()
    {
        return $this->jobMaterialsVentsColor;
    }

    /**
     * Set jobMaterialsVentsStyle
     *
     * @param string $jobMaterialsVentsStyle
     * @return JobMaterials
     */
    public function setJobMaterialsVentsStyle($jobMaterialsVentsStyle)
    {
        $this->jobMaterialsVentsStyle = $jobMaterialsVentsStyle;

        return $this;
    }

    /**
     * Get jobMaterialsVentsStyle
     *
     * @return string 
     */
    public function getJobMaterialsVentsStyle()
    {
        return $this->jobMaterialsVentsStyle;
    }

    /**
     * Set jobMaterialsValleysManufacturer
     *
     * @param string $jobMaterialsValleysManufacturer
     * @return JobMaterials
     */
    public function setJobMaterialsValleysManufacturer($jobMaterialsValleysManufacturer)
    {
        $this->jobMaterialsValleysManufacturer = $jobMaterialsValleysManufacturer;

        return $this;
    }

    /**
     * Get jobMaterialsValleysManufacturer
     *
     * @return string 
     */
    public function getJobMaterialsValleysManufacturer()
    {
        return $this->jobMaterialsValleysManufacturer;
    }

    /**
     * Set jobMaterialsValleysColor
     *
     * @param string $jobMaterialsValleysColor
     * @return JobMaterials
     */
    public function setJobMaterialsValleysColor($jobMaterialsValleysColor)
    {
        $this->jobMaterialsValleysColor = $jobMaterialsValleysColor;

        return $this;
    }

    /**
     * Get jobMaterialsValleysColor
     *
     * @return string 
     */
    public function getJobMaterialsValleysColor()
    {
        return $this->jobMaterialsValleysColor;
    }

    /**
     * Set jobMaterialsValleysStyle
     *
     * @param string $jobMaterialsValleysStyle
     * @return JobMaterials
     */
    public function setJobMaterialsValleysStyle($jobMaterialsValleysStyle)
    {
        $this->jobMaterialsValleysStyle = $jobMaterialsValleysStyle;

        return $this;
    }

    /**
     * Get jobMaterialsValleysStyle
     *
     * @return string 
     */
    public function getJobMaterialsValleysStyle()
    {
        return $this->jobMaterialsValleysStyle;
    }
}
