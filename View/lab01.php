<!DOCTYPE html>
<html>
    <body>
        <?php

            echo "Hello World!";

            $zmienna="tekst";
            echo "<h2>Przykładowy $zmienna!</h2>";
            echo "To ", "jest ", "przykładowy " . $zmienna . "\n";
            print "Jeszcze jeden " . $zmienna . "\n";
            echo print "Jeszcze jeden " . $zmienna . "\n";

            $kolor="red";
            echo " Wybrany kolor: " . $kolor . "<br>";
            echo "Kolor: " . $KOLOR . "<br>";
            echo "Kolor: " . $koLOR . "<br><br>";

            // Komentarz
            # Komentarz
            /*
            Komentarz
            */

            ECHO "Tekst HTML<br>";
            echo "Tekst HTML<br>";
            EcHo "Tekst HTML<br><br>";

            $s = "To JEST \"przykładowy\" <b>ciąg 'tekstowy'</b>";
            echo "\n 1 ". $s . "<br>";
            echo "\n 2 ". addslashes($s) . "<br>";
            echo "\n 3 ". crc32($s) . "<br>";
            echo "\n 4 ". explode(" ", $s) . "<br>";
            echo "\n 5 ". htmlspecialchars($s) . "<br>";
            echo "\n 6 ". htmlspecialchars_decode (htmlspecialchars($s)) . "<br>";
            echo "\n 7 ". implode (" ", explode(" ", $s)) . "<br>";
            echo "\n 8 ". md5($s) . "<br>";
            echo "\n 9 ". sha1($s) . "<br>";
            echo "\n";

            $x = 5985; var_dump($x);
            echo "<br>";
            $x = -345; var_dump($x);
            echo "<br>";
            $x = 0x8C; var_dump($x); // wartość heksadecymalna
            echo "<br>";
            $x = 047; var_dump($x); // wartość oktalna
            echo "<br>";

            $x = 10.365; var_dump($x);
            echo "<br>";
            $x = 2.4e3; var_dump($x);
            echo "<br>";
            $x = 8E-5; var_dump($x);
            echo "<br>";

            $x="Helloworld!";
            $x=null;
            var_dump($x);
            echo "<br>";

            $x=true; $y=false;
            var_dump($x);
            echo "<br>";
            var_dump($y);
            echo "<br>";

            $array = [
                "foo" => "bar",
                "bar" => "foo",
            ];

            $ary = array(1=>'One','Two',3=>'Three');
            $a = '0';
            $b = count($ary);

            while($a <= $b) {
              $pr = $ary [$a];
              print "$pr <br>";
              $a++;
            }

            class
                Student {
                    var $surname;
                    var $name;

                    function __construct($surname, $name){
                        $this ->surname = $nazwisko;
                        $this ->name = $imie;
                    }

                    function setSurname($surname){
                        $this->surname=$surname;
                    }

                    function getName($imie){
                        return
                        $this->name;
                    }
                }
        ?>
    </body>
</html>
