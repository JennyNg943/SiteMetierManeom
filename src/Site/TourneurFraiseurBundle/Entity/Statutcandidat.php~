<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statutcandidat
 *
 * @ORM\Table(name="statutcandidat")
 * @ORM\Entity
 */
class Statutcandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_StatutCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatutcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleStatutCandidat", type="string", length=255, nullable=false)
     */
    private $intitulestatutcandidat;



    /**
     * Get idStatutcandidat
     *
     * @return integer
     */
    public function getIdStatutcandidat()
    {
        return $this->idStatutcandidat;
    }

    /**
     * Set intitulestatutcandidat
     *
     * @param string $intitulestatutcandidat
     *
     * @return Statutcandidat
     */
    public function setIntitulestatutcandidat($intitulestatutcandidat)
    {
        $this->intitulestatutcandidat = $intitulestatutcandidat;

        return $this;
    }

    /**
     * Get intitulestatutcandidat
     *
     * @return string
     */
    public function getIntitulestatutcandidat()
    {
        return $this->intitulestatutcandidat;
    }
}
