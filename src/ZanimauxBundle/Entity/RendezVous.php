<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="Rendez_vous")
 * @ORM\Entity
 */
class RendezVous
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRV;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idUser", referencedColumnName="cin")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idClient", referencedColumnName="cin")
     */
    private $idClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRDV", type="datetime", nullable=false)
     */
    private $daterdv;



    /**
     * Set daterdv
     *
     * @param \DateTime $daterdv
     *
     * @return RendezVous
     */
    public function setDaterdv($daterdv)
    {
        $this->daterdv = $daterdv;

        return $this;
    }

    /**
     * Get daterdv
     *
     * @return \DateTime
     */
    public function getDaterdv()
    {
        return $this->daterdv;
    }

    /**
     * Set idUser
     *
     * @param \ZanimauxBundle\Entity\User $idUser
     *
     * @return RendezVous
     */
    public function setIdUser(\ZanimauxBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \ZanimauxBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idClient
     *
     * @param \ZanimauxBundle\Entity\User $idClient
     *
     * @return RendezVous
     */
    public function setIdClient(\ZanimauxBundle\Entity\User $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \ZanimauxBundle\Entity\User
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get idRV
     *
     * @return integer
     */
    public function getIdRV()
    {
        return $this->idRV;
    }
}
