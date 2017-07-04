<?php
// src/Site/UserBundle/Entity/User.php
 
namespace Site\UserBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
 
/**
 * User
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Site\UserBundle\Repository\UserRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type2", type="string")
 * @ORM\DiscriminatorMap({"Candidat" = "Sy_Candidature", "Recruteur" = "Sy_Recruteur","Employeur" = "Sy_Employeur"})
 *
 */
abstract class User extends BaseUser 
{
	
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	
	/**
	 * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\UtilisateurRole")
	 * @ORM\JoinColumn(nullable=true)
     */
	protected $type;
	
	
	public function __construct()
	{
	parent::__construct();

	}
	
	public function setEmail($email){
		parent::setEmail($email);
		$this->setUsername($email);
	}

    

    /**
     * Set type
     *
     * @param \Site\TourneurFraiseurBundle\Entity\UtilisateurRole $type
     *
     * @return User
     */
    public function setType(\Site\TourneurFraiseurBundle\Entity\UtilisateurRole $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Site\TourneurFraiseurBundle\Entity\UtilisateurRole
     */
    public function getType()
    {
        return $this->type;
    }
}
