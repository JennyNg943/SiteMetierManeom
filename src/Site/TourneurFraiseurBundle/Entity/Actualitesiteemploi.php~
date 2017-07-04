<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualitesiteemploi
 *
 * @ORM\Table(name="actualitesiteemploi", indexes={@ORM\Index(name="Id_Actualite", columns={"Id_Actualite", "Id_SiteEmploi"})})
 * @ORM\Entity
 */
class Actualitesiteemploi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ActualiteSiteEmploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualitesiteemploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Actualite", type="integer", nullable=false)
     */
    private $idActualite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteEmploi", type="integer", nullable=false)
     */
    private $idSiteemploi;



    /**
     * Get idActualitesiteemploi
     *
     * @return integer
     */
    public function getIdActualitesiteemploi()
    {
        return $this->idActualitesiteemploi;
    }

    /**
     * Set idActualite
     *
     * @param integer $idActualite
     *
     * @return Actualitesiteemploi
     */
    public function setIdActualite($idActualite)
    {
        $this->idActualite = $idActualite;

        return $this;
    }

    /**
     * Get idActualite
     *
     * @return integer
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Set idSiteemploi
     *
     * @param integer $idSiteemploi
     *
     * @return Actualitesiteemploi
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
}
