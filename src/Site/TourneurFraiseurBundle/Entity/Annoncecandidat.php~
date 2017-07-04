<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annoncecandidat
 *
 * @ORM\Table(name="annoncecandidat", indexes={@ORM\Index(name="Id_Annonce", columns={"Id_Annonce"}), @ORM\Index(name="Id_Candidat", columns={"Id_Candidat"})})
 * @ORM\Entity
 */
class Annoncecandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AnnonceCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnoncecandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Annonce", type="integer", nullable=false)
     */
    private $idAnnonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Type", type="integer", nullable=false)
     */
    private $type = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAction", type="date", nullable=false)
     */
    private $dateaction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagBonneCandidature", type="boolean", nullable=false)
     */
    private $flagbonnecandidature = '-2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="FlagEnvoi", type="boolean", nullable=false)
     */
    private $flagenvoi;



    /**
     * Get idAnnoncecandidat
     *
     * @return integer
     */
    public function getIdAnnoncecandidat()
    {
        return $this->idAnnoncecandidat;
    }

    /**
     * Set idAnnonce
     *
     * @param integer $idAnnonce
     *
     * @return Annoncecandidat
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
     * @return Annoncecandidat
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
     * Set type
     *
     * @param integer $type
     *
     * @return Annoncecandidat
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateaction
     *
     * @param \DateTime $dateaction
     *
     * @return Annoncecandidat
     */
    public function setDateaction($dateaction)
    {
        $this->dateaction = $dateaction;

        return $this;
    }

    /**
     * Get dateaction
     *
     * @return \DateTime
     */
    public function getDateaction()
    {
        return $this->dateaction;
    }

    /**
     * Set flagbonnecandidature
     *
     * @param boolean $flagbonnecandidature
     *
     * @return Annoncecandidat
     */
    public function setFlagbonnecandidature($flagbonnecandidature)
    {
        $this->flagbonnecandidature = $flagbonnecandidature;

        return $this;
    }

    /**
     * Get flagbonnecandidature
     *
     * @return boolean
     */
    public function getFlagbonnecandidature()
    {
        return $this->flagbonnecandidature;
    }

    /**
     * Set flagenvoi
     *
     * @param boolean $flagenvoi
     *
     * @return Annoncecandidat
     */
    public function setFlagenvoi($flagenvoi)
    {
        $this->flagenvoi = $flagenvoi;

        return $this;
    }

    /**
     * Get flagenvoi
     *
     * @return boolean
     */
    public function getFlagenvoi()
    {
        return $this->flagenvoi;
    }
}
