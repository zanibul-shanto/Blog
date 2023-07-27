<?php

    try{

        //host
        $host = "localhost";

        //dbname
        $dbname= "blog";

        //user
        $user = "root";

        //pass
        $password = "";
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    // if($conn == true){
    //     echo "conn works fine";
    // } else{
    //     echo "conn error";
    // }
    
?>