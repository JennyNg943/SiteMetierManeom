<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Premium
 *
 * @ORM\Table(name="Sy_Premium")
 * @ORM\Entity
 */
class Sy_Premium
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 * 
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Premium_Formule",cascade={"persist"})
     */
    private $idFormule;

	/**
     * @var date
     *
     * @ORM\Column(name="DateDebut", type="date", length=255, nullable=false)
     */
	private $dateDebut;
	
	/**
     * @var date
     *
     * @ORM\Column(name="DateFin", type="date", length=255, nullable=false)
     */
	private $dateFin;

   


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Sy_Premium
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Sy_Premium
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set idFormule
     *
     * @param \Site\TourneurFraiseurBundle\Entity\Sy_Premium_Formule $idFormule
     *
     * @return Sy_Premium
     */
    public function setIdFormule(\Site\TourneurFraiseurBundle\Entity\Sy_Premium_Formule $idFormule = null)
    {
        $this->idFormule = $idFormule;

        return $this;
    }

    /**
     * Get idFormule
     *
     * @return \Site\TourneurFraiseurBundle\Entity\Sy_Premium_Formule
     */
    public function getIdFormule()
    {
        return $this->idFormule;
    }
}
