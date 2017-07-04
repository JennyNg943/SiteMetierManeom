<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="fonction")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\AnnonceRepository")
 */
class Fonction
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
     * @ORM\Column(name="Id_SiteEmploi", type="integer", nullable=false)
     */
    private $idSiteemploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteDistant", type="integer", nullable=false)
     */
    private $idSitedistant;


	

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
     * @return Fonction
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
     * Set idSiteemploi
     *
     * @param integer $idSiteemploi
     *
     * @return Fonction
     */
    public function setIdSiteemploi($idSiteemploi)
    {
        $this->idSiteemploi = $idSiteemploi;

        return $this;
    }

    /**
     * Get idSiteemploi
     *
     * @return integer
     */
    public function getIdSiteemploi()
    {
        return $this->idSiteemploi;
    }

    /**
     * Set idSitedistant
     *
     * @param integer $idSitedistant
     *
     * @return Fonction
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
     * Set annonce
     *
     * @param integer $annonce
     *
     * @return Fonction
     */
    public function setAnnonce($annonce)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return integer
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set site
     *
     * @param integer $site
     *
     * @return Fonction
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return integer
     */
    public function getSite()
    {
        return $this->site;
    }
	
	public function __toString() {
		try {
			return (string) $this->intitulefonction;
		} catch (Exception $exception) {
			return '';
		}
	}
}
