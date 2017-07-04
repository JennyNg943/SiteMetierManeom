<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rejetannonce
 *
 * @ORM\Table(name="rejetannonce")
 * @ORM\Entity
 */
class Rejetannonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_RejetAnnonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRejetannonce;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleRejetAdmin", type="string", length=255, nullable=false)
     */
    private $intitulerejetadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="IntituleRejetRecruteur", type="string", length=255, nullable=false)
     */
    private $intitulerejetrecruteur;

    /**
     * @var string
     *
     * @ORM\Column(name="CorpsMail", type="text", length=65535, nullable=false)
     */
    private $corpsmail;



    /**
     * Get idRejetannonce
     *
     * @return integer
     */
    public function getIdRejetannonce()
    {
        return $this->idRejetannonce;
    }

    /**
     * Set intitulerejetadmin
     *
     * @param string $intitulerejetadmin
     *
     * @return Rejetannonce
     */
    public function setIntitulerejetadmin($intitulerejetadmin)
    {
        $this->intitulerejetadmin = $intitulerejetadmin;

        return $this;
    }

    /**
     * Get intitulerejetadmin
     *
     * @return string
     */
    public function getIntitulerejetadmin()
    {
        return $this->intitulerejetadmin;
    }

    /**
     * Set intitulerejetrecruteur
     *
     * @param string $intitulerejetrecruteur
     *
     * @return Rejetannonce
     */
    public function setIntitulerejetrecruteur($intitulerejetrecruteur)
    {
        $this->intitulerejetrecruteur = $intitulerejetrecruteur;

        return $this;
    }

    /**
     * Get intitulerejetrecruteur
     *
     * @return string
     */
    public function getIntitulerejetrecruteur()
    {
        return $this->intitulerejetrecruteur;
    }

    /**
     * Set corpsmail
     *
     * @param string $corpsmail
     *
     * @return Rejetannonce
     */
    public function setCorpsmail($corpsmail)
    {
        $this->corpsmail = $corpsmail;

        return $this;
    }

    /**
     * Get corpsmail
     *
     * @return string
     */
    public function getCorpsmail()
    {
        return $this->corpsmail;
    }
}
