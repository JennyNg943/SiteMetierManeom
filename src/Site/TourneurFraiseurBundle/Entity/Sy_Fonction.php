<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Fonction
 *
 * @ORM\Table(name="Sy_fonction")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\AnnonceRepository")
 */
class Sy_Fonction
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleFonction", type="string", length=255, nullable=false)
     */
    private $intitulefonction;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $idSiteEmploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteDistant", type="integer", nullable=false)
     */
    private $idSitedistant;



    
	
	public function __toString() {
		try {
			return (string) $this->intitulefonction;
		} catch (Exception $exception) {
			return '';
		}
	}

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
     * Set intitulefonction
     *
     * @param string $intitulefonction
     *
     * @return Sy_Fonction
     */
    public function setIntitulefonction($intitulefonction)
    {
        $this->intitulefonction = $intitulefonction;

        return $this;
    }

    /**
     * Get intitulefonction
     *
     * @return string
     */
    public function getIntitulefonction()
    {
        return $this->intitulefonction;
    }

    /**
     * Set idSitedistant
     *
     * @param integer $idSitedistant
     *
     * @return Sy_Fonction
     */
    public function setIdSitedistant($idSitedistant)
    {
        $this->idSitedistant = $idSitedistant;

        return $this;
    }

    /**
     * Get idSitedistant
     *
     * @return integer
     */
    public function getIdSitedistant()
    {
        return $this->idSitedistant;
    }

    /**
     * Set idSiteEmploi
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSiteEmploi
     *
     * @return Sy_Fonction
     */
    public function setIdSiteEmploi(\Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSiteEmploi)
    {
        $this->idSiteEmploi = $idSiteEmploi;

        return $this;
    }

    /**
     * Get idSiteEmploi
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi
     */
    public function getIdSiteEmploi()
    {
        return $this->idSiteEmploi;
    }
}
