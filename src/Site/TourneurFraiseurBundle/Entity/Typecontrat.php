<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecontrat
 *
 * @ORM\Table(name="typecontrat")
 * @ORM\Entity
 */
class Typecontrat
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
     * @ORM\Column(name="IntituleTypeContrat", type="string", length=255, nullable=false)
     */
    private $intituletypecontrat;



    /**
     * Get idTypecontrat
     *
     * @return integer
     */
    public function getIdTypecontrat()
    {
        return $this->idTypecontrat;
    }

    /**
     * Set intituletypecontrat
     *
     * @param string $intituletypecontrat
     *
     * @return Typecontrat
     */
    public function setIntituletypecontrat($intituletypecontrat)
    {
        $this->intituletypecontrat = $intituletypecontrat;

        return $this;
    }

    /**
     * Get intituletypecontrat
     *
     * @return string
     */
    public function getIntituletypecontrat()
    {
        return $this->intituletypecontrat;
    }
	
	
	/**
	 * String representation of this object
	 * @return string
	*/
	public function __toString() {
		try {
			return (string) $this->intituletypecontrat;
		} catch (Exception $exception) {
			return '';
		}
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
}
