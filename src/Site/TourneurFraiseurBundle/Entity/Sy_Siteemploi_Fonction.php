<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Siteemploi_Fonction
 *
 * 
 * @ORM\Entity
 */
class Sy_Siteemploi_Fonction
{
    /**
     * @ORM\Id
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi")
     */
    private $idSiteemploi;

    /**
     * @ORM\Id
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Fonction")
     */
    private $idFonction;



   

}
