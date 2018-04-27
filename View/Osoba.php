<?php

require __DIR__.'/lab02_1.php';
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
