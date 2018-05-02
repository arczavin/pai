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
?>
