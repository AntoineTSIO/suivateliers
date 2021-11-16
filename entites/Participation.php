<?php

class Participation {
    private DateTime $dateInscription ;

    public function __construct($dateInscription)
    {
        $this->dateInscription = $dateInscription ;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}

?>