<?php

function getUsers(){
    $database = new Database();
    $database->connect();
    $query= $database->query("SELECT * FROM user");

    while($user = mysqli_fetch_array($query)){

        echo '<tr><td>'.$user['uder_id'].'</td><td>'.$user['email'].'</td><td>'.$user['password'].'</td><tr>';
    }
}

function insertUser(){

    $temp_imie = $_POST["name"];
    $temp_nazwisko = $_POST["surname"];
    $temp_email = $_POST["email"];
    $temo_haslo = $_POST["password"];
    $temp_haslo2 = $_POST["password2"];

    $database = new Database();
    $database->connect();

    if($temo_haslo===$temp_haslo2){

        if($database->query("INSERT INTO `user` (`email`, `password`)
        VALUES ('$temp_email', md5('$temo_haslo'), '$temp_name', '$temp_surname');
        ")){
            header("location: ../View/index.php?msg=OK");
        }else{
            echo "User not insert to db.";
            die();
        }

    } else {
        echo "Incorrect password!";
        die();
    }

    echo $temp_email;
    $database->close();
}
?>
