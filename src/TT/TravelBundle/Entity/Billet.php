<?php

namespace TT\TravelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TT\TravelBundle\Entity\BilletRepository")
 */
class Billet
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
     * @var integer
     *
     * @ORM\Column(name="train", type="integer")
     * 
     */
    private $train;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
     /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    
    private $adresse;
    
    
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
     * Set nom
     *
     * @param string $nom
     * @return Billet
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

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Billet
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
        /**
     * Set train
     *
     * @param string $train
     * @return train
     */
    public function setTrain($train)
    {
        $this->train = $train;

        return $this;
    }

    /**
     * Get train
     *
     * @return string 
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Billet
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
