<?php

class ResponsableAtelier {
    private $numero ;
    private $nomConnexion ;
    private $nom ;
    private $prenom ;
    private $mdp ;

    public function __construct( $numero , $nomConnexion , $nom , $prenom , $mdp ){
        $this->numero = $numero ;
        $this->nomConnexion = $nomConnexion ;
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->mdp = $mdp ;
    }

    public function progAtelier ( $atelier ){
        
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
     * Get the value of nomConnexion
     */ 
    public function getNomConnexion()
    {
        return $this->nomConnexion;
    }

    /**
     * Set the value of nomConnexion
     *
     * @return  self
     */ 
    public function setNomConnexion($nomConnexion)
    {
        $this->nomConnexion = $nomConnexion;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}

?>