<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Siteemploi
 *
 * @ORM\Table(name="Sy_siteemploi")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\SiteRepository")
 */
class Sy_Siteemploi
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
     * @ORM\Column(name="IntituleSiteEmploi", type="string", length=255, nullable=false)
     */
    private $intitulesiteemploi;

    /**
     * @var string
     *
     * @ORM\Column(name="UrlSiteEmploi", type="string", length=255, nullable=false)
     */
    private $urlsiteemploi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FlagMetier", type="boolean", nullable=false)
     */
    private $flagmetier;

    /**
     * @var string
     *
     * @ORM\Column(name="Initiales", type="string", length=10, nullable=false)
     */
    private $initiales;

    /**
     * @var string
     *
     * @ORM\Column(name="Domaine", type="string", length=255, nullable=false)
     */
    private $domaine;

	/**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Fonction",mappedBy="idSiteEmploi")
	 * @ORM\JoinColumn(nullable=true)
	 * 
     */
	private $fonction;

	/**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Annonce_Sy_Siteemploi",mappedBy="idAnnonce",cascade={"persist"})
	 *
     */
	private $annonce;
	
    
	
	public function __toString() {
		try {
			return (string) $this->id;
		} catch (Exception $exception) {
			return '';
		}
	}

    
	
 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fonction = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set intitulesiteemploi
     *
     * @param string $intitulesiteemploi
     *
     * @return Sy_Siteemploi
     */
    public function setIntitulesiteemploi($intitulesiteemploi)
    {
        $this->intitulesiteemploi = $intitulesiteemploi;

        return $this;
    }

    /**
     * Get intitulesiteemploi
     *
     * @return string
     */
    public function getIntitulesiteemploi()
    {
        return $this->intitulesiteemploi;
    }

    /**
     * Set urlsiteemploi
     *
     * @param string $urlsiteemploi
     *
     * @return Sy_Siteemploi
     */
    public function setUrlsiteemploi($urlsiteemploi)
    {
        $this->urlsiteemploi = $urlsiteemploi;

        return $this;
    }

    /**
     * Get urlsiteemploi
     *
     * @return string
     */
    public function getUrlsiteemploi()
    {
        return $this->urlsiteemploi;
    }

    /**
     * Set flagmetier
     *
     * @param boolean $flagmetier
     *
     * @return Sy_Siteemploi
     */
    public function setFlagmetier($flagmetier)
    {
        $this->flagmetier = $flagmetier;

        return $this;
    }

    /**
     * Get flagmetier
     *
     * @return boolean
     */
    public function getFlagmetier()
    {
        return $this->flagmetier;
    }

    /**
     * Set initiales
     *
     * @param string $initiales
     *
     * @return Sy_Siteemploi
     */
    public function setInitiales($initiales)
    {
        $this->initiales = $initiales;

        return $this;
    }

    /**
     * Get initiales
     *
     * @return string
     */
    public function getInitiales()
    {
        return $this->initiales;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Sy_Siteemploi
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Add fonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction
     *
     * @return Sy_Siteemploi
     */
    public function addFonction(\Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction)
    {
        $this->fonction[] = $fonction;

        return $this;
    }

    /**
     * Remove fonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction
     */
    public function removeFonction(\Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction)
    {
        $this->fonction->removeElement($fonction);
    }

    /**
     * Get fonction
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Add annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Annonce_Sy_Siteemploi $annonce
     *
     * @return Sy_Siteemploi
     */
    public function addAnnonce(\Site\TourneurFraiseurBundle\Entity\Annonce_Sy_Siteemploi $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Annonce_Sy_Siteemploi $annonce
     */
    public function removeAnnonce(\Site\TourneurFraiseurBundle\Entity\Annonce_Sy_Siteemploi $annonce)
    {
        $this->annonce->removeElement($annonce);
    }

    /**
     * Get annonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
