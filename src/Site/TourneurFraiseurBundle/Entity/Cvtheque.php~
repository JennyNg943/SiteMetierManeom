<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cvtheque
 *
 * @ORM\Table(name="cvtheque")
 * @ORM\Entity
 */
class Cvtheque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Cv-theque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCvTheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="TextCv", type="text", length=65535, nullable=false)
     */
    private $textcv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateIndexation", type="date", nullable=false)
     */
    private $dateindexation;



    /**
     * Get idCvTheque
     *
     * @return integer
     */
    public function getIdCvTheque()
    {
        return $this->idCvTheque;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     *
     * @return Cvtheque
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
     * Set textcv
     *
     * @param string $textcv
     *
     * @return Cvtheque
     */
    public function setTextcv($textcv)
    {
        $this->textcv = $textcv;

        return $this;
    }

    /**
     * Get textcv
     *
     * @return string
     */
    public function getTextcv()
    {
        return $this->textcv;
    }

    /**
     * Set dateindexation
     *
     * @param \DateTime $dateindexation
     *
     * @return Cvtheque
     */
    public function setDateindexation($dateindexation)
    {
        $this->dateindexation = $dateindexation;

        return $this;
    }

    /**
     * Get dateindexation
     *
     * @return \DateTime
     */
    public function getDateindexation()
    {
        return $this->dateindexation;
    }
}
