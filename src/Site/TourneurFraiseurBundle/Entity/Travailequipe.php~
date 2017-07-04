<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travailequipe
 *
 * @ORM\Table(name="travailequipe")
 * @ORM\Entity
 */
class Travailequipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_TravailEquipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTravailequipe;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleTravailEquipe", type="string", length=255, nullable=true)
     */
    private $intituletravailequipe;



    /**
     * Get idTravailequipe
     *
     * @return integer
     */
    public function getIdTravailequipe()
    {
        return $this->idTravailequipe;
    }

    /**
     * Set intituletravailequipe
     *
     * @param string $intituletravailequipe
     *
     * @return Travailequipe
     */
    public function setIntituletravailequipe($intituletravailequipe)
    {
        $this->intituletravailequipe = $intituletravailequipe;

        return $this;
    }

    /**
     * Get intituletravailequipe
     *
     * @return string
     */
    public function getIntituletravailequipe()
    {
        return $this->intituletravailequipe;
    }
}
