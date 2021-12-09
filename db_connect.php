<?php
    $hostname ="localhost";
    $username ="root";
    $password="";
    $db_name ="st_stephen";
    
    $conn = mysqli_connect($hostname,$username,$password,$db_name);

    if(!$conn){
        echo "connection error".mysqli_connect_error();
    }

?>