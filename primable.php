<?php
require_once "Stagiaire.php";
require_once "Primable.php";

abstract  class Primable {

    // propriété
    // definir des proprietes avec des valeurs par defaut
    private $prenom="XXX";
    private $nom="XXX";
    private $age="XXX";
    private $prime=0;



    abstract public function getPrime();
    abstract public function setPrime($prime);


    
    // méthodes
    // je veux que l'ors de l'initialisation de mon objet
    // patron j'ai un prenom et nom qui lui sont attribué
    // on affecte les propriété grace au mot clé this
    // en utilisant les setter pour proteger les 
    // propriétés en question
    public function __construct(string $prenom,string $nom)    {
        $this->setNom($nom);
        $this->setPrenom($prenom); 
    }
    
    public function sepresenter(){
        echo "je suis ".$this->getPrenom();
    }
 

    public function parlerPatron(Patron $p){
        echo "je parle avec ".$p->getNom();
    }
    public function gererStagiaire(Stagiaire $s){
        echo "je parle avec ".$s->getNom();
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
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
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    // obj : avoir un moyen d'augmenter le salair de mes
    // emp.

    // moyen : une methode augmentation
    // le parametre un employe (ingenieur , secretaire)
    // Interface employee a forcement les methode
    // getSalaire() et sesSalaire()

    public function augmentation(Employee $employee){
       $employee->setSalaire($employee->getSalaire()*1.2);
    }

    public function setPrimePrimable(Primable $primable, $prime) {
        $primable->setPrime($prime);

    }
}