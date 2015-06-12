<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkFertilizer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class WorkFertilizer
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
     * @ORM\Column(name="work_id", type="integer")
     */
    private $workId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fertilizer_id", type="integer")
     */
    private $fertilizerId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=5,scale=2)
     */
    private $quantity;

    /**
     * @var \PlotComBundle\Entity\Work
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Work",inversedBy="workfertilizers")
     * @ORM\JoinColumn(name="work_id",referencedColumnName="id",nullable=false)
     */
    private $work;

    /**
     * @var \PlotComBundle\Entity\Fertilizer
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Fertilizer",inversedBy="workfertilizers")
     * @ORM\JoinColumn(name="fertilizer_id",referencedColumnName="id",nullable=false)
     *
     */
    private $fertilizer;


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
     * Set workId
     *
     * @param integer $workId
     * @return WorkFertilizer
     */
    public function setWorkId($workId)
    {
        $this->workId = $workId;

        return $this;
    }

    /**
     * Get workId
     *
     * @return integer 
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Set fertilizerId
     *
     * @param integer $fertilizerId
     * @return WorkFertilizer
     */
    public function setFertilizerId($fertilizerId)
    {
        $this->fertilizerId = $fertilizerId;

        return $this;
    }

    /**
     * Get fertilizerId
     *
     * @return integer 
     */
    public function getFertilizerId()
    {
        return $this->fertilizerId;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return WorkFertilizer
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set work
     *
     * @param \PlotComBundle\Entity\Work $work
     * @return WorkFertilizer
     */
    public function setWork(\PlotComBundle\Entity\Work $work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return \PlotComBundle\Entity\Work
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set fertilizer
     *
     * @param \PlotComBundle\Entity\Fertilizer $fertilizer
     * @return WorkFertilizer
     */
    public function setFertilizer(\PlotComBundle\Entity\Fertilizer $fertilizer)
    {
        $this->fertilizer = $fertilizer;

        return $this;
    }

    /**
     * Get fertilizer
     *
     * @return \PlotComBundle\Entity\Fertilizer
     */
    public function getFertilizer()
    {
        return $this->fertilizer;
    }
}
