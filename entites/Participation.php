<?php

class Participation {
    private DateTime $dateInscription ;

    public function __construct($dateInscription)
    {
        $this->dateInscription = $dateInscription ;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}

?>