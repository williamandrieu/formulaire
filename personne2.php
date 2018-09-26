<?php
class personne {
private $nom;
private $prenom;
private $adress;
private $age;


public function __construct($nom,$prenom,$adress,$age) {

  $this->nom = $nom;
  $this->prenom = $prenom;
  $this->adress = $adress;
  $this->age = $age;
}


public function getNom(){
  return $this->nom;
}

public function getAdress(){
  return $this->adress;
}
public function getPrenom(){
  return $this->prenom;
}
public function getAge(){
  return $this->age;
}

private function getInfo(){


}

private function setInfo(){


}





















}

?>
