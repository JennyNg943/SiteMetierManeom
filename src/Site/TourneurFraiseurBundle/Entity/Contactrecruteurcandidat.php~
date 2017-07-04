<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactrecruteurcandidat
 *
 * @ORM\Table(name="contactrecruteurcandidat")
 * @ORM\Entity
 */
class Contactrecruteurcandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ContactRecruteurCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContactrecruteurcandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recruteur", type="integer", nullable=true)
     */
    private $idRecruteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=true)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_EtatContact", type="integer", nullable=true)
     */
    private $idEtatcontact;



    /**
     * Get idContactrecruteurcandidat
     *
     * @return integer
     */
    public function getIdContactrecruteurcandidat()
    {
        return $this->idContactrecruteurcandidat;
    }

    /**
     * Set idRecruteur
     *
     * @param integer $idRecruteur
     *
     * @return Contactrecruteurcandidat
     */
    public function setIdRecruteur($idRecruteur)
    {
        $this->idRecruteur = $idRecruteur;

        return $this;
    }

    /**
     * Get idRecruteur
     *
     * @return integer
     */
    public function getIdRecruteur()
    {
        return $this->idRecruteur;
    }

    /**
     * Set idCandidat
     *
     * @param integer $idCandidat
     *
     * @return Contactrecruteurcandidat
     */
    public function setIdCandidat($idCandidat)
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }

    /**
     * Get idCandidat
     *
     * @return integer
     */
    public function getIdCandidat()
    {
        return $this->idCandidat;
    }

    /**
     * Set idEtatcontact
     *
     * @param integer $idEtatcontact
     *
     * @return Contactrecruteurcandidat
     */
    public function setIdEtatcontact($idEtatcontact)
    {
        $this->idEtatcontact = $idEtatcontact;

        return $this;
    }

    /**
     * Get idEtatcontact
     *
     * @return integer
     */
    public function getIdEtatcontact()
    {
        return $this->idEtatcontact;
    }
}
