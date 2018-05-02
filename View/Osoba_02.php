<?php

//require __DIR__.'/lab02_1.php';
require __DIR__.'/lab02_2.php';
/**
* @param Osoba $osoba
*/

      function wyswietlDane($osoba){
        echo $osoba->getImie()."<br>";
        echo $osoba->getWyksztalcenie();
      }
      
$marek = new Osoba('Marek', 'Podstawowe');

  wyswietlDane($marek);
      echo '<br/><br/>';

?>
