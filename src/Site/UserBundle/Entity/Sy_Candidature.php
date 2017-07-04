<?php

namespace Site\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Site\UserBundle\Entity\User;

/**
 * Sy_Candidature
 *
 * @ORM\Table(name="Sy_Candidature")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\CandidatRepository")
 * @UniqueEntity(fields = "username", targetClass = "Site\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Site\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Sy_Candidature extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Civilite")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCandidat", type="string", length=255, nullable=false)
     */
    private $nomcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomCandidat", type="string", length=255, nullable=false)
     */
    private $prenomcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseCandidat", type="string", length=255, nullable=true)
     */
    private $adressecandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="Cp", type="string", length=255, nullable=false)
     */
    private $CP;
	
    /**
     * @var string
     *
     * @ORM\Column(name="Departement", type="string", length=255, nullable=true)
     */
    private $Departement;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleCandidat", type="string", length=255, nullable=true)
     */
    private $villecandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="TelFixeCandidat", type="string", length=255, nullable=true)
     */
    private $telfixecandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="TelPortCandidat", type="string", length=255, nullable=false)
     */
    private $telportcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="MailCandidat", type="string", length=255, nullable=true)
     */
    private $mailcandidat;

    /**
     * @ORM\Column(type="string",nullable = true)
     *
     * 
     * 
     */
    private $cvcandidat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=255, nullable=true)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Newsletter", type="integer", nullable=true)
     */
    private $newsletter;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anonymat", type="integer", nullable=true)
     */
    private $anonymat;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagStatut", type="integer", nullable=true)
     */
    private $flagstatut;

    /**
     * @var string
     *
     * @ORM\Column(name="NumCandidat", type="string", length=255, nullable=true)
     */
    private $numcandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="CvIndexe", type="integer", nullable=true)
     */
    private $cvindexe = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMaj", type="date", nullable=true)
     */
    private $datemaj;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNewsletter", type="date", nullable=true)
     */
    private $datenewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AncienSE", type="string", length=255, nullable=true)
     */
    private $idAnciense;

	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Annonce")
	 * @ORM\JoinColumn(nullable=true)
     */
	private $Sy_annonce;
	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Annonce")
	 * @ORM\JoinColumn(nullable=true)
     */
	private $annonce;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=255, nullable=true)
     */
	private $commentaire;
	
	/**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi")
	 * @ORM\JoinColumn(nullable=true)
     */
	private $site;
	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Fonction")
	 * @ORM\JoinColumn(nullable=true)
     */
	private $fonction;
	
	
	/**
     * Constructor
     */
    public function __construct()
    {
		$this->datecreation = new \DateTime('now');
		$this->datemaj = new \DateTime('now');
    }
	
	
    

    

    /**
     * Set nomcandidat
     *
     * @param string $nomcandidat
     *
     * @return Sy_Candidature
     */
    public function setNomcandidat($nomcandidat)
    {
        $this->nomcandidat = $nomcandidat;

        return $this;
    }

    /**
     * Get nomcandidat
     *
     * @return string
     */
    public function getNomcandidat()
    {
        return $this->nomcandidat;
    }

    /**
     * Set prenomcandidat
     *
     * @param string $prenomcandidat
     *
     * @return Sy_Candidature
     */
    public function setPrenomcandidat($prenomcandidat)
    {
        $this->prenomcandidat = $prenomcandidat;

        return $this;
    }

    /**
     * Get prenomcandidat
     *
     * @return string
     */
    public function getPrenomcandidat()
    {
        return $this->prenomcandidat;
    }

    /**
     * Set adressecandidat
     *
     * @param string $adressecandidat
     *
     * @return Sy_Candidature
     */
    public function setAdressecandidat($adressecandidat)
    {
        $this->adressecandidat = $adressecandidat;

        return $this;
    }

    /**
     * Get adressecandidat
     *
     * @return string
     */
    public function getAdressecandidat()
    {
        return $this->adressecandidat;
    }

    /**
     * Set cP
     *
     * @param string $cP
     *
     * @return Sy_Candidature
     */
    public function setCP($cP)
    {
        $this->CP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Sy_Candidature
     */
    public function setDepartement($departement)
    {
        $this->Departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->Departement;
    }

    /**
     * Set villecandidat
     *
     * @param string $villecandidat
     *
     * @return Sy_Candidature
     */
    public function setVillecandidat($villecandidat)
    {
        $this->villecandidat = $villecandidat;

        return $this;
    }

    /**
     * Get villecandidat
     *
     * @return string
     */
    public function getVillecandidat()
    {
        return $this->villecandidat;
    }

    /**
     * Set telfixecandidat
     *
     * @param string $telfixecandidat
     *
     * @return Sy_Candidature
     */
    public function setTelfixecandidat($telfixecandidat)
    {
        $this->telfixecandidat = $telfixecandidat;

        return $this;
    }

    /**
     * Get telfixecandidat
     *
     * @return string
     */
    public function getTelfixecandidat()
    {
        return $this->telfixecandidat;
    }

    /**
     * Set telportcandidat
     *
     * @param string $telportcandidat
     *
     * @return Sy_Candidature
     */
    public function setTelportcandidat($telportcandidat)
    {
        $this->telportcandidat = $telportcandidat;

        return $this;
    }

    /**
     * Get telportcandidat
     *
     * @return string
     */
    public function getTelportcandidat()
    {
        return $this->telportcandidat;
    }

    /**
     * Set mailcandidat
     *
     * @param string $mailcandidat
     *
     * @return Sy_Candidature
     */
    public function setMailcandidat($mailcandidat)
    {
        $this->mailcandidat = $mailcandidat;

        return $this;
    }

    /**
     * Get mailcandidat
     *
     * @return string
     */
    public function getMailcandidat()
    {
        return $this->mailcandidat;
    }

    /**
     * Set cvcandidat
     *
     * @param string $cvcandidat
     *
     * @return Sy_Candidature
     */
    public function setCvcandidat($cvcandidat)
    {
        $this->cvcandidat = $cvcandidat;

        return $this;
    }

    /**
     * Get cvcandidat
     *
     * @return string
     */
    public function getCvcandidat()
    {
        return $this->cvcandidat;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Sy_Candidature
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Sy_Candidature
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Sy_Candidature
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set newsletter
     *
     * @param integer $newsletter
     *
     * @return Sy_Candidature
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return integer
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set anonymat
     *
     * @param integer $anonymat
     *
     * @return Sy_Candidature
     */
    public function setAnonymat($anonymat)
    {
        $this->anonymat = $anonymat;

        return $this;
    }

    /**
     * Get anonymat
     *
     * @return integer
     */
    public function getAnonymat()
    {
        return $this->anonymat;
    }

    /**
     * Set flagstatut
     *
     * @param integer $flagstatut
     *
     * @return Sy_Candidature
     */
    public function setFlagstatut($flagstatut)
    {
        $this->flagstatut = $flagstatut;

        return $this;
    }

    /**
     * Get flagstatut
     *
     * @return integer
     */
    public function getFlagstatut()
    {
        return $this->flagstatut;
    }

    /**
     * Set numcandidat
     *
     * @param string $numcandidat
     *
     * @return Sy_Candidature
     */
    public function setNumcandidat($numcandidat)
    {
        $this->numcandidat = $numcandidat;

        return $this;
    }

    /**
     * Get numcandidat
     *
     * @return string
     */
    public function getNumcandidat()
    {
        return $this->numcandidat;
    }

    /**
     * Set cvindexe
     *
     * @param integer $cvindexe
     *
     * @return Sy_Candidature
     */
    public function setCvindexe($cvindexe)
    {
        $this->cvindexe = $cvindexe;

        return $this;
    }

    /**
     * Get cvindexe
     *
     * @return integer
     */
    public function getCvindexe()
    {
        return $this->cvindexe;
    }

    /**
     * Set datemaj
     *
     * @param \DateTime $datemaj
     *
     * @return Sy_Candidature
     */
    public function setDatemaj($datemaj)
    {
        $this->datemaj = $datemaj;

        return $this;
    }

    /**
     * Get datemaj
     *
     * @return \DateTime
     */
    public function getDatemaj()
    {
        return $this->datemaj;
    }

    /**
     * Set datenewsletter
     *
     * @param \DateTime $datenewsletter
     *
     * @return Sy_Candidature
     */
    public function setDatenewsletter($datenewsletter)
    {
        $this->datenewsletter = $datenewsletter;

        return $this;
    }

    /**
     * Get datenewsletter
     *
     * @return \DateTime
     */
    public function getDatenewsletter()
    {
        return $this->datenewsletter;
    }

    /**
     * Set idAnciense
     *
     * @param string $idAnciense
     *
     * @return Sy_Candidature
     */
    public function setIdAnciense($idAnciense)
    {
        $this->idAnciense = $idAnciense;

        return $this;
    }

    /**
     * Get idAnciense
     *
     * @return string
     */
    public function getIdAnciense()
    {
        return $this->idAnciense;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Sy_Candidature
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set idCivilite
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Civilite $idCivilite
     *
     * @return Sy_Candidature
     */
    public function setIdCivilite(\Site\TourneurFraiseurBundle\Entity\Sy_Civilite $idCivilite)
    {
        $this->idCivilite = $idCivilite;

        return $this;
    }

    /**
     * Get idCivilite
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Civilite
     */
    public function getIdCivilite()
    {
        return $this->idCivilite;
    }

    /**
     * Add syAnnonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce
     *
     * @return Sy_Candidature
     */
    public function addSyAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce)
    {
        $this->Sy_annonce[] = $syAnnonce;

        return $this;
    }

    /**
     * Remove syAnnonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce
     */
    public function removeSyAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce)
    {
        $this->Sy_annonce->removeElement($syAnnonce);
    }

    /**
     * Get syAnnonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSyAnnonce()
    {
        return $this->Sy_annonce;
    }

    /**
     * Add annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Annonce $annonce
     *
     * @return Sy_Candidature
     */
    public function addAnnonce(\Site\TourneurFraiseurBundle\Entity\Annonce $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\Site\TourneurFraiseurBundle\Entity\Annonce $annonce)
    {
        $this->annonce->removeElement($annonce);
    }

    /**
     * Get annonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set site
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $site
     *
     * @return Sy_Candidature
     */
    public function setSite(\Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add fonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction
     *
     * @return Sy_Candidature
     */
    public function addFonction(\Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction)
    {
        $this->fonction[] = $fonction;

        return $this;
    }

    /**
     * Remove fonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction
     */
    public function removeFonction(\Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction)
    {
        $this->fonction->removeElement($fonction);
    }

    /**
     * Get fonction
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set type
     *
     * @param \Site\TourneurFraiseurBundle\Entity\UtilisateurRole $type
     *
     * @return Sy_Candidature
     */
    public function setType(\Site\TourneurFraiseurBundle\Entity\UtilisateurRole $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Site\TourneurFraiseurBundle\Entity\UtilisateurRole
     */
    public function getType()
    {
        return $this->type;
    }
}
