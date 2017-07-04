<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scoresecteur
 *
 * @ORM\Table(name="scoresecteur")
 * @ORM\Entity
 */
class Scoresecteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Secteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $secteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score = '0';



    /**
     * Get secteur
     *
     * @return integer
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Scoresecteur
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }
}
