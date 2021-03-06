<?php

namespace TT\TravelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Train
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TT\TravelBundle\Entity\TrainRepository")
 */
class Train
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="datetime")
     */
    private $dateDepart;

    /**
       * @ORM\ManyToOne(targetEntity="Ville", cascade={"persist"})
    */
    private $villeDepart;

    /**
     * @ORM\ManyToOne(targetEntity="Ville", cascade={"persist"})
    */
    private $villeArrivee;
 /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     * 
     */
private $prix;

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
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return Train
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set villeDepart
     *
     * @param integer $villeDepart
     * @return Train
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return integer 
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrivee
     *
     * @param integer $villeArrivee
     * @return Train
     */
    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    /**
     * Get villeArrivee
     *
     * @return integer 
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Train
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
