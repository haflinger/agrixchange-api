<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuotesMatif
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QuotesMatif
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
     * @ORM\Column(name="contract_id", type="integer")
     */
    private $contractId;

    /**
     * @var string
     *
     * @ORM\Column(name="last", type="decimal", precision=5, scale=2)
     */
    private $last;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \PlotComBundle\Entity\Contract
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Contract")
     * @ORM\JoinColumn(name="contract_id",referencedColumnName="id", nullable=true)
     *
     */
    private $contract;

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
     * Set contractId
     *
     * @param integer $contractId
     * @return QuotesMatif
     */
    public function setContractId($contractId)
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Get contractId
     *
     * @return integer 
     */
    public function getContractId()
    {
        return $this->contractId;
    }

    /**
     * Set last
     *
     * @param string $last
     * @return QuotesMatif
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
     * Set date
     *
     * @param \DateTime $date
     * @return QuotesMatif
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
     * Set contract
     *
     * @param \PlotComBundle\Entity\Contract $contract
     * @return QuotesMatif
     */
    public function setContract(\PlotComBundle\Entity\Contract $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return \PlotComBundle\Entity\Contract 
     */
    public function getContract()
    {
        return $this->contract;
    }
}
