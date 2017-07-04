<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fluxxml
 *
 * @ORM\Table(name="fluxxml")
 * @ORM\Entity
 */
class Fluxxml
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdFluxXML", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfluxxml;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recruteur", type="integer", nullable=false)
     */
    private $idRecruteur;

    /**
     * @var string
     *
     * @ORM\Column(name="LienXML", type="string", length=255, nullable=false)
     */
    private $lienxml;



    /**
     * Get idfluxxml
     *
     * @return integer
     */
    public function getIdfluxxml()
    {
        return $this->idfluxxml;
    }

    /**
     * Set idRecruteur
     *
     * @param integer $idRecruteur
     *
     * @return Fluxxml
     */
    public function setIdRecruteur($idRecruteur)
    {
        $this->idRecruteur = $idRecruteur;

        return $this;
    }

    /**
     * Get idRecruteur
     *
     * @return integer
     */
    public function getIdRecruteur()
    {
        return $this->idRecruteur;
    }

    /**
     * Set lienxml
     *
     * @param string $lienxml
     *
     * @return Fluxxml
     */
    public function setLienxml($lienxml)
    {
        $this->lienxml = $lienxml;

        return $this;
    }

    /**
     * Get lienxml
     *
     * @return string
     */
    public function getLienxml()
    {
        return $this->lienxml;
    }
}
