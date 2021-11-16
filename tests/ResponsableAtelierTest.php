<?php

class ResponsableAtelierTest {
    private int $numero ;
    private String $nomConnexion ;
    private String $nom ;
    private String $prenom ;
    private String $mdp ;

    public function __construct( $numero , $nomConnexion , $nom , $prenom , $mdp ){
        $this->numero = $numero ;
        $this->nomConnexion = $nomConnexion ;
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->mdp = $mdp ;
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

    public function getNomConnexion()
    {
        return $this->nomConnexion;
    }

    public function setNomConnexion($nomConnexion)
    {
        $this->nomConnexion = $nomConnexion;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}

?>