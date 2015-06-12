<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CulturePlot
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CulturePlot
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
     * @ORM\Column(name="commodity_id", type="integer")
     */
    private $commodityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="variety_id", type="integer")
     */
    private $varietyId;


    /**
     * @var integer
     *
     * @ORM\Column(name="soil_id", type="integer")
     */
    private $soilId;

    /**
     * @var integer
     *
     * @ORM\Column(name="plot_id", type="integer")
     */
    private $plotId;

    /**
     * @var integer
     *
     * @ORM\Column(name="method_id", type="integer")
     */
    private $methodId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update", type="datetime")
     */
    private $dateUpdate;

    /**
     * @var \PlotComBundle\Entity\Commodity
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Commodity")
     * @ORM\JoinColumn(name="commodity_id",referencedColumnName="id", nullable=false)
     *
     */
    private $commodity;

    /**
     * @var \PlotComBundle\Entity\Variety
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Variety")
     * @ORM\JoinColumn(name="variety_id",referencedColumnName="id", nullable=false)
     *
     */
    private $variety;


    /**
     * @var \PlotComBundle\Entity\Soil
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Soil")
     * @ORM\JoinColumn(name="soil_id",referencedColumnName="id", nullable=false)
     *
     */
    private $soil;

    /**
     * @var \PlotComBundle\Entity\Plot
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Plot")
     * @ORM\JoinColumn(name="plot_id",referencedColumnName="id", nullable=true)
     *
     */
    private $plot;

    /**
     * @var \PlotComBundle\Entity\Method
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Method")
     * @ORM\JoinColumn(name="method_id",referencedColumnName="id", nullable=true)
     *
     */
    private $method;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id", nullable=true)
     *
     */
    private $user;

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
     * Set commodityId
     *
     * @param integer $commodityId
     * @return CulturePlot
     */
    public function setCommodityId($commodityId)
    {
        $this->commodityId = $commodityId;

        return $this;
    }

    /**
     * Get commodityId
     *
     * @return integer 
     */
    public function getCommodityId()
    {
        return $this->commodityId;
    }

    /**
     * Set varietyId
     *
     * @param integer $varietyId
     * @return CulturePlot
     */
    public function setVarietyId($varietyId)
    {
        $this->varietyId = $varietyId;

        return $this;
    }

    /**
     * Get varietyId
     *
     * @return integer 
     */
    public function getVarietyId()
    {
        return $this->varietyId;
    }


    /**
     * Set soilId
     *
     * @param integer $soilId
     * @return CulturePlot
     */
    public function setSoilId($soilId)
    {
        $this->soilId = $soilId;

        return $this;
    }

    /**
     * Get soilId
     *
     * @return integer 
     */
    public function getSoilId()
    {
        return $this->soilId;
    }

    /**
     * Set plotId
     *
     * @param integer $plotId
     * @return CulturePlot
     */
    public function setPlotId($plotId)
    {
        $this->plotId = $plotId;

        return $this;
    }

    /**
     * Get plotId
     *
     * @return integer 
     */
    public function getPlotId()
    {
        return $this->plotId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return CulturePlot
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set methodId
     *
     * @param integer $methodId
     * @return CulturePlot
     */
    public function setMethodId($methodId)
    {
        $this->methodId = $methodId;

        return $this;
    }

    /**
     * Get methodId
     *
     * @return integer 
     */
    public function getMethodId()
    {
        return $this->methodId;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return CulturePlot
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return CulturePlot
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

   

    /**
     * Set commodity
     *
     * @param \PlotComBundle\Entity\Commodity $commodity
     * @return CulturePlot
     */
    public function setCommodity(\PlotComBundle\Entity\Commodity $commodity)
    {
        $this->commodity = $commodity;

        return $this;
    }

    /**
     * Get commodity
     *
     * @return \PlotComBundle\Entity\Commodity 
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * Set variety
     *
     * @param \PlotComBundle\Entity\Variety $variety
     * @return CulturePlot
     */
    public function setVariety(\PlotComBundle\Entity\Variety $variety)
    {
        $this->variety = $variety;

        return $this;
    }

    /**
     * Get variety
     *
     * @return \PlotComBundle\Entity\Variety 
     */
    public function getVariety()
    {
        return $this->variety;
    }


    /**
     * Set soil
     *
     * @param \PlotComBundle\Entity\Soil $soil
     * @return CulturePlot
     */
    public function setSoil(\PlotComBundle\Entity\Soil $soil)
    {
        $this->soil = $soil;

        return $this;
    }

    /**
     * Get soil
     *
     * @return \PlotComBundle\Entity\Soil 
     */
    public function getSoil()
    {
        return $this->soil;
    }

    /**
     * Set plot
     *
     * @param \PlotComBundle\Entity\Plot $plot
     * @return CulturePlot
     */
    public function setPlot(\PlotComBundle\Entity\Plot $plot = null)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return \PlotComBundle\Entity\Plot 
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set method
     *
     * @param \PlotComBundle\Entity\Method $method
     * @return CulturePlot
     */
    public function setMethod(\PlotComBundle\Entity\Method $method = null)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return \PlotComBundle\Entity\Method 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return CulturePlot
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
