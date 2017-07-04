<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveausouhaite
 *
 * @ORM\Table(name="niveausouhaite")
 * @ORM\Entity
 */
class Niveausouhaite
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
     * @ORM\Column(name="IntituleNiveauSouhaite", type="string", length=255, nullable=true)
     */
    private $intituleniveausouhaite;

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagClassement", type="integer", nullable=false)
     */
    private $flagclassement;



    /**
     * Get idNiveausouhaite
     *
     * @return integer
     */
    public function getIdNiveausouhaite()
    {
        return $this->idNiveausouhaite;
    }

    /**
     * Set intituleniveausouhaite
     *
     * @param string $intituleniveausouhaite
     *
     * @return Niveausouhaite
     */
    public function setIntituleniveausouhaite($intituleniveausouhaite)
    {
        $this->intituleniveausouhaite = $intituleniveausouhaite;

        return $this;
    }

    /**
     * Get intituleniveausouhaite
     *
     * @return string
     */
    public function getIntituleniveausouhaite()
    {
        return $this->intituleniveausouhaite;
    }

    /**
     * Set flagclassement
     *
     * @param integer $flagclassement
     *
     * @return Niveausouhaite
     */
    public function setFlagclassement($flagclassement)
    {
        $this->flagclassement = $flagclassement;

        return $this;
    }

    /**
     * Get flagclassement
     *
     * @return integer
     */
    public function getFlagclassement()
    {
        return $this->flagclassement;
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
			return (string) $this->intituleniveausouhaite;
		} catch (Exception $exception) {
			return '';
		}
	}
}
