<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatcontact
 *
 * @ORM\Table(name="etatcontact")
 * @ORM\Entity
 */
class Etatcontact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_EtatContact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleContact", type="string", length=45, nullable=true)
     */
    private $intitulecontact;



    /**
     * Get idEtatcontact
     *
     * @return integer
     */
    public function getIdEtatcontact()
    {
        return $this->idEtatcontact;
    }

    /**
     * Set intitulecontact
     *
     * @param string $intitulecontact
     *
     * @return Etatcontact
     */
    public function setIntitulecontact($intitulecontact)
    {
        $this->intitulecontact = $intitulecontact;

        return $this;
    }

    /**
     * Get intitulecontact
     *
     * @return string
     */
    public function getIntitulecontact()
    {
        return $this->intitulecontact;
    }
}
