<?php

class Stagiaire extends Patron {
  private $indemnite;

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
}