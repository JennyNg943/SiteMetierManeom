<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nbadresseip
 *
 * @ORM\Table(name="nbadresseip")
 * @ORM\Entity
 */
class Nbadresseip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AdresseIp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresseip;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Ip", type="string", length=255, nullable=false)
     */
    private $adresseIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateVisite", type="date", nullable=true)
     */
    private $datevisite;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Url", type="string", length=255, nullable=true)
     */
    private $adresseUrl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Robot", type="boolean", nullable=false)
     */
    private $robot;



    /**
     * Get idAdresseip
     *
     * @return integer
     */
    public function getIdAdresseip()
    {
        return $this->idAdresseip;
    }

    /**
     * Set adresseIp
     *
     * @param string $adresseIp
     *
     * @return Nbadresseip
     */
    public function setAdresseIp($adresseIp)
    {
        $this->adresseIp = $adresseIp;

        return $this;
    }

    /**
     * Get adresseIp
     *
     * @return string
     */
    public function getAdresseIp()
    {
        return $this->adresseIp;
    }

    /**
     * Set datevisite
     *
     * @param \DateTime $datevisite
     *
     * @return Nbadresseip
     */
    public function setDatevisite($datevisite)
    {
        $this->datevisite = $datevisite;

        return $this;
    }

    /**
     * Get datevisite
     *
     * @return \DateTime
     */
    public function getDatevisite()
    {
        return $this->datevisite;
    }

    /**
     * Set adresseUrl
     *
     * @param string $adresseUrl
     *
     * @return Nbadresseip
     */
    public function setAdresseUrl($adresseUrl)
    {
        $this->adresseUrl = $adresseUrl;

        return $this;
    }

    /**
     * Get adresseUrl
     *
     * @return string
     */
    public function getAdresseUrl()
    {
        return $this->adresseUrl;
    }

    /**
     * Set robot
     *
     * @param boolean $robot
     *
     * @return Nbadresseip
     */
    public function setRobot($robot)
    {
        $this->robot = $robot;

        return $this;
    }

    /**
     * Get robot
     *
     * @return boolean
     */
    public function getRobot()
    {
        return $this->robot;
    }
}
