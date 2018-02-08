<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="Panier", indexes={@ORM\Index(name="idProduit", columns={"idProduit"}), @ORM\Index(name="idMagasin", columns={"idMagasin"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumn(name="idMagasin", referencedColumnName="idMagasin")
     */
    private $idMagasin;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     */
    private $idProduit;



    /**
     * Get idpanier
     *
     * @return integer
     */
    public function getIdpanier()
    {
        return $this->idpanier;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Panier
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set cin
     *
     * @param \ZanimauxBundle\Entity\User $cin
     *
     * @return Panier
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

    /**
     * Set idMagasin
     *
     * @param \ZanimauxBundle\Entity\Magasin $idMagasin
     *
     * @return Panier
     */
    public function setIdMagasin(\ZanimauxBundle\Entity\Magasin $idMagasin = null)
    {
        $this->idMagasin = $idMagasin;

        return $this;
    }

    /**
     * Get idMagasin
     *
     * @return \ZanimauxBundle\Entity\Magasin
     */
    public function getIdMagasin()
    {
        return $this->idMagasin;
    }

    /**
     * Set idProduit
     *
     * @param \ZanimauxBundle\Entity\Produit $idProduit
     *
     * @return Panier
     */
    public function setIdProduit(\ZanimauxBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \ZanimauxBundle\Entity\Produit
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}
