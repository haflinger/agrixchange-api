<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contract
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
     * @ORM\Column(name="commodity_id", type="integer", length=11)
     */
    private $commodityId;

    /**
     * @var string
     *
     * @ORM\Column(name="contract", type="string", length=5)
     */
    private $contract;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_fr", type="string", length=5)
     */
    private $contractFr;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_en", type="string", length=5)
     */
    private $contractEn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

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
     * Set commodity
     *
     * @param integer $commodityId
     * @return Contract
     */
    public function setCommodity($commodityId)
    {
        $this->commodityId = $commodityId;

        return $this;
    }

    /**
     * Get commodity
     *
     * @return string 
     */
    public function getCommodityId()
    {
        return $this->commodityId;
    }

    /**
     * Set contract
     *
     * @param string $contract
     * @return Contract
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return string 
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set contractFr
     *
     * @param string $contractFr
     * @return Contract
     */
    public function setContractFr($contractFr)
    {
        $this->contractFr = $contractFr;

        return $this;
    }

    /**
     * Get contractFr
     *
     * @return string 
     */
    public function getContractFr()
    {
        return $this->contractFr;
    }

    /**
     * Set contractEn
     *
     * @param string $contractEn
     * @return Contract
     */
    public function setContractEn($contractEn)
    {
        $this->contractEn = $contractEn;

        return $this;
    }

    /**
     * Get contractEn
     *
     * @return string 
     */
    public function getContractEn()
    {
        return $this->contractEn;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Contract
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set commodityId
     *
     * @param integer $commodityId
     * @return Contract
     */
    public function setCommodityId($commodityId)
    {
        $this->commodityId = $commodityId;

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
