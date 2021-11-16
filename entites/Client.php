<?php

class Client {
    private int $numero ;
    private String $civilite ;
    private String $nom ;
    private String $prenom ; 
    private DateTime $dateDeNaissance ;
    private String $adresseElectronique ;
    private String $mdp ;
    private String $adressePostale ;
    private String $codePostal ;
    private String $numTelephone ;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }

    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

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

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getAdresseElectronique()
    {
        return $this->adresseElectronique;
    }

    public function setAdresseElectronique($adresseElectronique)
    {
        $this->adresseElectronique = $adresseElectronique;

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

    public function getAdressePostale()
    {
        return $this->adressePostale;
    }

    public function setAdressePostale($adressePostale)
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNumTelephone()
    {
        return $this->numTelephone;
    }

    public function setNumTelephone($numTelephone)
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }
}

?>