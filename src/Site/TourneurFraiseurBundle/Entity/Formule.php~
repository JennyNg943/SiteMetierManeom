<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="formule")
 * @ORM\Entity
 */
class Formule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Formule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormule;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleFormule", type="string", length=255, nullable=false)
     */
    private $intituleformule;

    /**
     * @var string
     *
     * @ORM\Column(name="DetailFormule", type="text", length=65535, nullable=false)
     */
    private $detailformule;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbJoursEnLigne", type="integer", nullable=false)
     */
    private $nbjoursenligne;

    /**
     * @var string
     *
     * @ORM\Column(name="NomChampsRecruteurFormule", type="string", length=255, nullable=false)
     */
    private $nomchampsrecruteurformule;

    /**
     * @var string
     *
     * @ORM\Column(name="NomChampsHistorique", type="string", length=255, nullable=false)
     */
    private $nomchampshistorique;



    /**
     * Get idFormule
     *
     * @return integer
     */
    public function getIdFormule()
    {
        return $this->idFormule;
    }

    /**
     * Set intituleformule
     *
     * @param string $intituleformule
     *
     * @return Formule
     */
    public function setIntituleformule($intituleformule)
    {
        $this->intituleformule = $intituleformule;

        return $this;
    }

    /**
     * Get intituleformule
     *
     * @return string
     */
    public function getIntituleformule()
    {
        return $this->intituleformule;
    }

    /**
     * Set detailformule
     *
     * @param string $detailformule
     *
     * @return Formule
     */
    public function setDetailformule($detailformule)
    {
        $this->detailformule = $detailformule;

        return $this;
    }

    /**
     * Get detailformule
     *
     * @return string
     */
    public function getDetailformule()
    {
        return $this->detailformule;
    }

    /**
     * Set nbjoursenligne
     *
     * @param integer $nbjoursenligne
     *
     * @return Formule
     */
    public function setNbjoursenligne($nbjoursenligne)
    {
        $this->nbjoursenligne = $nbjoursenligne;

        return $this;
    }

    /**
     * Get nbjoursenligne
     *
     * @return integer
     */
    public function getNbjoursenligne()
    {
        return $this->nbjoursenligne;
    }

    /**
     * Set nomchampsrecruteurformule
     *
     * @param string $nomchampsrecruteurformule
     *
     * @return Formule
     */
    public function setNomchampsrecruteurformule($nomchampsrecruteurformule)
    {
        $this->nomchampsrecruteurformule = $nomchampsrecruteurformule;

        return $this;
    }

    /**
     * Get nomchampsrecruteurformule
     *
     * @return string
     */
    public function getNomchampsrecruteurformule()
    {
        return $this->nomchampsrecruteurformule;
    }

    /**
     * Set nomchampshistorique
     *
     * @param string $nomchampshistorique
     *
     * @return Formule
     */
    public function setNomchampshistorique($nomchampshistorique)
    {
        $this->nomchampshistorique = $nomchampshistorique;

        return $this;
    }

    /**
     * Get nomchampshistorique
     *
     * @return string
     */
    public function getNomchampshistorique()
    {
        return $this->nomchampshistorique;
    }
}
