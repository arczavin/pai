<?php

class Student extends Osoba {

  private $numerAlbumu;

  public function __construct($numerAlbumu, $imie, $wyksztalcenie) {
    parent::__construct($imie, $wyksztalcenie);
    $this->numerAlbumu = $numerAlbumu;
  }
  public function setNumerAlbumu($numerAlbumu) {
    $this->numerAlbumu=$numerAlbumu;
  }
  public function getNumerAlbumu() {
    return $this->numerAlbumu;
  }
}

?>
