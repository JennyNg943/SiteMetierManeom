<?php

namespace Site\UserBundle\Entity;

use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use Site\UserBundle\Entity\User;

/**
 * Sy_Employeur
 *
 * @ORM\Table(name="Sy_Employeur")
 * @ORM\Entity
 * @UniqueEntity(fields = "username", targetClass = "Site\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Site\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Sy_Employeur extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 * 
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=255, nullable=false)
     */
    private $societe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_CiviliteContactComm", type="integer", nullable=false)
     */
    private $idCivilitecontactcomm;

    /**
     * @var string
     *
     * @ORM\Column(name="NomContactComm", type="string", length=255, nullable=false)
     */
    private $nomcontactcomm;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomContactComm", type="string", length=255, nullable=false)
     */
    private $prenomcontactcomm;

    

    /**
     * @var string
     *
     * @ORM\Column(name="Cp", type="string", length=255, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255, nullable=false)
     */
    private $tel;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMaj", type="date", nullable=false)
     */
    private $datemaj;


    /**
     * @var integer
     *
     * @ORM\Column(name="Newsletter", type="integer", nullable=true)
     */
    private $newsletter;
	
	/**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Annonce", mappedBy="idEmployeur")
	 * 
     */
	private $annonce;
	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_CvTheque")
	 * 
     */
	private $candidat;
	
	/**
     * @var integer
     * 
     * @ORM\OneToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Premium")
     */
	private $premium;
	

	/**
     * Constructor
     */
    public function __construct()
    {
		$this->datecreation = new \DateTime('now');
		$this->datemaj = new \DateTime('now');
    }
	
    

   

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Sy_Employeur
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set idCivilitecontactcomm
     *
     * @param integer $idCivilitecontactcomm
     *
     * @return Sy_Employeur
     */
    public function setIdCivilitecontactcomm($idCivilitecontactcomm)
    {
        $this->idCivilitecontactcomm = $idCivilitecontactcomm;

        return $this;
    }

    /**
     * Get idCivilitecontactcomm
     *
     * @return integer
     */
    public function getIdCivilitecontactcomm()
    {
        return $this->idCivilitecontactcomm;
    }

    /**
     * Set nomcontactcomm
     *
     * @param string $nomcontactcomm
     *
     * @return Sy_Employeur
     */
    public function setNomcontactcomm($nomcontactcomm)
    {
        $this->nomcontactcomm = $nomcontactcomm;

        return $this;
    }

    /**
     * Get nomcontactcomm
     *
     * @return string
     */
    public function getNomcontactcomm()
    {
        return $this->nomcontactcomm;
    }

    /**
     * Set prenomcontactcomm
     *
     * @param string $prenomcontactcomm
     *
     * @return Sy_Employeur
     */
    public function setPrenomcontactcomm($prenomcontactcomm)
    {
        $this->prenomcontactcomm = $prenomcontactcomm;

        return $this;
    }

    /**
     * Get prenomcontactcomm
     *
     * @return string
     */
    public function getPrenomcontactcomm()
    {
        return $this->prenomcontactcomm;
    }

    /**
     * Set idCivilitecontactsourcing
     *
     * @param integer $idCivilitecontactsourcing
     *
     * @return Sy_Employeur
     */
    public function setIdCivilitecontactsourcing($idCivilitecontactsourcing)
    {
        $this->idCivilitecontactsourcing = $idCivilitecontactsourcing;

        return $this;
    }

    /**
     * Get idCivilitecontactsourcing
     *
     * @return integer
     */
    public function getIdCivilitecontactsourcing()
    {
        return $this->idCivilitecontactsourcing;
    }

    /**
     * Set nomcontactsourcing
     *
     * @param string $nomcontactsourcing
     *
     * @return Sy_Employeur
     */
    public function setNomcontactsourcing($nomcontactsourcing)
    {
        $this->nomcontactsourcing = $nomcontactsourcing;

        return $this;
    }

    /**
     * Get nomcontactsourcing
     *
     * @return string
     */
    public function getNomcontactsourcing()
    {
        return $this->nomcontactsourcing;
    }

    /**
     * Set prenomcontactsourcing
     *
     * @param string $prenomcontactsourcing
     *
     * @return Sy_Employeur
     */
    public function setPrenomcontactsourcing($prenomcontactsourcing)
    {
        $this->prenomcontactsourcing = $prenomcontactsourcing;

        return $this;
    }

    /**
     * Get prenomcontactsourcing
     *
     * @return string
     */
    public function getPrenomcontactsourcing()
    {
        return $this->prenomcontactsourcing;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Sy_Employeur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Sy_Employeur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Sy_Employeur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sy_Employeur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Sy_Employeur
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Sy_Employeur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set blacklist
     *
     * @param integer $blacklist
     *
     * @return Sy_Employeur
     */
    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    /**
     * Get blacklist
     *
     * @return integer
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Sy_Employeur
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
     * Set datemaj
     *
     * @param \DateTime $datemaj
     *
     * @return Sy_Employeur
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Sy_Employeur
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set idTyperecruteur
     *
     * @param integer $idTyperecruteur
     *
     * @return Sy_Employeur
     */
    public function setIdTyperecruteur($idTyperecruteur)
    {
        $this->idTyperecruteur = $idTyperecruteur;

        return $this;
    }

    /**
     * Get idTyperecruteur
     *
     * @return integer
     */
    public function getIdTyperecruteur()
    {
        return $this->idTyperecruteur;
    }

    /**
     * Set newsletter
     *
     * @param integer $newsletter
     *
     * @return Sy_Employeur
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
     * Set idRecruteurformule
     *
     * @param integer $idRecruteurformule
     *
     * @return Sy_Employeur
     */
    public function setIdRecruteurformule($idRecruteurformule)
    {
        $this->idRecruteurformule = $idRecruteurformule;

        return $this;
    }

    /**
     * Get idRecruteurformule
     *
     * @return integer
     */
    public function getIdRecruteurformule()
    {
        return $this->idRecruteurformule;
    }

    /**
     * Set user
     *
     * @param \Site\UserBundle\Entity\User $user
     *
     * @return Sy_Employeur
     */
    public function setUser(\Site\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Site\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $annonce
     *
     * @return Sy_Employeur
     */
    public function addAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $annonce)
    {
        $this->annonce[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $annonce
     */
    public function removeAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $annonce)
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
     * Add candidat
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_CvTheque $candidat
     *
     * @return Sy_Employeur
     */
    public function addCandidat(\Site\TourneurFraiseurBundle\Entity\Sy_CvTheque $candidat)
    {
        $this->candidat[] = $candidat;

        return $this;
    }

    /**
     * Remove candidat
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_CvTheque $candidat
     */
    public function removeCandidat(\Site\TourneurFraiseurBundle\Entity\Sy_CvTheque $candidat)
    {
        $this->candidat->removeElement($candidat);
    }

    /**
     * Get candidat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set type
     *
     * @param \Site\TourneurFraiseurBundle\Entity\UtilisateurRole $type
     *
     * @return Sy_Employeur
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
	
	/**
     * Set premium
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Premium $premium
     *
     * @return Sy_Recruteur
     */
    public function setPremium(\Site\TourneurFraiseurBundle\Entity\Sy_Premium $premium = null)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Premium
     */
    public function getPremium()
    {
        return $this->premium;
    }
}
