<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuotesPhysique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QuotesPhysique
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="last", type="decimal", precision=5, scale=2)
     */
    private $last;

    /**
     * @var \PlotComBundle\Entity\Commodity
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Commodity")
     * @ORM\JoinColumn(name="commodity_id",referencedColumnName="id", nullable=true)
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
     * @return QuotesPhysique
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
     * Set date
     *
     * @param \DateTime $date
     * @return QuotesPhysique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set last
     *
     * @param string $last
     * @return QuotesPhysique
     */
    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    /**
     * Get last
     *
     * @return string 
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * Set commodity
     *
     * @param \PlotComBundle\Entity\Commodity $commodity
     * @return QuotesPhysique
     */
    public function setCommodity(\PlotComBundle\Entity\Commodity $commodity = null)
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
