<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fertilizer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Fertilizer
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
     * @ORM\Column(name="cat_id", type="integer")
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer" , nullable = true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="unity", type="string" , nullable = true)
     */
    
    private $unity;

    /**
     * @var integer
     *
     * @ORM\Column(name="typework_id", type="integer")
     */

    private $typework_id;

    /**
     * @var \PlotComBundle\Entity\Typework
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Typework")
     * @ORM\JoinColumn(name="typework_id",referencedColumnName="id")
     *
     */
    private $typework;



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
     * Set catId
     *
     * @param integer $catId
     * @return Fertilizer
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Fertilizer
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
     * Set parentId
     *
     * @param integer $parentId
     * @return Fertilizer
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set unity
     *
     * @param string $unity
     * @return Fertilizer
     */
    public function setUnity($unity)
    {
        $this->unity = $unity;

        return $this;
    }

    /**
     * Get unity
     *
     * @return string 
     */
    public function getUnity()
    {
        return $this->unity;
    }

    /**
     * Set typework_id
     *
     * @param integer $typeworkId
     * @return Fertilizer
     */
    public function setTypeworkId($typeworkId)
    {
        $this->typework_id = $typeworkId;

        return $this;
    }

    /**
     * Get typework_id
     *
     * @return integer 
     */
    public function getTypeworkId()
    {
        return $this->typework_id;
    }

    /**
     * Set typework
     *
     * @param \PlotComBundle\Entity\Typework $typework
     * @return Fertilizer
     */
    public function setTypework(\PlotComBundle\Entity\Typework $typework)
    {
        $this->typework = $typework;

        return $this;
    }

    /**
     * Get typework
     *
     * @return \PlotComBundle\Entity\TypeWork 
     */
    public function getTypework()
    {
        return $this->typework;
    }

}
