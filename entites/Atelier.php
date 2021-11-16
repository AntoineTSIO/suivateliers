<?php

class Atelier {
    private int $numero ;
    private DateTime $dateEnregistrement ;
    private DateTime $dateHeureProgrammee ;
    private DateTime $duree ;
    private int $nbPlaces ;
    private String $theme ;

    public function __construct( $numero , $dateEnregistrement , $dateHeureProgrammee , $duree , $nbPlaces , $theme ){
        $this->numero = $numero ;
        $this->dateEnregistrement = $dateEnregistrement ;
        $this->dateHeureProgrammee = $dateHeureProgrammee ;
        $this->duree = $duree ;
        $this->nbPlaces = $nbPlaces ;
        $this->theme = $theme ;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of dateEnregistrement
     */ 
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set the value of dateEnregistrement
     *
     * @return  self
     */ 
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get the value of dateHeureProgrammee
     */ 
    public function getDateHeureProgrammee()
    {
        return $this->dateHeureProgrammee;
    }

    /**
     * Set the value of dateHeureProgrammee
     *
     * @return  self
     */ 
    public function setDateHeureProgrammee($dateHeureProgrammee)
    {
        $this->dateHeureProgrammee = $dateHeureProgrammee;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of nbPlaces
     */ 
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set the value of nbPlaces
     *
     * @return  self
     */ 
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }
}

?>