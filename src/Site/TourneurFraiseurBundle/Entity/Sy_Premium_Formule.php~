<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Premium_Formule
 *
 * @ORM\Table(name="Sy_Premium_Formule")
 * @ORM\Entity
 */
class Sy_Premium_Formule
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Intitule", type="string", length=255, nullable=false)
     */
    private $intitule;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Sy_Premium_Formule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
    
}
