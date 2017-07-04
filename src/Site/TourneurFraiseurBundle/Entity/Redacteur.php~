<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redacteur
 *
 * @ORM\Table(name="redacteur")
 * @ORM\Entity
 */
class Redacteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Redacteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRedacteur;

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
     * @ORM\Column(name="Droit", type="integer", nullable=false)
     */
    private $droit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagActif", type="integer", nullable=false)
     */
    private $flagactif;

    /**
     * @var string
     *
     * @ORM\Column(name="Pwd", type="string", length=255, nullable=false)
     */
    private $pwd;



    /**
     * Get idRedacteur
     *
     * @return integer
     */
    public function getIdRedacteur()
    {
        return $this->idRedacteur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Redacteur
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
     * @return Redacteur
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
     * @return Redacteur
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
     * Set droit
     *
     * @param integer $droit
     *
     * @return Redacteur
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return integer
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Redacteur
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
     * Set flagactif
     *
     * @param integer $flagactif
     *
     * @return Redacteur
     */
    public function setFlagactif($flagactif)
    {
        $this->flagactif = $flagactif;

        return $this;
    }

    /**
     * Get flagactif
     *
     * @return integer
     */
    public function getFlagactif()
    {
        return $this->flagactif;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Redacteur
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
}
