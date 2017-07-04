<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mobilite
 *
 * @ORM\Table(name="mobilite")
 * @ORM\Entity
 */
class Mobilite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Mobilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMobilite;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleMobilite", type="string", length=255, nullable=true)
     */
    private $intitulemobilite;



    /**
     * Get idMobilite
     *
     * @return integer
     */
    public function getIdMobilite()
    {
        return $this->idMobilite;
    }

    /**
     * Set intitulemobilite
     *
     * @param string $intitulemobilite
     *
     * @return Mobilite
     */
    public function setIntitulemobilite($intitulemobilite)
    {
        $this->intitulemobilite = $intitulemobilite;

        return $this;
    }

    /**
     * Get intitulemobilite
     *
     * @return string
     */
    public function getIntitulemobilite()
    {
        return $this->intitulemobilite;
    }
}
