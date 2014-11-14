<?php

namespace App\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 */
class Command
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
    private $club;


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
     * @return Command
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
     * Set club
     *
     * @param string $club
     * @return Command
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return string 
     */
    public function getClub()
    {
        return $this->club;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tims;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tims = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tims
     *
     * @param \App\FirstBundle\Entity\Tim $tims
     * @return Command
     */
    public function addTim(\App\FirstBundle\Entity\Tim $tims)
    {
        $this->tims[] = $tims;

        return $this;
    }

    /**
     * Remove tims
     *
     * @param \App\FirstBundle\Entity\Tim $tims
     */
    public function removeTim(\App\FirstBundle\Entity\Tim $tims)
    {
        $this->tims->removeElement($tims);
    }

    /**
     * Get tims
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTims()
    {
        return $this->tims;
    }
    /**
     * @var string
     */
    private $nametim;


    /**
     * Set nametim
     *
     * @param string $nametim
     * @return Command
     */
    public function setNametim($nametim)
    {
        $this->nametim = $nametim;

        return $this;
    }

    /**
     * Get nametim
     *
     * @return string 
     */
    public function getNametim()
    {
        return $this->nametim;
    }
}
