<?php
function getUsers(){
    $database = new Connect();
    $database->connect();
    $query= $database->query("SELECT* FROM request WHERE REQUEST_ID=2");

    while($user = mysqli_fetch_array($query)){

        echo $user['EMAIL'].' -------- '.$user['CNAME'].' -------- '.$user['CITY'];
    }
    }

function insertSerwis(){

    $temp_name = $_POST["name"];
    $temp_surname = $_POST["surname"];
    $temp_email = $_POST["email"];
    $temp_phone = $_POST["phone"];
    $temp_dname = $_POST["dname"];
    $temp_cname = $_POST["cname"];
    $temp_street = $_POST["street"];
    $temp_city = $_POST["city"];
    $temp_zipcode = $_POST["zipcode"];
    $temp_receipt = $_POST["receipt"];
    $temp_date = $_POST["date"];
    $temp_descripe = $_POST["descripe"];


    $database = new Connect();
    $database->connect();
    mysqli_query("SET NAMES utf8");

    if($database->query("INSERT INTO request (EMAIL, NAME, SURNAME,`PHONE`,`D_NAME`,`CNAME`,`STREET`,`CITY`,`ZIPCODE`,`RECEIPT`,`DATE`,`DESCRIPE`)
    VALUES ('$temp_email', '$temp_name', '$temp_surname', '$temp_phone','$temp_dname','$temp_cname','$temp_street','$temp_city','$temp_zipcode','$temp_receipt','$temp_date','$temp_descripe');
    ")){
        header("location: ../Sources/index.php");
    }else{
        echo "User not insert to db.";
        die();
    }

    $database->close();
}

?>
<!-- D_NAME,`CNAME`,`STREET`,`CITY`,`ZIPCODE`,`RECEIPT`,`DATE`,`DESCRIPE` -->
<!-- '$temp_dname','$temp_cname','$temp_street','$temp_city','$temp_zipcode','$temp_receipt','$temp_date','$temp_descripe' -->
