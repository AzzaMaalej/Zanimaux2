<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refuge
 *
 * @ORM\Table(name="Refuge")
 * @ORM\Entity
 */
class Refuge
{
    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatriculation;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="cin", referencedColumnName="cin")
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRefuge", type="string", length=20, nullable=false)
     */
    private $nomrefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRefuge", type="string", length=200, nullable=false)
     */
    private $emailrefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephoneRefuge", type="integer", nullable=false)
     */
    private $telephonerefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="faxRefuge", type="integer", nullable=false)
     */
    private $faxrefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseRefuge", type="string", length=200, nullable=false)
     */
    private $adresserefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostaleRefuge", type="integer", nullable=false)
     */
    private $codepostalerefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernement", type="string", length=20, nullable=false)
     */
    private $gouvernement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chat", type="boolean", nullable=false)
     */
    private $chat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chien", type="boolean", nullable=false)
     */
    private $chien;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rongeur", type="boolean", nullable=false)
     */
    private $rongeur;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=20, nullable=false)
     */
    private $autre;



    /**
     * Get immatriculation
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set nomrefuge
     *
     * @param string $nomrefuge
     *
     * @return Refuge
     */
    public function setNomrefuge($nomrefuge)
    {
        $this->nomrefuge = $nomrefuge;

        return $this;
    }

    /**
     * Get nomrefuge
     *
     * @return string
     */
    public function getNomrefuge()
    {
        return $this->nomrefuge;
    }

    /**
     * Set emailrefuge
     *
     * @param string $emailrefuge
     *
     * @return Refuge
     */
    public function setEmailrefuge($emailrefuge)
    {
        $this->emailrefuge = $emailrefuge;

        return $this;
    }

    /**
     * Get emailrefuge
     *
     * @return string
     */
    public function getEmailrefuge()
    {
        return $this->emailrefuge;
    }

    /**
     * Set telephonerefuge
     *
     * @param integer $telephonerefuge
     *
     * @return Refuge
     */
    public function setTelephonerefuge($telephonerefuge)
    {
        $this->telephonerefuge = $telephonerefuge;

        return $this;
    }

    /**
     * Get telephonerefuge
     *
     * @return integer
     */
    public function getTelephonerefuge()
    {
        return $this->telephonerefuge;
    }

    /**
     * Set faxrefuge
     *
     * @param integer $faxrefuge
     *
     * @return Refuge
     */
    public function setFaxrefuge($faxrefuge)
    {
        $this->faxrefuge = $faxrefuge;

        return $this;
    }

    /**
     * Get faxrefuge
     *
     * @return integer
     */
    public function getFaxrefuge()
    {
        return $this->faxrefuge;
    }

    /**
     * Set adresserefuge
     *
     * @param string $adresserefuge
     *
     * @return Refuge
     */
    public function setAdresserefuge($adresserefuge)
    {
        $this->adresserefuge = $adresserefuge;

        return $this;
    }

    /**
     * Get adresserefuge
     *
     * @return string
     */
    public function getAdresserefuge()
    {
        return $this->adresserefuge;
    }

    /**
     * Set codepostalerefuge
     *
     * @param integer $codepostalerefuge
     *
     * @return Refuge
     */
    public function setCodepostalerefuge($codepostalerefuge)
    {
        $this->codepostalerefuge = $codepostalerefuge;

        return $this;
    }

    /**
     * Get codepostalerefuge
     *
     * @return integer
     */
    public function getCodepostalerefuge()
    {
        return $this->codepostalerefuge;
    }

    /**
     * Set gouvernement
     *
     * @param string $gouvernement
     *
     * @return Refuge
     */
    public function setGouvernement($gouvernement)
    {
        $this->gouvernement = $gouvernement;

        return $this;
    }

    /**
     * Get gouvernement
     *
     * @return string
     */
    public function getGouvernement()
    {
        return $this->gouvernement;
    }

    /**
     * Set chat
     *
     * @param boolean $chat
     *
     * @return Refuge
     */
    public function setChat($chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * Get chat
     *
     * @return boolean
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Set chien
     *
     * @param boolean $chien
     *
     * @return Refuge
     */
    public function setChien($chien)
    {
        $this->chien = $chien;

        return $this;
    }

    /**
     * Get chien
     *
     * @return boolean
     */
    public function getChien()
    {
        return $this->chien;
    }

    /**
     * Set rongeur
     *
     * @param boolean $rongeur
     *
     * @return Refuge
     */
    public function setRongeur($rongeur)
    {
        $this->rongeur = $rongeur;

        return $this;
    }

    /**
     * Get rongeur
     *
     * @return boolean
     */
    public function getRongeur()
    {
        return $this->rongeur;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Refuge
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set cin
     *
     * @param \ZanimauxBundle\Entity\User $cin
     *
     * @return Refuge
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
