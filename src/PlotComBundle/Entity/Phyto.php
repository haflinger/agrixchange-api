<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phyto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Phyto
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
     * @ORM\Column(name="No_AMM", type="integer")
     */
    private $noAMM;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Premiere_Autorisation", type="string", length=255)
     */
    private $datePremiereAutorisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Echeance_Autorisation", type="string", length=255)
     */
    private $dateEcheanceAutorisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Retrait_Definitif", type="string", length=255)
     */
    private $dateRetraitDefinitif;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Commercial", type="string", length=255)
     */
    private $nomCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Commercial", type="string", length=255)
     */
    private $typeCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Entreprise_Detentrice", type="string", length=255)
     */
    private $entrepriseDetentrice;

    /**
     * @var string
     *
     * @ORM\Column(name="Phrases", type="string", length=255)
     */
    private $phrases;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_Comite", type="string", length=255)
     */
    private $dateComite;

    /**
     * @var string
     *
     * @ORM\Column(name="Teneur", type="string", length=255)
     */
    private $teneur;

    /**
     * @var string
     *
     * @ORM\Column(name="Unite", type="string", length=255)
     */
    private $unite;

    /**
     * @var string
     *
     * @ORM\Column(name="Substance", type="string", length=255)
     */
    private $substance;

    /**
     * @var string
     *
     * @ORM\Column(name="No_CAS_Substance", type="string", length=255)
     */
    private $noCASSubstance;

    /**
     * @var integer
     *
     * @ORM\Column(name="typework_id", type="integer" , nullable = false)
     */

    private $typework_id;

    /**
     * @var \PlotComBundle\Entity\Typework
     *
     * @ORM\ManyToOne(targetEntity="PlotComBundle\Entity\Typework")
     * @ORM\JoinColumn(name="typework_id",referencedColumnName="id", nullable=false)
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
     * Set noAMM
     *
     * @param integer $noAMM
     * @return Phyto
     */
    public function setNoAMM($noAMM)
    {
        $this->noAMM = $noAMM;

        return $this;
    }

    /**
     * Get noAMM
     *
     * @return integer 
     */
    public function getNoAMM()
    {
        return $this->noAMM;
    }

    /**
     * Set datePremiereAutorisation
     *
     * @param string $datePremiereAutorisation
     * @return Phyto
     */
    public function setDatePremiereAutorisation($datePremiereAutorisation)
    {
        $this->datePremiereAutorisation = $datePremiereAutorisation;

        return $this;
    }

    /**
     * Get datePremiereAutorisation
     *
     * @return string 
     */
    public function getDatePremiereAutorisation()
    {
        return $this->datePremiereAutorisation;
    }

    /**
     * Set dateEcheanceAutorisation
     *
     * @param string $dateEcheanceAutorisation
     * @return Phyto
     */
    public function setDateEcheanceAutorisation($dateEcheanceAutorisation)
    {
        $this->dateEcheanceAutorisation = $dateEcheanceAutorisation;

        return $this;
    }

    /**
     * Get dateEcheanceAutorisation
     *
     * @return string 
     */
    public function getDateEcheanceAutorisation()
    {
        return $this->dateEcheanceAutorisation;
    }

    /**
     * Set dateRetraitDefinitif
     *
     * @param string $dateRetraitDefinitif
     * @return Phyto
     */
    public function setDateRetraitDefinitif($dateRetraitDefinitif)
    {
        $this->dateRetraitDefinitif = $dateRetraitDefinitif;

        return $this;
    }

    /**
     * Get dateRetraitDefinitif
     *
     * @return string 
     */
    public function getDateRetraitDefinitif()
    {
        return $this->dateRetraitDefinitif;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Phyto
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set nomCommercial
     *
     * @param string $nomCommercial
     * @return Phyto
     */
    public function setNomCommercial($nomCommercial)
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    /**
     * Get nomCommercial
     *
     * @return string 
     */
    public function getNomCommercial()
    {
        return $this->nomCommercial;
    }

    /**
     * Set typeCommercial
     *
     * @param string $typeCommercial
     * @return Phyto
     */
    public function setTypeCommercial($typeCommercial)
    {
        $this->typeCommercial = $typeCommercial;

        return $this;
    }

    /**
     * Get typeCommercial
     *
     * @return string 
     */
    public function getTypeCommercial()
    {
        return $this->typeCommercial;
    }

    /**
     * Set entrepriseDetentrice
     *
     * @param string $entrepriseDetentrice
     * @return Phyto
     */
    public function setEntrepriseDetentrice($entrepriseDetentrice)
    {
        $this->entrepriseDetentrice = $entrepriseDetentrice;

        return $this;
    }

    /**
     * Get entrepriseDetentrice
     *
     * @return string 
     */
    public function getEntrepriseDetentrice()
    {
        return $this->entrepriseDetentrice;
    }

    /**
     * Set phrases
     *
     * @param string $phrases
     * @return Phyto
     */
    public function setPhrases($phrases)
    {
        $this->phrases = $phrases;

        return $this;
    }

    /**
     * Get phrases
     *
     * @return string 
     */
    public function getPhrases()
    {
        return $this->phrases;
    }

    /**
     * Set dateComite
     *
     * @param string $dateComite
     * @return Phyto
     */
    public function setDateComite($dateComite)
    {
        $this->dateComite = $dateComite;

        return $this;
    }

    /**
     * Get dateComite
     *
     * @return string 
     */
    public function getDateComite()
    {
        return $this->dateComite;
    }

    /**
     * Set teneur
     *
     * @param string $teneur
     * @return Phyto
     */
    public function setTeneur($teneur)
    {
        $this->teneur = $teneur;

        return $this;
    }

    /**
     * Get teneur
     *
     * @return string 
     */
    public function getTeneur()
    {
        return $this->teneur;
    }

    /**
     * Set unite
     *
     * @param string $unite
     * @return Phyto
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string 
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set substance
     *
     * @param string $substance
     * @return Phyto
     */
    public function setSubstance($substance)
    {
        $this->substance = $substance;

        return $this;
    }

    /**
     * Get substance
     *
     * @return string 
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Set noCASSubstance
     *
     * @param string $noCASSubstance
     * @return Phyto
     */
    public function setNoCASSubstance($noCASSubstance)
    {
        $this->noCASSubstance = $noCASSubstance;

        return $this;
    }

    /**
     * Get noCASSubstance
     *
     * @return string 
     */
    public function getNoCASSubstance()
    {
        return $this->noCASSubstance;
    }

    /**
     * Set typework_id
     *
     * @param integer $typeworkId
     * @return Phyto
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
     * @return Phyto
     */
    public function setTypework(\PlotComBundle\Entity\Typework $typework)
    {
        $this->typework = $typework;

        return $this;
    }

    /**
     * Get typework
     *
     * @return \PlotComBundle\Entity\Typework
     */
    public function getTypework()
    {
        return $this->typework;
    }



}
