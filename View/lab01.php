<!DOCTYPE html>
<html>
    <body>
        <?php

            echo "Hello World!";
            
            $zmienna="tekst";
            echo "<h2>Przykładowy \n $zmienna!</h2>";
            echo "To ", "jest ", "przykładowy ".$zmienna."\n";
            print "Jeszcze jeden".$zmienna."\n";
            echo print "Jeszcze jeden".$zmienna."\n";

            $kolor="red";
            echo "Wybrany kolor: " . $kolor . "<br>";
            echo "Kolor: " . $KOLOR . "<br>";
            echo "Kolor: " . $koLOR . "<br>";

            // Komentarz
            # Komentarz
            /*
            Komentarz
            */

            ECHO "Tekst HTML<br>";
            echo "Tekst HTML<br>";
            EcHo "Tekst HTML<br>";

            $s = "To JEST \"przykładowy\" <b>ciąg 'tekstowy'</b>";
            echo "\n 1 ". $s ;
            echo "\n 2 ". addslashes($s);
            echo "\n 3 ". crc32($s) ;
            echo "\n 4 ". explode(" ", $s) ;
            echo "\n 5 ". htmlspecialchars($s) ;
            echo "\n 6 ". htmlspecialchars_decode (htmlspecialchars($s)) ;
            echo "\n 7 ". implode (" ", explode(" ", $s)) ;
            echo "\n 8 ". md5($s) ;
            echo "\n 9 ". sha1($s) ;
            echo "\n";

            $x = 5985; var_dump($x);
            echo "<br>"; $x = -345; var_dump($x);
            echo "<br>"; $x = 0x8C; 

            // wartość heksadecymalna
            var_dump($x);
            echo 
            "<br>"; $x = 047; 

            // wartość oktalna
            var_dump($x);

            $x="Helloworld!"; $x=null;
            var_dump($x);

            $x=true; $y=false;
            var_dump($x);
            var_dump($y);

            $array = [
                "foo" => "bar", 
                "bar" => "foo",
            ];

            $ary = array("1"=>'One','Two',"3"=>'Three'); $a = '0'; $b = count($ary); 
                while($a <= $b) { 
                    $pr = $ary[$a]; 
                    print "$pr<br>"; 
                    $a++; 
                }
                
            class
                Student {
                    var $surname;
                    var $name;
                    function __construct($surname, $name){
                        $this ->surname = $nazwisko;
                        $this ->name = $name;
                    }
                
                    function setSurname($surname){
                        $this->surname=$surname;
                    }
                
                    function getName(){
                        return
                        $this->name;}
                } 
        ?>
    </body>
</html>