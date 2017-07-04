<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterEnregistrement
 *
 * @ORM\Table(name="newsletter_enregistrement")
 * @ORM\Entity
 */
class NewsletterEnregistrement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Enregistrement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterEnregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Signature", type="integer", nullable=false)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="NomMail", type="string", length=500, nullable=false)
     */
    private $nommail;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjetMail", type="string", length=500, nullable=false)
     */
    private $objetmail;

    /**
     * @var string
     *
     * @ORM\Column(name="CorpsMail", type="text", length=65535, nullable=false)
     */
    private $corpsmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreationMail", type="date", nullable=false)
     */
    private $datecreationmail = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_TypeContact", type="integer", nullable=false)
     */
    private $idNewsletterTypecontact;



    /**
     * Get idNewsletterEnregistrement
     *
     * @return integer
     */
    public function getIdNewsletterEnregistrement()
    {
        return $this->idNewsletterEnregistrement;
    }

    /**
     * Set signature
     *
     * @param integer $signature
     *
     * @return NewsletterEnregistrement
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return integer
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set nommail
     *
     * @param string $nommail
     *
     * @return NewsletterEnregistrement
     */
    public function setNommail($nommail)
    {
        $this->nommail = $nommail;

        return $this;
    }

    /**
     * Get nommail
     *
     * @return string
     */
    public function getNommail()
    {
        return $this->nommail;
    }

    /**
     * Set objetmail
     *
     * @param string $objetmail
     *
     * @return NewsletterEnregistrement
     */
    public function setObjetmail($objetmail)
    {
        $this->objetmail = $objetmail;

        return $this;
    }

    /**
     * Get objetmail
     *
     * @return string
     */
    public function getObjetmail()
    {
        return $this->objetmail;
    }

    /**
     * Set corpsmail
     *
     * @param string $corpsmail
     *
     * @return NewsletterEnregistrement
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

    /**
     * Set datecreationmail
     *
     * @param \DateTime $datecreationmail
     *
     * @return NewsletterEnregistrement
     */
    public function setDatecreationmail($datecreationmail)
    {
        $this->datecreationmail = $datecreationmail;

        return $this;
    }

    /**
     * Get datecreationmail
     *
     * @return \DateTime
     */
    public function getDatecreationmail()
    {
        return $this->datecreationmail;
    }

    /**
     * Set idNewsletterTypecontact
     *
     * @param integer $idNewsletterTypecontact
     *
     * @return NewsletterEnregistrement
     */
    public function setIdNewsletterTypecontact($idNewsletterTypecontact)
    {
        $this->idNewsletterTypecontact = $idNewsletterTypecontact;

        return $this;
    }

    /**
     * Get idNewsletterTypecontact
     *
     * @return integer
     */
    public function getIdNewsletterTypecontact()
    {
        return $this->idNewsletterTypecontact;
    }
}
