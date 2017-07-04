<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listerobots
 *
 * @ORM\Table(name="listerobots")
 * @ORM\Entity
 */
class Listerobots
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Robot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRobot;

    /**
     * @var string
     *
     * @ORM\Column(name="Ip_Robot", type="string", length=50, nullable=false)
     */
    private $ipRobot;



    /**
     * Get idRobot
     *
     * @return integer
     */
    public function getIdRobot()
    {
        return $this->idRobot;
    }

    /**
     * Set ipRobot
     *
     * @param string $ipRobot
     *
     * @return Listerobots
     */
    public function setIpRobot($ipRobot)
    {
        $this->ipRobot = $ipRobot;

        return $this;
    }

    /**
     * Get ipRobot
     *
     * @return string
     */
    public function getIpRobot()
    {
        return $this->ipRobot;
    }
}
