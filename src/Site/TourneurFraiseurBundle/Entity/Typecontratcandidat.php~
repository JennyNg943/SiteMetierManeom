<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecontratcandidat
 *
 * @ORM\Table(name="typecontratcandidat")
 * @ORM\Entity
 */
class Typecontratcandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TypeContratCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypecontratcandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TypeContrat", type="integer", nullable=false)
     */
    private $idTypecontrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=false)
     */
    private $idCandidat;



    /**
     * Get idTypecontratcandidat
     *
     * @return integer
     */
    public function getIdTypecontratcandidat()
    {
        return $this->idTypecontratcandidat;
    }

    /**
     * Set idTypecontrat
     *
     * @param integer $idTypecontrat
     *
     * @return Typecontratcandidat
     */
    public function setIdTypecontrat($idTypecontrat)
    {
        $this->idTypecontrat = $idTypecontrat;

        return $this;
    }

    /**
     * Get idTypecontrat
     *
     * @return integer
     */
    public function getIdTypecontrat()
    {
        return $this->idTypecontrat;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     *
     * @return Typecontratcandidat
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
}
