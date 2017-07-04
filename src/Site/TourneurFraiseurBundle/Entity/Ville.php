<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\Column(name="Nom_commune", type="string", length=38, nullable=true)
     */
    private $nomCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_postal", type="integer", nullable=true)
     */
    private $codePostal;

	/**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Departement")
     */
    private $departement;

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
     * Set nomCommune
     *
     * @param string $nomCommune
     *
     * @return Ville
     */
    public function setNomCommune($nomCommune)
    {
        $this->nomCommune = $nomCommune;

        return $this;
    }

    /**
     * Get nomCommune
     *
     * @return string
     */
    public function getNomCommune()
    {
        return $this->nomCommune;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Ville
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
	
	public function __toString() {
		try {
			return (string) $this->codePostal.' - '.$this->nomCommune;
		} catch (Exception $exception) {
			return '';
		}
	}

    /**
     * Set departement
     *
     * @param \OC\PlatformBundle\Entity\Departement $departement
     *
     * @return Ville
     */
    public function setDepartement(\OC\PlatformBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \OC\PlatformBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
