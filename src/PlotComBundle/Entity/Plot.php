<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plot
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Plot
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="decimal", precision=5, scale=2, nullable = true)
     */
    private $area;


    /**
     * @var string
     *
     * @ORM\Column(name="geojson", type="string",length=255)
     */

    private $geojson;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable = true)
     */
    private $enabled=true;


    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable = true)
     */
    private $userId;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
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
     * Set name
     *
     * @param string $name
     * @return Plot
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
     * Set area
     *
     * @param string $area
     * @return Plot
     */
    public function setArea($area)
    {
        /*$this->area = $area;*/
        $this->area = round($area/10000,2);

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set geo
     *
     * @param string $geo
     * @return Plot
     */
    public function setGeojson($geojson)
    {
        $this->geojson = $geojson;

        return $this;
    }

    /**
     * Get geo
     *
     * @return string
     */
    public function getGeojson()
    {
        return $this->geojson;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Plot
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
     * Set userId
     *
     * @param integer $userId
     * @return Plot
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
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return Plot
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
