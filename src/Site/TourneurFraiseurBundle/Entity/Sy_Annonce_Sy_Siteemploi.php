<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Annonce_Sy_Siteemploi
 *
 * 
 * @ORM\Entity
 */
class Sy_Annonce_Sy_Siteemploi
{
    /**
     * @ORM\Id
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Annonce",cascade={"persist"})
     */
    private $idAnnonce;

    /**
     * @ORM\Id
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi",cascade={"persist"})
     */
    private $idSiteemploi;

	/**
     * @ORM\Id
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Fonction",cascade={"persist"})
     */
	private $idFonction;


   

    

    /**
     * Set idAnnonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $idAnnonce
     *
     * @return Sy_Annonce_Sy_Siteemploi
     */
    public function setIdAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Annonce
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idSiteemploi
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSiteemploi
     *
     * @return Sy_Annonce_Sy_Siteemploi
     */
    public function setIdSiteemploi(\Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSiteemploi)
    {
        $this->idSiteemploi = $idSiteemploi;

        return $this;
    }

    /**
     * Get idSiteemploi
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi
     */
    public function getIdSiteemploi()
    {
        return $this->idSiteemploi;
    }

    /**
     * Set idFonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $idFonction
     *
     * @return Sy_Annonce_Sy_Siteemploi
     */
    public function setIdFonction(\Site\TourneurFraiseurBundle\Entity\Sy_Fonction $idFonction)
    {
        $this->idFonction = $idFonction;

        return $this;
    }

    /**
     * Get idFonction
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Fonction
     */
    public function getIdFonction()
    {
        return $this->idFonction;
    }
}
