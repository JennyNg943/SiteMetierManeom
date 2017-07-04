<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Region", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleRegion", type="string", length=255, nullable=false)
     */
    private $intituleregion;



    /**
     * Get idRegion
     *
     * @return integer
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set intituleregion
     *
     * @param string $intituleregion
     *
     * @return Region
     */
    public function setIntituleregion($intituleregion)
    {
        $this->intituleregion = $intituleregion;

        return $this;
    }

    /**
     * Get intituleregion
     *
     * @return string
     */
    public function getIntituleregion()
    {
        return $this->intituleregion;
    }
}
