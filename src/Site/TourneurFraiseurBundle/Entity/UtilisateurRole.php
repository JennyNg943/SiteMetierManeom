<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurRole
 * 
 * @ORM\Entity(repositoryClass="Site\UserBundle\Repository\UserRepository")
 * @ORM\Table(name="utilisateur_role")
 */
class UtilisateurRole 
{ 
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 * 
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return UtilisateurRole
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
	
	/**
	 * String representation of this object
	 * @return string
	*/
	public function __toString() {
		try {
			return (string) $this->nom;
		} catch (Exception $exception) {
			return '';
		}
	}
}
