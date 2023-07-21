<?php

class Ingenieur   extends Patron implements Employee   {
    private $salaire;

    public function __construct($prenom, $nom, $salaire) {
        parent::__construct($prenom,$nom);
        $this->salaire=$salaire;
        
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}