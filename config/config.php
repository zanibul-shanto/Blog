<?php


    //host
    $host = "localhost";

    //dbname
    $dbname= "blog";

    //user
    $user = "root";

    //pass
    $password = "";
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);


    if($conn == true){
        echo "conn works fine";
    } else{
        echo "conn error";
    }
    
?>