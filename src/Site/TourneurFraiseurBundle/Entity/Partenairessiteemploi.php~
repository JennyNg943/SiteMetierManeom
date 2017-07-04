<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenairessiteemploi
 *
 * @ORM\Table(name="partenairessiteemploi", indexes={@ORM\Index(name="Id_Partenaires", columns={"Id_Partenaires", "Id_SiteEmploi"})})
 * @ORM\Entity
 */
class Partenairessiteemploi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_PartenairesSiteEmploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPartenairessiteemploi;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Partenaires", type="integer", nullable=false)
     */
    private $idPartenaires;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteEmploi", type="integer", nullable=false)
     */
    private $idSiteemploi;



    /**
     * Get idPartenairessiteemploi
     *
     * @return integer
     */
    public function getIdPartenairessiteemploi()
    {
        return $this->idPartenairessiteemploi;
    }

    /**
     * Set idPartenaires
     *
     * @param integer $idPartenaires
     *
     * @return Partenairessiteemploi
     */
    public function setIdPartenaires($idPartenaires)
    {
        $this->idPartenaires = $idPartenaires;

        return $this;
    }

    /**
     * Get idPartenaires
     *
     * @return integer
     */
    public function getIdPartenaires()
    {
        return $this->idPartenaires;
    }

    /**
     * Set idSiteemploi
     *
     * @param integer $idSiteemploi
     *
     * @return Partenairessiteemploi
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
