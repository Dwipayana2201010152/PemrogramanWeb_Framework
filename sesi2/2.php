<?php
class Animal
{
 public $animalName;
 function giveName($name)
 {
 $this->animalName = $name;
 }
}
class Species extends Animal
{
 public $animalSpecies;
 function giveAnimalSpecies($species)
 {
 $this->animalSpecies = $species;
 }
}
$Zoo = new Species;

$Zoo->giveName("Whale");
$Zoo->giveAnimalSpecies("Mamalia");
echo "Kami adalah hewan : " . $Zoo->animalName . "<br />";
echo "Masuk ke spesies : " . $Zoo->animalSpecies . "<br />";