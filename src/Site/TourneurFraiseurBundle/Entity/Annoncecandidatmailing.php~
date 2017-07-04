<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annoncecandidatmailing
 *
 * @ORM\Table(name="annoncecandidatmailing", indexes={@ORM\Index(name="Id_Annonce", columns={"Id_Annonce"}), @ORM\Index(name="Id_Candidat", columns={"Id_Candidat"})})
 * @ORM\Entity
 */
class Annoncecandidatmailing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AnnonceCandidatMailing", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnoncecandidatmailing;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Annonce", type="bigint", nullable=false)
     */
    private $idAnnonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="bigint", nullable=false)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagEnvoi", type="integer", nullable=false)
     */
    private $flagenvoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoi", type="date", nullable=false)
     */
    private $dateenvoi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EtatGeographique", type="boolean", nullable=false)
     */
    private $etatgeographique = '0';



    /**
     * Get idAnnoncecandidatmailing
     *
     * @return integer
     */
    public function getIdAnnoncecandidatmailing()
    {
        return $this->idAnnoncecandidatmailing;
    }

    /**
     * Set idAnnonce
     *
     * @param integer $idAnnonce
     *
     * @return Annoncecandidatmailing
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return integer
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     *
     * @return Annoncecandidatmailing
     */
    public function setIdCandidat($idCandidat)
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return integer
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Set flagenvoi
     *
     * @param integer $flagenvoi
     *
     * @return Annoncecandidatmailing
     */
    public function setFlagenvoi($flagenvoi)
    {
        $this->flagenvoi = $flagenvoi;

        return $this;
    }

    /**
     * Get flagenvoi
     *
     * @return integer
     */
    public function getFlagenvoi()
    {
        return $this->flagenvoi;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return Annoncecandidatmailing
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set etatgeographique
     *
     * @param boolean $etatgeographique
     *
     * @return Annoncecandidatmailing
     */
    public function setEtatgeographique($etatgeographique)
    {
        $this->etatgeographique = $etatgeographique;

        return $this;
    }

    /**
     * Get etatgeographique
     *
     * @return boolean
     */
    public function getEtatgeographique()
    {
        return $this->etatgeographique;
    }
}
