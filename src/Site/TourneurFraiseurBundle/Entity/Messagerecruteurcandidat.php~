<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerecruteurcandidat
 *
 * @ORM\Table(name="messagerecruteurcandidat")
 * @ORM\Entity
 */
class Messagerecruteurcandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_MessageRecruteurCandidat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessagerecruteurcandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="Objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Recruteur", type="integer", nullable=false)
     */
    private $idRecruteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sens", type="integer", nullable=false)
     */
    private $sens;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="date", nullable=false)
     */
    private $datecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Reponse", type="integer", nullable=false)
     */
    private $idReponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Annonce", type="integer", nullable=false)
     */
    private $idAnnonce;



    /**
     * Get idMessagerecruteurcandidat
     *
     * @return integer
     */
    public function getIdMessagerecruteurcandidat()
    {
        return $this->idMessagerecruteurcandidat;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Messagerecruteurcandidat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Messagerecruteurcandidat
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set idRecruteur
     *
     * @param integer $idRecruteur
     *
     * @return Messagerecruteurcandidat
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
     * @return Messagerecruteurcandidat
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
     * Set sens
     *
     * @param integer $sens
     *
     * @return Messagerecruteurcandidat
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return integer
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Messagerecruteurcandidat
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set idReponse
     *
     * @param integer $idReponse
     *
     * @return Messagerecruteurcandidat
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;

        return $this;
    }

    /**
     * Get idReponse
     *
     * @return integer
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set idAnnonce
     *
     * @param integer $idAnnonce
     *
     * @return Messagerecruteurcandidat
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return integer
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }
}
