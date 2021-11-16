<?php

class Client {
    private $numero ;
    private $civilite ;
    private $nom ;
    private $prenom ; 
    private $dateDeNaissance ;
    private $adresseElectronique ;
    private $mdp ;
    private $adressePostale ;
    private $codePostal ;
    private $numTelephone ;

    

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
     * Get the value of civilite
     */ 
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */ 
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

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
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance
     *
     * @return  self
     */ 
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get the value of adresseElectronique
     */ 
    public function getAdresseElectronique()
    {
        return $this->adresseElectronique;
    }

    /**
     * Set the value of adresseElectronique
     *
     * @return  self
     */ 
    public function setAdresseElectronique($adresseElectronique)
    {
        $this->adresseElectronique = $adresseElectronique;

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

    /**
     * Get the value of adressePostale
     */ 
    public function getAdressePostale()
    {
        return $this->adressePostale;
    }

    /**
     * Set the value of adressePostale
     *
     * @return  self
     */ 
    public function setAdressePostale($adressePostale)
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get the value of numTelephone
     */ 
    public function getNumTelephone()
    {
        return $this->numTelephone;
    }

    /**
     * Set the value of numTelephone
     *
     * @return  self
     */ 
    public function setNumTelephone($numTelephone)
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }
}

?>