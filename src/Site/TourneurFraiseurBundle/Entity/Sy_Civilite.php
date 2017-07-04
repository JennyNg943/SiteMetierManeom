<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Civilite
 *
 * @ORM\Table(name="Sy_civilite")
 * @ORM\Entity
 */
class Sy_Civilite
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
     * @ORM\Column(name="IntituleCivilite", type="string", length=255, nullable=false)
     */
    private $intitulecivilite;


    /**
     * Set intitulecivilite
     *
     * @param string $intitulecivilite
     *
     * @return Civilite
     */
    public function setIntitulecivilite($intitulecivilite)
    {
        $this->intitulecivilite = $intitulecivilite;

        return $this;
    }

    /**
     * Get intitulecivilite
     *
     * @return string
     */
    public function getIntitulecivilite()
    {
        return $this->intitulecivilite;
    }

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
	 * String representation of this object
	 * @return string
	*/
	public function __toString() {
		try {
			return (string) $this->intitulecivilite;
		} catch (Exception $exception) {
			return '';
		}
	}
}
