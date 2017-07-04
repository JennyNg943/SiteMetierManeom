<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecoleniveauformation
 *
 * @ORM\Table(name="ecoleniveauformation")
 * @ORM\Entity
 */
class Ecoleniveauformation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_EcoleNiveauFormation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEcoleniveauformation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Ecole", type="integer", nullable=false)
     */
    private $idEcole;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_NiveauFormation", type="integer", nullable=false)
     */
    private $idNiveauformation;



    /**
     * Get idEcoleniveauformation
     *
     * @return integer
     */
    public function getIdEcoleniveauformation()
    {
        return $this->idEcoleniveauformation;
    }

    /**
     * Set idEcole
     *
     * @param integer $idEcole
     *
     * @return Ecoleniveauformation
     */
    public function setIdEcole($idEcole)
    {
        $this->idEcole = $idEcole;

        return $this;
    }

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
     * Set idNiveauformation
     *
     * @param integer $idNiveauformation
     *
     * @return Ecoleniveauformation
     */
    public function setIdNiveauformation($idNiveauformation)
    {
        $this->idNiveauformation = $idNiveauformation;

        return $this;
    }

    /**
     * Get idNiveauformation
     *
     * @return integer
     */
    public function getIdNiveauformation()
    {
        return $this->idNiveauformation;
    }
}
