<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity
 */
class Ecole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Ecole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEcole;

    /**
     * @var string
     *
     * @ORM\Column(name="NomEcole", type="string", length=255, nullable=false)
     */
    private $nomecole;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_CiviliteContactPrincipal", type="integer", nullable=false)
     */
    private $idCivilitecontactprincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="NomContactPrincipal", type="string", length=255, nullable=false)
     */
    private $nomcontactprincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomContactPrincipal", type="string", length=255, nullable=false)
     */
    private $prenomcontactprincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="MailContactPrincipal", type="string", length=255, nullable=false)
     */
    private $mailcontactprincipal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_CiviliteContactRecrutement", type="integer", nullable=false)
     */
    private $idCivilitecontactrecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="NomContactRecrutement", type="string", length=255, nullable=false)
     */
    private $nomcontactrecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomContactRecrutement", type="string", length=255, nullable=false)
     */
    private $prenomcontactrecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="MailContactRecrutement", type="string", length=255, nullable=false)
     */
    private $mailcontactrecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseEcole", type="string", length=255, nullable=false)
     */
    private $adresseecole;

    /**
     * @var string
     *
     * @ORM\Column(name="CpEcole", type="string", length=255, nullable=false)
     */
    private $cpecole;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleEcole", type="string", length=255, nullable=false)
     */
    private $villeecole;

    /**
     * @var string
     *
     * @ORM\Column(name="TelEcole", type="string", length=255, nullable=false)
     */
    private $telecole;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255, nullable=false)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormationAdulte", type="integer", nullable=false)
     */
    private $formationadulte;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormationInitiale", type="integer", nullable=false)
     */
    private $formationinitiale;

    /**
     * @var string
     *
     * @ORM\Column(name="LogoEcole", type="string", length=255, nullable=false)
     */
    private $logoecole;

    /**
     * @var string
     *
     * @ORM\Column(name="SiteInternetEcole", type="string", length=255, nullable=false)
     */
    private $siteinternetecole;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=255, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="FormationProposee", type="text", length=65535, nullable=false)
     */
    private $formationproposee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Newsletter", type="boolean", nullable=true)
     */
    private $newsletter = '1';



    /**
     * Get idEcole
     *
     * @return integer
     */
    public function getIdEcole()
    {
        return $this->idEcole;
    }

    /**
     * Set nomecole
     *
     * @param string $nomecole
     *
     * @return Ecole
     */
    public function setNomecole($nomecole)
    {
        $this->nomecole = $nomecole;

        return $this;
    }

    /**
     * Get nomecole
     *
     * @return string
     */
    public function getNomecole()
    {
        return $this->nomecole;
    }

    /**
     * Set idCivilitecontactprincipal
     *
     * @param integer $idCivilitecontactprincipal
     *
     * @return Ecole
     */
    public function setIdCivilitecontactprincipal($idCivilitecontactprincipal)
    {
        $this->idCivilitecontactprincipal = $idCivilitecontactprincipal;

        return $this;
    }

    /**
     * Get idCivilitecontactprincipal
     *
     * @return integer
     */
    public function getIdCivilitecontactprincipal()
    {
        return $this->idCivilitecontactprincipal;
    }

    /**
     * Set nomcontactprincipal
     *
     * @param string $nomcontactprincipal
     *
     * @return Ecole
     */
    public function setNomcontactprincipal($nomcontactprincipal)
    {
        $this->nomcontactprincipal = $nomcontactprincipal;

        return $this;
    }

    /**
     * Get nomcontactprincipal
     *
     * @return string
     */
    public function getNomcontactprincipal()
    {
        return $this->nomcontactprincipal;
    }

    /**
     * Set prenomcontactprincipal
     *
     * @param string $prenomcontactprincipal
     *
     * @return Ecole
     */
    public function setPrenomcontactprincipal($prenomcontactprincipal)
    {
        $this->prenomcontactprincipal = $prenomcontactprincipal;

        return $this;
    }

    /**
     * Get prenomcontactprincipal
     *
     * @return string
     */
    public function getPrenomcontactprincipal()
    {
        return $this->prenomcontactprincipal;
    }

    /**
     * Set mailcontactprincipal
     *
     * @param string $mailcontactprincipal
     *
     * @return Ecole
     */
    public function setMailcontactprincipal($mailcontactprincipal)
    {
        $this->mailcontactprincipal = $mailcontactprincipal;

        return $this;
    }

    /**
     * Get mailcontactprincipal
     *
     * @return string
     */
    public function getMailcontactprincipal()
    {
        return $this->mailcontactprincipal;
    }

    /**
     * Set idCivilitecontactrecrutement
     *
     * @param integer $idCivilitecontactrecrutement
     *
     * @return Ecole
     */
    public function setIdCivilitecontactrecrutement($idCivilitecontactrecrutement)
    {
        $this->idCivilitecontactrecrutement = $idCivilitecontactrecrutement;

        return $this;
    }

    /**
     * Get idCivilitecontactrecrutement
     *
     * @return integer
     */
    public function getIdCivilitecontactrecrutement()
    {
        return $this->idCivilitecontactrecrutement;
    }

    /**
     * Set nomcontactrecrutement
     *
     * @param string $nomcontactrecrutement
     *
     * @return Ecole
     */
    public function setNomcontactrecrutement($nomcontactrecrutement)
    {
        $this->nomcontactrecrutement = $nomcontactrecrutement;

        return $this;
    }

    /**
     * Get nomcontactrecrutement
     *
     * @return string
     */
    public function getNomcontactrecrutement()
    {
        return $this->nomcontactrecrutement;
    }

    /**
     * Set prenomcontactrecrutement
     *
     * @param string $prenomcontactrecrutement
     *
     * @return Ecole
     */
    public function setPrenomcontactrecrutement($prenomcontactrecrutement)
    {
        $this->prenomcontactrecrutement = $prenomcontactrecrutement;

        return $this;
    }

    /**
     * Get prenomcontactrecrutement
     *
     * @return string
     */
    public function getPrenomcontactrecrutement()
    {
        return $this->prenomcontactrecrutement;
    }

    /**
     * Set mailcontactrecrutement
     *
     * @param string $mailcontactrecrutement
     *
     * @return Ecole
     */
    public function setMailcontactrecrutement($mailcontactrecrutement)
    {
        $this->mailcontactrecrutement = $mailcontactrecrutement;

        return $this;
    }

    /**
     * Get mailcontactrecrutement
     *
     * @return string
     */
    public function getMailcontactrecrutement()
    {
        return $this->mailcontactrecrutement;
    }

    /**
     * Set adresseecole
     *
     * @param string $adresseecole
     *
     * @return Ecole
     */
    public function setAdresseecole($adresseecole)
    {
        $this->adresseecole = $adresseecole;

        return $this;
    }

    /**
     * Get adresseecole
     *
     * @return string
     */
    public function getAdresseecole()
    {
        return $this->adresseecole;
    }

    /**
     * Set cpecole
     *
     * @param string $cpecole
     *
     * @return Ecole
     */
    public function setCpecole($cpecole)
    {
        $this->cpecole = $cpecole;

        return $this;
    }

    /**
     * Get cpecole
     *
     * @return string
     */
    public function getCpecole()
    {
        return $this->cpecole;
    }

    /**
     * Set villeecole
     *
     * @param string $villeecole
     *
     * @return Ecole
     */
    public function setVilleecole($villeecole)
    {
        $this->villeecole = $villeecole;

        return $this;
    }

    /**
     * Get villeecole
     *
     * @return string
     */
    public function getVilleecole()
    {
        return $this->villeecole;
    }

    /**
     * Set telecole
     *
     * @param string $telecole
     *
     * @return Ecole
     */
    public function setTelecole($telecole)
    {
        $this->telecole = $telecole;

        return $this;
    }

    /**
     * Get telecole
     *
     * @return string
     */
    public function getTelecole()
    {
        return $this->telecole;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Ecole
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set formationadulte
     *
     * @param integer $formationadulte
     *
     * @return Ecole
     */
    public function setFormationadulte($formationadulte)
    {
        $this->formationadulte = $formationadulte;

        return $this;
    }

    /**
     * Get formationadulte
     *
     * @return integer
     */
    public function getFormationadulte()
    {
        return $this->formationadulte;
    }

    /**
     * Set formationinitiale
     *
     * @param integer $formationinitiale
     *
     * @return Ecole
     */
    public function setFormationinitiale($formationinitiale)
    {
        $this->formationinitiale = $formationinitiale;

        return $this;
    }

    /**
     * Get formationinitiale
     *
     * @return integer
     */
    public function getFormationinitiale()
    {
        return $this->formationinitiale;
    }

    /**
     * Set logoecole
     *
     * @param string $logoecole
     *
     * @return Ecole
     */
    public function setLogoecole($logoecole)
    {
        $this->logoecole = $logoecole;

        return $this;
    }

    /**
     * Get logoecole
     *
     * @return string
     */
    public function getLogoecole()
    {
        return $this->logoecole;
    }

    /**
     * Set siteinternetecole
     *
     * @param string $siteinternetecole
     *
     * @return Ecole
     */
    public function setSiteinternetecole($siteinternetecole)
    {
        $this->siteinternetecole = $siteinternetecole;

        return $this;
    }

    /**
     * Get siteinternetecole
     *
     * @return string
     */
    public function getSiteinternetecole()
    {
        return $this->siteinternetecole;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Ecole
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set formationproposee
     *
     * @param string $formationproposee
     *
     * @return Ecole
     */
    public function setFormationproposee($formationproposee)
    {
        $this->formationproposee = $formationproposee;

        return $this;
    }

    /**
     * Get formationproposee
     *
     * @return string
     */
    public function getFormationproposee()
    {
        return $this->formationproposee;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Ecole
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
}
