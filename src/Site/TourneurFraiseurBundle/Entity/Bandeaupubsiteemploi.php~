<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bandeaupubsiteemploi
 *
 * @ORM\Table(name="bandeaupubsiteemploi")
 * @ORM\Entity
 */
class Bandeaupubsiteemploi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_BandeauPubSiteEmploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBandeaupubsiteemploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_BandeauPub", type="integer", nullable=false)
     */
    private $idBandeaupub;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteEmploi", type="integer", nullable=false)
     */
    private $idSiteemploi;

    /**
     * @var string
     *
     * @ORM\Column(name="LienExterne", type="string", length=1000, nullable=false)
     */
    private $lienexterne;



    /**
     * Get idBandeaupubsiteemploi
     *
     * @return integer
     */
    public function getIdBandeaupubsiteemploi()
    {
        return $this->idBandeaupubsiteemploi;
    }

    /**
     * Set idBandeaupub
     *
     * @param integer $idBandeaupub
     *
     * @return Bandeaupubsiteemploi
     */
    public function setIdBandeaupub($idBandeaupub)
    {
        $this->idBandeaupub = $idBandeaupub;

        return $this;
    }

    /**
     * Get idBandeaupub
     *
     * @return integer
     */
    public function getIdBandeaupub()
    {
        return $this->idBandeaupub;
    }

    /**
     * Set idSiteemploi
     *
     * @param integer $idSiteemploi
     *
     * @return Bandeaupubsiteemploi
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
     * Set lienexterne
     *
     * @param string $lienexterne
     *
     * @return Bandeaupubsiteemploi
     */
    public function setLienexterne($lienexterne)
    {
        $this->lienexterne = $lienexterne;

        return $this;
    }

    /**
     * Get lienexterne
     *
     * @return string
     */
    public function getLienexterne()
    {
        return $this->lienexterne;
    }
}
