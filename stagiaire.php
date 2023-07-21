<?php

class Stagiaire  {
  private $nom;
  private $prenom;
  private $indemnite;
  public function __construct(string $prenom,string $nom)    {
    $this->setNom($nom);
    $this->setPrenom($prenom); 
}
  /**
   * Get the value of indemnite
   */ 
  public function getIndemnite()
  {
    return $this->indemnite;
  }

  /**
   * Set the value of indemnite
   *
   * @return  self
   */ 
  public function setIndemnite($indemnite)
  {
    $this->indemnite = $indemnite;

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
}