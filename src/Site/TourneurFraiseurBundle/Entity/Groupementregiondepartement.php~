<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupementregiondepartement
 *
 * @ORM\Table(name="groupementregiondepartement")
 * @ORM\Entity
 */
class Groupementregiondepartement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_GroupementRegionDepartement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupementregiondepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleRegion", type="string", length=255, nullable=false)
     */
    private $intituleregion;

    /**
     * @var string
     *
     * @ORM\Column(name="NumDepartement", type="string", length=255, nullable=false)
     */
    private $numdepartement;



    /**
     * Get idGroupementregiondepartement
     *
     * @return integer
     */
    public function getIdGroupementregiondepartement()
    {
        return $this->idGroupementregiondepartement;
    }

    /**
     * Set intituleregion
     *
     * @param string $intituleregion
     *
     * @return Groupementregiondepartement
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

    /**
     * Set numdepartement
     *
     * @param string $numdepartement
     *
     * @return Groupementregiondepartement
     */
    public function setNumdepartement($numdepartement)
    {
        $this->numdepartement = $numdepartement;

        return $this;
    }

    /**
     * Get numdepartement
     *
     * @return string
     */
    public function getNumdepartement()
    {
        return $this->numdepartement;
    }
}
