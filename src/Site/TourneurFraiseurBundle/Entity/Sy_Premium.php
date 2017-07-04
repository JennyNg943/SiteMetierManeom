<?php

namespace Site\TourneurFraiseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sy_Premium
 *
 * @ORM\Table(name="Sy_Premium")
 * @ORM\Entity
 */
class Sy_Premium
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
	 * 
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Site\TourneurFraiseurBundle\Entity\Sy_Premium_Formule",cascade={"persist"})
     */
    private $idFormule;

	/**
     * @var date
     *
     * @ORM\Column(name="DateDebut", type="date", length=255, nullable=false)
     */
	private $dateDebut;
	
	/**
     * @var date
     *
     * @ORM\Column(name="DateFin", type="date", length=255, nullable=false)
     */
	private $dateFin;

   

}
