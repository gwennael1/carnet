<?php

namespace GM\CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarnetListe
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GM\CarnetBundle\Entity\CarnetListeRepository")
 */
class CarnetListe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="GM\CarnetBundle\Entity\Carnet")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $carnet;

	/**
	 * @ORM\ManyToOne(targetEntity="GM\CarnetBundle\Entity\Liste")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $liste;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
	private $nom;


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
     * Set carnet
     *
     * @param \GM\CarnetBundle\Entity\Carnet $carnet
     * @return CarnetListe
     */
    public function setCarnet(\GM\CarnetBundle\Entity\Carnet $carnet)
    {
        $this->carnet = $carnet;

        return $this;
    }

    /**
     * Get carnet
     *
     * @return \GM\CarnetBundle\Entity\Carnet 
     */
    public function getCarnet()
    {
        return $this->carnet;
    }

    /**
     * Set liste
     *
     * @param \GM\CarnetBundle\Entity\Liste $liste
     * @return CarnetListe
     */
    public function setListe(\GM\CarnetBundle\Entity\Liste $liste)
    {
        $this->liste = $liste;

        return $this;
    }

    /**
     * Get liste
     *
     * @return \GM\CarnetBundle\Entity\Liste 
     */
    public function getListe()
    {
        return $this->liste;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return CarnetListe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
