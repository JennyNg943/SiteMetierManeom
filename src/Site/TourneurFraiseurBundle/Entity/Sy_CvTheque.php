<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_CvTheque
 *
 * @ORM\Table(name="Sy_cvtheque")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\CandidatRepository")
 * 
**/
class Sy_CvTheque 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255, nullable=false)
     */
    private $mail;
	
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Ville")
	 * @ORM\JoinColumn(nullable=false)
	 * 
     */
    private $codePostal;

	/**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $idSite;

	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Annonce")
     */
    private $annonce;
	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Annonce")
     */
    private $sy_annonce;
	
	/**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Fonction")
     */
	private $fonction;
	

    

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annonce = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Sy_CvTheque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Sy_CvTheque
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Sy_CvTheque
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set codePostal
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Ville $codePostal
     *
     * @return Sy_CvTheque
     */
    public function setCodePostal(\Site\TourneurFraiseurBundle\Entity\Ville $codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Ville
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set idSite
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSite
     *
     * @return Sy_CvTheque
     */
    public function setIdSite(\Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi $idSite)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * Add annonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Annonce $annonce
     *
     * @return Sy_CvTheque
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
     * Add fonction
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Fonction $fonction
     *
     * @return Sy_CvTheque
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
     * Add syAnnonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce
     *
     * @return Sy_CvTheque
     */
    public function addSyAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce)
    {
        $this->sy_annonce[] = $syAnnonce;

        return $this;
    }

    /**
     * Remove syAnnonce
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce
     */
    public function removeSyAnnonce(\Site\TourneurFraiseurBundle\Entity\Sy_Annonce $syAnnonce)
    {
        $this->sy_annonce->removeElement($syAnnonce);
    }

    /**
     * Get syAnnonce
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSyAnnonce()
    {
        return $this->sy_annonce;
    }
}
