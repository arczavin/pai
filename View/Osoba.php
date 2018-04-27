<?php

require __DIR__.'/Osoba.php';
/**
* @param Osoba $osoba
*/
      function wyswietlDane($osoba){
        echo $osoba->getImie()."<br>";
        echo $osoba->getWyksztalcenie();
      }

      $marek = new Osoba('Marek', 'podstawowe');
      wyswietlDane($marek);


?>
