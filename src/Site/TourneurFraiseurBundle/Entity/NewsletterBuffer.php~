<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterBuffer
 *
 * @ORM\Table(name="newsletter_buffer")
 * @ORM\Entity
 */
class NewsletterBuffer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Buffer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterBuffer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Enregistrement", type="integer", nullable=false)
     */
    private $idNewsletterEnregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Max", type="integer", nullable=false)
     */
    private $max;

    /**
     * @var integer
     *
     * @ORM\Column(name="Counter", type="integer", nullable=false)
     */
    private $counter;

    /**
     * @var integer
     *
     * @ORM\Column(name="State", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_TypeContact", type="integer", nullable=false)
     */
    private $idNewsletterTypecontact;



    /**
     * Get idNewsletterBuffer
     *
     * @return integer
     */
    public function getIdNewsletterBuffer()
    {
        return $this->idNewsletterBuffer;
    }

    /**
     * Set idNewsletterEnregistrement
     *
     * @param integer $idNewsletterEnregistrement
     *
     * @return NewsletterBuffer
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
     * Set max
     *
     * @param integer $max
     *
     * @return NewsletterBuffer
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set counter
     *
     * @param integer $counter
     *
     * @return NewsletterBuffer
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return integer
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return NewsletterBuffer
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
     * @return NewsletterBuffer
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
