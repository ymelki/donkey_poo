<?php

class Patron {

    // propriété
    public $prenom;
    public $nom;
    private $age;



    
    // méthodes

    public function __construct(string $prenom,string $nom)    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
      
    }



    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        if ($age > 120) {
            echo "calme toi";
            return;
        }
        else {
            $this->age = $age;
        }
 
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
}