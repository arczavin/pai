<?php

class Wyksztalcenie {

      private $nazwa;

      function __construct($nazwa) {
        $this->nazwa=$nazwa;
      }
      public function setNazwa($nazwa) {
        $this->nazwa=$nazwa;
      }
      public function getNazwa() {
        return $this->nazwa;
      }
}

class Osoba {

      const ROLE_USER = 'user';
      const ROLE_ADMIN = 'admin';

      private $imie;
      private $wyksztalcenie;
      private $role = "ROLE_USER";

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

  $osoba = new Osoba("Ania", "Wyższe"); //wyswietli user

  echo Osoba::ROLE_USER; //wyswietli admin
  echo '<br/><br/>';
  echo Osoba::ROLE_ADMIN; //wyswietli ROLE_USER
  echo '<br/><br/>';
  echo $osoba->getRole();

  echo '<br/><br/>';
  echo '// ------------------------------------------';
  echo '<br/><br/>';

  echo $osoba->getImie();
  echo '<br/><br/>';
  unset($osoba);
  echo '<br/><br/>';


 ?>
