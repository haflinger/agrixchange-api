<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkPhyto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class WorkPhyto
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
     * @ORM\Column(name="quantity", type="decimal", precision=5,scale=2)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="work_id", type="integer")
     */
    private $workId;

    /**
     * @var integer
     *
     * @ORM\Column(name="phyto_id", type="integer")
     */
    private $phytoId;

    /**
     * @var \PlotComBundle\Entity\Work
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Work",inversedBy="workphytos")
     * @ORM\JoinColumn(name="work_id",referencedColumnName="id",nullable=false)
     */
    private $work;

    /**
     * @var \PlotComBundle\Entity\Phyto
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Phyto",inversedBy="workphytos")
     * @ORM\JoinColumn(name="phyto_id",referencedColumnName="id",nullable=false)
     *
     */
    private $phyto;

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
     * Set quantity
     *
     * @param string $quantity
     * @return WorkPhyto
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
     * Set workId
     *
     * @param integer $workId
     * @return WorkPhyto
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
     * Set phytoId
     *
     * @param integer $phytoId
     * @return WorkPhyto
     */
    public function setPhytoId($phytoId)
    {
        $this->phytoId = $phytoId;

        return $this;
    }

    /**
     * Get phytoId
     *
     * @return integer 
     */
    public function getPhytoId()
    {
        return $this->phytoId;
    }

    /**
     * Set work
     *
     * @param \PlotComBundle\Entity\Work $work
     * @return WorkPhyto
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
     * Set phyto
     *
     * @param \PlotComBundle\Entity\Work $phyto
     * @return WorkPhyto
     */
    public function setPhyto(\PlotComBundle\Entity\Work $phyto)
    {
        $this->phyto = $phyto;

        return $this;
    }

    /**
     * Get phyto
     *
     * @return \PlotComBundle\Entity\Work 
     */
    public function getPhyto()
    {
        return $this->phyto;
    }
}
