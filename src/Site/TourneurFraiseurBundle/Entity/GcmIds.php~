<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcmIds
 *
 * @ORM\Table(name="gcm_ids")
 * @ORM\Entity
 */
class GcmIds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Candidat", type="integer", nullable=false)
     */
    private $idCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="gcm_token", type="text", length=65535, nullable=false)
     */
    private $gcmToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';



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
     * Set idCandidat
     *
     * @param integer $idCandidat
     *
     * @return GcmIds
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
     * Set gcmToken
     *
     * @param string $gcmToken
     *
     * @return GcmIds
     */
    public function setGcmToken($gcmToken)
    {
        $this->gcmToken = $gcmToken;

        return $this;
    }

    /**
     * Get gcmToken
     *
     * @return string
     */
    public function getGcmToken()
    {
        return $this->gcmToken;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return GcmIds
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
