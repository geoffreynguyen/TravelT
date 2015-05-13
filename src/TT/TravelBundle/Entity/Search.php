<?php

namespace TT\TravelBundle\Entity;




class Search
{
  
    private $id;

 
    private $dd;

 
    private $dr;

   
    private $villeDepart;

   
    private $villeArrivee;


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
     * Set dd
     *
     * @param \DateTime $dd
     * @return Search
     */
    public function setDd($dd)
    {
        $this->dd = $dd;

        return $this;
    }

    /**
     * Get dd
     *
     * @return \DateTime 
     */
    public function getDd()
    {
        return $this->dd;
    }

    /**
     * Set dr
     *
     * @param \DateTime $dr
     * @return Search
     */
    public function setDr($dr)
    {
        $this->dr = $dr;

        return $this;
    }

    /**
     * Get dr
     *
     * @return \DateTime 
     */
    public function getDr()
    {
        return $this->dr;
    }

    /**
     * Set villeDepart
     *
     * @param integer $villeDepart
     * @return Search
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
     * @return Search
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
}
