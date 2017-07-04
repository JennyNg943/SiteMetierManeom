<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterPiecesjointes
 *
 * @ORM\Table(name="newsletter_piecesjointes", indexes={@ORM\Index(name="Id_Newsletter", columns={"Id_Newsletter_Enregistrement"})})
 * @ORM\Entity
 */
class NewsletterPiecesjointes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_PiecesJointes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterPiecesjointes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Newsletter_Enregistrement", type="integer", nullable=false)
     */
    private $idNewsletterEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="PathFile", type="string", length=500, nullable=false)
     */
    private $pathfile;

    /**
     * @var string
     *
     * @ORM\Column(name="Mime", type="string", length=100, nullable=false)
     */
    private $mime;



    /**
     * Get idNewsletterPiecesjointes
     *
     * @return integer
     */
    public function getIdNewsletterPiecesjointes()
    {
        return $this->idNewsletterPiecesjointes;
    }

    /**
     * Set idNewsletterEnregistrement
     *
     * @param integer $idNewsletterEnregistrement
     *
     * @return NewsletterPiecesjointes
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
     * Set pathfile
     *
     * @param string $pathfile
     *
     * @return NewsletterPiecesjointes
     */
    public function setPathfile($pathfile)
    {
        $this->pathfile = $pathfile;

        return $this;
    }

    /**
     * Get pathfile
     *
     * @return string
     */
    public function getPathfile()
    {
        return $this->pathfile;
    }

    /**
     * Set mime
     *
     * @param string $mime
     *
     * @return NewsletterPiecesjointes
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }
}
