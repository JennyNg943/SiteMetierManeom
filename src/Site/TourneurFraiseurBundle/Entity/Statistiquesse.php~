<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiquesse
 *
 * @ORM\Table(name="statistiquesse")
 * @ORM\Entity
 */
class Statistiquesse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_StatistiquesSE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatistiquesse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnregistrement", type="date", nullable=false)
     */
    private $dateenregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbCandidatsInscrit", type="integer", nullable=false)
     */
    private $nbcandidatsinscrit;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbRecruteursInscrit", type="integer", nullable=false)
     */
    private $nbrecruteursinscrit;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbNlleAnnonces", type="integer", nullable=false)
     */
    private $nbnlleannonces;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbVisites", type="integer", nullable=false)
     */
    private $nbvisites;

    /**
     * @var integer
     *
     * @ORM\Column(name="CandidatsPostulerAdmin", type="integer", nullable=false)
     */
    private $candidatspostuleradmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="CandidatsPostulerNormal", type="integer", nullable=false)
     */
    private $candidatspostulernormal;

    /**
     * @var integer
     *
     * @ORM\Column(name="plaquette", type="integer", nullable=false)
     */
    private $plaquette = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bonDeCommande", type="integer", nullable=false)
     */
    private $bondecommande = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_SiteEmploi", type="integer", nullable=false)
     */
    private $idSiteemploi;



    /**
     * Get idStatistiquesse
     *
     * @return integer
     */
    public function getIdStatistiquesse()
    {
        return $this->idStatistiquesse;
    }

    /**
     * Set dateenregistrement
     *
     * @param \DateTime $dateenregistrement
     *
     * @return Statistiquesse
     */
    public function setDateenregistrement($dateenregistrement)
    {
        $this->dateenregistrement = $dateenregistrement;

        return $this;
    }

    /**
     * Get dateenregistrement
     *
     * @return \DateTime
     */
    public function getDateenregistrement()
    {
        return $this->dateenregistrement;
    }

    /**
     * Set nbcandidatsinscrit
     *
     * @param integer $nbcandidatsinscrit
     *
     * @return Statistiquesse
     */
    public function setNbcandidatsinscrit($nbcandidatsinscrit)
    {
        $this->nbcandidatsinscrit = $nbcandidatsinscrit;

        return $this;
    }

    /**
     * Get nbcandidatsinscrit
     *
     * @return integer
     */
    public function getNbcandidatsinscrit()
    {
        return $this->nbcandidatsinscrit;
    }

    /**
     * Set nbrecruteursinscrit
     *
     * @param integer $nbrecruteursinscrit
     *
     * @return Statistiquesse
     */
    public function setNbrecruteursinscrit($nbrecruteursinscrit)
    {
        $this->nbrecruteursinscrit = $nbrecruteursinscrit;

        return $this;
    }

    /**
     * Get nbrecruteursinscrit
     *
     * @return integer
     */
    public function getNbrecruteursinscrit()
    {
        return $this->nbrecruteursinscrit;
    }

    /**
     * Set nbnlleannonces
     *
     * @param integer $nbnlleannonces
     *
     * @return Statistiquesse
     */
    public function setNbnlleannonces($nbnlleannonces)
    {
        $this->nbnlleannonces = $nbnlleannonces;

        return $this;
    }

    /**
     * Get nbnlleannonces
     *
     * @return integer
     */
    public function getNbnlleannonces()
    {
        return $this->nbnlleannonces;
    }

    /**
     * Set nbvisites
     *
     * @param integer $nbvisites
     *
     * @return Statistiquesse
     */
    public function setNbvisites($nbvisites)
    {
        $this->nbvisites = $nbvisites;

        return $this;
    }

    /**
     * Get nbvisites
     *
     * @return integer
     */
    public function getNbvisites()
    {
        return $this->nbvisites;
    }

    /**
     * Set candidatspostuleradmin
     *
     * @param integer $candidatspostuleradmin
     *
     * @return Statistiquesse
     */
    public function setCandidatspostuleradmin($candidatspostuleradmin)
    {
        $this->candidatspostuleradmin = $candidatspostuleradmin;

        return $this;
    }

    /**
     * Get candidatspostuleradmin
     *
     * @return integer
     */
    public function getCandidatspostuleradmin()
    {
        return $this->candidatspostuleradmin;
    }

    /**
     * Set candidatspostulernormal
     *
     * @param integer $candidatspostulernormal
     *
     * @return Statistiquesse
     */
    public function setCandidatspostulernormal($candidatspostulernormal)
    {
        $this->candidatspostulernormal = $candidatspostulernormal;

        return $this;
    }

    /**
     * Get candidatspostulernormal
     *
     * @return integer
     */
    public function getCandidatspostulernormal()
    {
        return $this->candidatspostulernormal;
    }

    /**
     * Set plaquette
     *
     * @param integer $plaquette
     *
     * @return Statistiquesse
     */
    public function setPlaquette($plaquette)
    {
        $this->plaquette = $plaquette;

        return $this;
    }

    /**
     * Get plaquette
     *
     * @return integer
     */
    public function getPlaquette()
    {
        return $this->plaquette;
    }

    /**
     * Set bondecommande
     *
     * @param integer $bondecommande
     *
     * @return Statistiquesse
     */
    public function setBondecommande($bondecommande)
    {
        $this->bondecommande = $bondecommande;

        return $this;
    }

    /**
     * Get bondecommande
     *
     * @return integer
     */
    public function getBondecommande()
    {
        return $this->bondecommande;
    }

    /**
     * Set idSiteemploi
     *
     * @param integer $idSiteemploi
     *
     * @return Statistiquesse
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
