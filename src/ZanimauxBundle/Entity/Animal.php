<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="Animal")
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAnimal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanimal;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAnimal", type="string", length=255, nullable=false)
     */
    private $nomanimal;

    /**
     * @var string
     *
     * @ORM\Column(name="photoAnimal", type="blob", length=65535, nullable=false)
     */
    private $photoanimal;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=200, nullable=false)
     */
    private $race;



    /**
     * Get idanimal
     *
     * @return integer
     */
    public function getIdanimal()
    {
        return $this->idanimal;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Animal
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Animal
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set nomanimal
     *
     * @param string $nomanimal
     *
     * @return Animal
     */
    public function setNomanimal($nomanimal)
    {
        $this->nomanimal = $nomanimal;

        return $this;
    }

    /**
     * Get nomanimal
     *
     * @return string
     */
    public function getNomanimal()
    {
        return $this->nomanimal;
    }

    /**
     * Set photoanimal
     *
     * @param string $photoanimal
     *
     * @return Animal
     */
    public function setPhotoanimal($photoanimal)
    {
        $this->photoanimal = $photoanimal;

        return $this;
    }

    /**
     * Get photoanimal
     *
     * @return string
     */
    public function getPhotoanimal()
    {
        return $this->photoanimal;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Animal
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Animal
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }
}
