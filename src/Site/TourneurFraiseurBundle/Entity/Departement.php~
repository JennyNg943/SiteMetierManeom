<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Site\TourneurFraiseurBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="num", type="string", length=11, nullable=false)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=255, nullable=false)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="ChefLieu", type="string", length=255, nullable=false)
     */
    private $cheflieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Region", type="integer", nullable=true)
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="DepartementLimitrophe", type="string", length=100, nullable=false)
     */
    private $departementlimitrophe;



    /**
     * Get idDepartement
     *
     * @return integer
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Set num
     *
     * @param string $num
     *
     * @return Departement
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set dept
     *
     * @param string $dept
     *
     * @return Departement
     */
    public function setDept($dept)
    {
        $this->dept = $dept;

        return $this;
    }

    /**
     * Get dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set cheflieu
     *
     * @param string $cheflieu
     *
     * @return Departement
     */
    public function setCheflieu($cheflieu)
    {
        $this->cheflieu = $cheflieu;

        return $this;
    }

    /**
     * Get cheflieu
     *
     * @return string
     */
    public function getCheflieu()
    {
        return $this->cheflieu;
    }

    /**
     * Set idRegion
     *
     * @param integer $idRegion
     *
     * @return Departement
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;

        return $this;
    }

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
     * Set departementlimitrophe
     *
     * @param string $departementlimitrophe
     *
     * @return Departement
     */
    public function setDepartementlimitrophe($departementlimitrophe)
    {
        $this->departementlimitrophe = $departementlimitrophe;

        return $this;
    }

    /**
     * Get departementlimitrophe
     *
     * @return string
     */
    public function getDepartementlimitrophe()
    {
        return $this->departementlimitrophe;
    }
	
	/**
	 * String representation of this object
	 * @return string
	*/
	public function __toString() {
		try {
			return (string) $this->num.' - '.$this->dept;
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
