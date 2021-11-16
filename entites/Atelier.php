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

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    public function getDateHeureProgrammee()
    {
        return $this->dateHeureProgrammee;
    }

    public function setDateHeureProgrammee($dateHeureProgrammee)
    {
        $this->dateHeureProgrammee = $dateHeureProgrammee;

        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }
}

?>