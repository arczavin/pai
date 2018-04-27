<?php

      class A {
          // definicja właściwości
          private $name = 'simple name';

          // deklaracja metody
          public function foo() {
            return 'class A, method foo()';
          }
          static public function create() {
            return new static;
          }
          public function foo2() {
            return self::boo();
          }
          public function boo() {
            return 'A::boo()';
          }
          function foo3() {
            if (isset($this)) {
              echo '$this zdefiniowane (';
              echo get_class($this);
              echo ")\n";
            } else {
              echo "\$this niezdefiniowane\n";
              }
           }
      }

      class B extends A {
      //właściwości i metody
          public function foo() {
            return 'class B, method foo() and parent: ' . parent::foo();
          }
          public function boo() {
            return 'B::boo()';
          }

          function bar() {
            A::foo3();
          }
      }

      class Klasa {
        public $nazwa;

        function __construct($nazwa) {
          $this->nazwa = $nazwa;
        }
        public function wyswietl() {
          echo $this->nazwa;
        }
        static public function nowa() {
          return new static("Nowy obiekt 2");
        }
      }

      class Klasa2 extends Klasa {

      }

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


echo '// ------------------------------------------';
echo '<br/><br/>';

$obiekt = new Wyksztalcenie('srednie');
$obiekt->setNazwa('wyższe');
echo $obiekt->getNazwa;

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

$zmienna = new Klasa("klasa");
$zmienna2 = $zmienna;
echo $zmienna2 === $zmienna ? "ten sam obiekt" : "rozne obiekty";
echo '<br/>';
$zmienna2 = clone $zmienna;
echo $zmienna2 === $zmienna ? "ten sam obiekt" : "rozne obiekty";

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $obj1 = new Klasa("Nowy obiekt");
      $obj2 = new $obj1("test");
      var_dump($obj1 !== $obj2);
      echo '<br/>';
      $obj3 = Klasa::nowa();
      var_dump($obj3 instanceof Klasa);
      echo '<br/>';
      $obj4 = Klasa2::nowa();
      var_dump($obj4 instanceof Klasa2);

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $instancja = new Klasa("instancja");
      $przypisanie = $instancja;
      $referencja =& $instancja;
      $instancja->nazwa = 'wartość dla $przypisanie';
      $instancja = null; // $instancja i $referencja przyjmą wartość null
      var_dump($instancja);
      echo '<br/>';
      var_dump($referencja);
      echo '<br/>';
      var_dump($przypisanie);

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $pierwszyObiekt = new Klasa("pierwszyObiekt"); //1
      $drugiObiekt = $pierwszyObiekt; //2
      $drugiObiekt->nazwa = 'druga'; //3
      echo '$nazwa w $pierwszyObiekt = '. $pierwszyObiekt->nazwa;
      echo '<br/>';

      unset($drugiObiekt); //4

      var_dump($drugiObiekt);
      echo '<br/>';
      var_dump($pierwszyObiekt);

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $instance = new A(); //utworzenie obiektu za pomocą nazwy przechowywanej w zmiennej
      $className = 'A';
      $instance = new $className(); // new A()

      echo get_class($instance);
      echo '<br/>';
      var_dump($className);

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $object = new B;
      echo $object->foo();


echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $object = new B;
      echo $object->foo2();
      echo '<br/>';
      echo $object->boo();

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $objectA = A::create();
      $objectB = B::create();
      echo get_class($objectA);
      echo '<br/>';
      echo get_class($objectB);

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

      $a = new A();
      $a->foo3(); //$this zdefiniowane (A)
      echo '<br/>';
      A::foo3(); //$this niezdefiniowane
      echo '<br/>';

      $b = new B();
      $b->bar(); //$this niezdefiniowane
      echo '<br/>';
      B::bar(); //$this niezdefiniowane

echo '<br/><br/>';
echo '// ------------------------------------------';
echo '<br/><br/>';

  /*    class Osoba {

          private $imie;
          private $wyksztalcenie;

          function __construct($imie, $wyksztalcenie) {
              $this->imie = $imie;
                $this->wyksztalcenie = new Wyksztalcenie($wyksztalcenie);
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
      }

      $osoba = new Osoba('Ania', 'wyższe');
      $osoba2 = $osoba;

      // wyswietli "Ania - wyższe"
      echo $osoba->getImie()." - ".$osoba->getWyksztalcenie()."<br>";

      // wyswieli "Ania - wyższe"
      echo $osoba2->getImie()." - ".$osoba2->getWyksztalcenie()."<br>";
      $osoba->setImie('Tomek');
      $osoba->setWyksztalcenie('średnie');

      // wyswietli "Tomek - średnie"
      echo $osoba->getImie()." - ".$osoba->getWyksztalcenie()."<br>";

      // wyswieli "Tomek - średnie"
      echo $osoba2->getImie()." - ".$osoba2->getWyksztalcenie()."<br>";

*/


?>
