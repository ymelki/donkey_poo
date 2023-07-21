<?php
// on recuperer la classe patron
require_once "Employee.php";

require_once "Patron.php";
require_once "Stagiaire.php";
require_once "Ingenieur.php";
require_once "Secretaire.php";

$s=new Stagiaire("toto","titi");
$p1=new Patron("yoel","melki");
$i1=new Ingenieur("bibi","baba",3900);
$s1=new Secretaire("sisi","sasa");
var_dump($p1);
var_dump($i1);
var_dump($s1);

$p1->sepresenter();

// $p1->parlerPatron($s);
$p1->gererStagiaire($s);
$p1->augmentation($s1);
$p1->augmentation($s);

var_dump($s1);

//require_once "Secretaire.php";


/*
// on instancie l'objet patron
$p1=new Patron("Yoel","Melki");

// on modifier le nom
// $p1->nom="Yoel";

// je veux modifier l'age
$p1->setAge(366);
var_dump($p1);

$s1=new Secretaire("Secretaire1","sfdsf");

var_dump($s1);*/