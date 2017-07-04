<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encadrement
 *
 * @ORM\Table(name="encadrement")
 * @ORM\Entity
 */
class Encadrement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Encadrement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEncadrement;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleEncadrement", type="string", length=45, nullable=true)
     */
    private $intituleencadrement;



    /**
     * Get idEncadrement
     *
     * @return integer
     */
    public function getIdEncadrement()
    {
        return $this->idEncadrement;
    }

    /**
     * Set intituleencadrement
     *
     * @param string $intituleencadrement
     *
     * @return Encadrement
     */
    public function setIntituleencadrement($intituleencadrement)
    {
        $this->intituleencadrement = $intituleencadrement;

        return $this;
    }

    /**
     * Get intituleencadrement
     *
     * @return string
     */
    public function getIntituleencadrement()
    {
        return $this->intituleencadrement;
    }
}
