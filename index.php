<?php
// on recuperer la classe patron
require_once "Patron.php";
require_once "Secretaire.php";

// on instancie l'objet patron
$p1=new Patron("Yoel","Melki");

// on modifier le nom
// $p1->nom="Yoel";

// je veux modifier l'age
$p1->setAge(366);
var_dump($p1);

$s1=new Secretaire("Secretaire1","sfdsf");

var_dump($s1);