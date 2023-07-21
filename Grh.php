<?php
require_once "Primable.php";
class Grh {
    private $primable;
    private $employee;


    public function addPrimable(Primable $primable){
        $this->primable[]=$primable;
    }

    
    public function addEmployee(Employee $employee){
        $this->employee[]=$employee;
    }


    /**
     * Get the value of primable
     */ 
    public function getPrimable()
    {
        return $this->primable;
    }

    /**
     * Set the value of primable
     *
     * @return  self
     */ 
    public function setPrimable($primable)
    {
        $this->primable = $primable;

        return $this;
    }
}