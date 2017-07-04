<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreActualite", type="text", length=65535, nullable=false)
     */
    private $titreactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="LienActualite", type="text", length=65535, nullable=false)
     */
    private $lienactualite;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionCourte", type="text", length=65535, nullable=false)
     */
    private $descriptioncourte;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionLongue", type="text", length=65535, nullable=false)
     */
    private $descriptionlongue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateModification", type="datetime", nullable=false)
     */
    private $datemodification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinPublication", type="datetime", nullable=false)
     */
    private $datefinpublication;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Redacteur", type="integer", nullable=false)
     */
    private $idRedacteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagEnLigne", type="integer", nullable=false)
     */
    private $flagenligne;



    /**
     * Get idActualite
     *
     * @return integer
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Set titreactualite
     *
     * @param string $titreactualite
     *
     * @return Actualite
     */
    public function setTitreactualite($titreactualite)
    {
        $this->titreactualite = $titreactualite;

        return $this;
    }

    /**
     * Get titreactualite
     *
     * @return string
     */
    public function getTitreactualite()
    {
        return $this->titreactualite;
    }

    /**
     * Set lienactualite
     *
     * @param string $lienactualite
     *
     * @return Actualite
     */
    public function setLienactualite($lienactualite)
    {
        $this->lienactualite = $lienactualite;

        return $this;
    }

    /**
     * Get lienactualite
     *
     * @return string
     */
    public function getLienactualite()
    {
        return $this->lienactualite;
    }

    /**
     * Set descriptioncourte
     *
     * @param string $descriptioncourte
     *
     * @return Actualite
     */
    public function setDescriptioncourte($descriptioncourte)
    {
        $this->descriptioncourte = $descriptioncourte;

        return $this;
    }

    /**
     * Get descriptioncourte
     *
     * @return string
     */
    public function getDescriptioncourte()
    {
        return $this->descriptioncourte;
    }

    /**
     * Set descriptionlongue
     *
     * @param string $descriptionlongue
     *
     * @return Actualite
     */
    public function setDescriptionlongue($descriptionlongue)
    {
        $this->descriptionlongue = $descriptionlongue;

        return $this;
    }

    /**
     * Get descriptionlongue
     *
     * @return string
     */
    public function getDescriptionlongue()
    {
        return $this->descriptionlongue;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Actualite
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
     * Set datemodification
     *
     * @param \DateTime $datemodification
     *
     * @return Actualite
     */
    public function setDatemodification($datemodification)
    {
        $this->datemodification = $datemodification;

        return $this;
    }

    /**
     * Get datemodification
     *
     * @return \DateTime
     */
    public function getDatemodification()
    {
        return $this->datemodification;
    }

    /**
     * Set datefinpublication
     *
     * @param \DateTime $datefinpublication
     *
     * @return Actualite
     */
    public function setDatefinpublication($datefinpublication)
    {
        $this->datefinpublication = $datefinpublication;

        return $this;
    }

    /**
     * Get datefinpublication
     *
     * @return \DateTime
     */
    public function getDatefinpublication()
    {
        return $this->datefinpublication;
    }

    /**
     * Set idRedacteur
     *
     * @param integer $idRedacteur
     *
     * @return Actualite
     */
    public function setIdRedacteur($idRedacteur)
    {
        $this->idRedacteur = $idRedacteur;

        return $this;
    }

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
     * Set flagenligne
     *
     * @param integer $flagenligne
     *
     * @return Actualite
     */
    public function setFlagenligne($flagenligne)
    {
        $this->flagenligne = $flagenligne;

        return $this;
    }

    /**
     * Get flagenligne
     *
     * @return integer
     */
    public function getFlagenligne()
    {
        return $this->flagenligne;
    }
}
