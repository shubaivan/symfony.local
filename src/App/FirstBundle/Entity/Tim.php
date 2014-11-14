<?php

namespace App\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tim
 */
class Tim
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $trainer;

    /**
     * @var string
     */
    private $stadium;

    /**
     * @var string
     */
    private $captain;

    /**
     * @var \App\FirstBundle\Entity\Command
     */
    private $command;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tim
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set trainer
     *
     * @param string $trainer
     * @return Tim
     */
    public function setTrainer($trainer)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get trainer
     *
     * @return string 
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set stadium
     *
     * @param string $stadium
     * @return Tim
     */
    public function setStadium($stadium)
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return string 
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * Set captain
     *
     * @param string $captain
     * @return Tim
     */
    public function setCaptain($captain)
    {
        $this->captain = $captain;

        return $this;
    }

    /**
     * Get captain
     *
     * @return string 
     */
    public function getCaptain()
    {
        return $this->captain;
    }

    /**
     * Set command
     *
     * @param \App\FirstBundle\Entity\Command $command
     * @return Tim
     */
    public function setCommand(\App\FirstBundle\Entity\Command $command = null)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return \App\FirstBundle\Entity\Command 
     */
    public function getCommand()
    {
        return $this->command;
    }
}
