<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rosalyjewelry";

    $conn = mysqli_connect($servername, $username, $password, $database);
 
    if (!$conn) {
        die ("Falha na conexão com o BD " .mysqli_connect_errno());
        exit();
    }
   
?>
