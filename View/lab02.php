<?php

    class Osoba {
        const ROLE_USER = 'user';
        const ROLE_ADMIN = 'admin';

        private $imie;
        private $wyksztalcenie;
        private $role = 'ROLE_USER';

        function __construct($imie, $wyksztalcenie) {
            $this->imie = $imie;
            $this->wyksztalcenie = $wyksztalcenie;
        }

        function __destruct() {
            echo "obiekt zniszczony!";
        }

        public function setRole($role) {
            $this->role = $role;
        }

        public function getRole() {
            return $this->role;
        }

        public function setImie($osoba) {
            $this->osoba = $osoba;
        }

        public function getImie() {
            return $this->osoba;
        }
    }

    $osoba = new Osoba("Ania", "Wyższe");
    //wyswietli user
    echo Osoba::ROLE_USER;
    //wyswietli admin
    echo Osoba::ROLE_ADMIN;
    //wyswietli ROLE_USER
    echo $osoba->getRole();
    //wyswietlenie właściwości obiektu
    echo $osoba->getImie();
    //usuniecie obiektu z zmiennej
    unset($osoba);
?>
