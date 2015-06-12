<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variety
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Variety
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \PlotComBundle\Entity\Commodity
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Commodity")
     * @ORM\JoinColumn(name="commodity_id",referencedColumnName="id", nullable=false)
     *
     */
    private $commodity;

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
     * @return Variety
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
     * Set name
     *
     * @param string $name
     * @return Variety
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set commodity
     *
     * @param \PlotComBundle\Entity\Commodity $commodity
     * @return Variety
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
}
