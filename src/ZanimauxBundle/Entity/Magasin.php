<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magasin
 *
 * @ORM\Table(name="Magasin")
 * @ORM\Entity
 */
class Magasin
{
    /**
     * @var string
     *
     * @ORM\Column(name="numRC", type="string", length=20, nullable=false)
     */
    private $numrc;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMagasin", type="string", length=20, nullable=false)
     */
    private $nommagasin;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbProduit", type="integer", nullable=true)
     */
    private $nbproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMagasin", type="string", length=20, nullable=false)
     */
    private $adressemagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="villeMagasin", type="string", length=20, nullable=false)
     */
    private $villemagasin;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostaleMagasin", type="integer", nullable=false)
     */
    private $codepostalemagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="photoMAgasin", type="blob", length=65535, nullable=true)
     */
    private $photomagasin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMagasin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMagasin;



    /**
     * Set numrc
     *
     * @param string $numrc
     *
     * @return Magasin
     */
    public function setNumrc($numrc)
    {
        $this->numrc = $numrc;

        return $this;
    }

    /**
     * Get numrc
     *
     * @return string
     */
    public function getNumrc()
    {
        return $this->numrc;
    }

    /**
     * Set nommagasin
     *
     * @param string $nommagasin
     *
     * @return Magasin
     */
    public function setNommagasin($nommagasin)
    {
        $this->nommagasin = $nommagasin;

        return $this;
    }

    /**
     * Get nommagasin
     *
     * @return string
     */
    public function getNommagasin()
    {
        return $this->nommagasin;
    }

    /**
     * Set nbproduit
     *
     * @param integer $nbproduit
     *
     * @return Magasin
     */
    public function setNbproduit($nbproduit)
    {
        $this->nbproduit = $nbproduit;

        return $this;
    }

    /**
     * Get nbproduit
     *
     * @return integer
     */
    public function getNbproduit()
    {
        return $this->nbproduit;
    }

    /**
     * Set adressemagasin
     *
     * @param string $adressemagasin
     *
     * @return Magasin
     */
    public function setAdressemagasin($adressemagasin)
    {
        $this->adressemagasin = $adressemagasin;

        return $this;
    }

    /**
     * Get adressemagasin
     *
     * @return string
     */
    public function getAdressemagasin()
    {
        return $this->adressemagasin;
    }

    /**
     * Set villemagasin
     *
     * @param string $villemagasin
     *
     * @return Magasin
     */
    public function setVillemagasin($villemagasin)
    {
        $this->villemagasin = $villemagasin;

        return $this;
    }

    /**
     * Get villemagasin
     *
     * @return string
     */
    public function getVillemagasin()
    {
        return $this->villemagasin;
    }

    /**
     * Set codepostalemagasin
     *
     * @param integer $codepostalemagasin
     *
     * @return Magasin
     */
    public function setCodepostalemagasin($codepostalemagasin)
    {
        $this->codepostalemagasin = $codepostalemagasin;

        return $this;
    }

    /**
     * Get codepostalemagasin
     *
     * @return integer
     */
    public function getCodepostalemagasin()
    {
        return $this->codepostalemagasin;
    }

    /**
     * Set photomagasin
     *
     * @param string $photomagasin
     *
     * @return Magasin
     */
    public function setPhotomagasin($photomagasin)
    {
        $this->photomagasin = $photomagasin;

        return $this;
    }

    /**
     * Get photomagasin
     *
     * @return string
     */
    public function getPhotomagasin()
    {
        return $this->photomagasin;
    }

    /**
     * Get idMagasin
     *
     * @return integer
     */
    public function getIdMagasin()
    {
        return $this->idMagasin;
    }

    /**
     * Set cin
     *
     * @param \ZanimauxBundle\Entity\User $cin
     *
     * @return Magasin
     */
    public function setCin(\ZanimauxBundle\Entity\User $cin = null)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return \ZanimauxBundle\Entity\User
     */
    public function getCin()
    {
        return $this->cin;
    }
}
