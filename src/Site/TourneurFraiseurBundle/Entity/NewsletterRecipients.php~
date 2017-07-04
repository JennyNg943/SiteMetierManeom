<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterRecipients
 *
 * @ORM\Table(name="newsletter_recipients", indexes={@ORM\Index(name="Id_Mail", columns={"Id_Newsletter_Enregistrement"})})
 * @ORM\Entity
 */
class NewsletterRecipients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Recipients", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterRecipients;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Recepteur", type="string", length=50, nullable=false)
     */
    private $idRecepteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Enregistrement", type="integer", nullable=false)
     */
    private $idNewsletterEnregistrement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnvoi", type="date", nullable=true)
     */
    private $dateenvoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="State", type="integer", nullable=false)
     */
    private $state = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_TypeContact", type="integer", nullable=false)
     */
    private $idNewsletterTypecontact;



    /**
     * Get idNewsletterRecipients
     *
     * @return integer
     */
    public function getIdNewsletterRecipients()
    {
        return $this->idNewsletterRecipients;
    }

    /**
     * Set idRecepteur
     *
     * @param string $idRecepteur
     *
     * @return NewsletterRecipients
     */
    public function setIdRecepteur($idRecepteur)
    {
        $this->idRecepteur = $idRecepteur;

        return $this;
    }

    /**
     * Get idRecepteur
     *
     * @return string
     */
    public function getIdRecepteur()
    {
        return $this->idRecepteur;
    }

    /**
     * Set idNewsletterEnregistrement
     *
     * @param integer $idNewsletterEnregistrement
     *
     * @return NewsletterRecipients
     */
    public function setIdNewsletterEnregistrement($idNewsletterEnregistrement)
    {
        $this->idNewsletterEnregistrement = $idNewsletterEnregistrement;

        return $this;
    }

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
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return NewsletterRecipients
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return NewsletterRecipients
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set idNewsletterTypecontact
     *
     * @param integer $idNewsletterTypecontact
     *
     * @return NewsletterRecipients
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
