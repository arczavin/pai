<?php

class Osoba {

      const ROLE_USER = 'user';
      const ROLE_ADMIN = 'admin';

      private $imie;
      private $wyksztalcenie;
      private $role = "ROLE_USER";
      private $osoba;

      function __construct($imie, $wyksztalcenie) {
        $this->imie = $imie;
        $this->wyksztalcenie = new Wyksztalcenie($wyksztalcenie);
      }
      function __destruct() {
        echo "obiekt zniszczony!";
      }
      public function setImie($imie) {
        $this->imie = $imie;
      }
      public function getImie() {
        return $this->imie;
      }
      public function setWyksztalcenie($wyksztalcenie) {
        $this->wyksztalcenie->setNazwa($wyksztalcenie);
      }
      public function getWyksztalcenie() {
        return $this->wyksztalcenie->getNazwa();
      }
      public function setRole($role) {
        $this->role = $role;
      }
      public function getRole() {
        return $this->role;
      }
      public function wyswietlDane($osoba){
        echo $osoba->getImie()."<br>";
        echo $osoba->getWyksztalcenie();
      }
      function __clone() {
          $this->wyksztalcenie = clone $this->wyksztalcenie;
      }
  }

  ?>
