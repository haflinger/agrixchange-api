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
     * @ORM\Column(name="area", type="decimal", precision=5, scale=2)
     */
    private $area;


    /**
     * @var array
     *
     * @ORM\Column(name="geojson", type="json_array")
     */

    private $geoJson;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;


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
        $this->area = $area;

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
     * @param array $geo
     * @return Plot
     */
    public function setGeoJson($geoJson)
    {
        $this->geojson = $geoJson;

        return $this;
    }

    /**
     * Get geo
     *
     * @return array
     */
    public function getGeoJson()
    {
        return $this->geoJson;
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
}
