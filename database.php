<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/30/2018
 * Time: 8:12 AM
 */

$servername="localhost";
$username="root";
$password="";
$db="php_class";

$conn=new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else{
    echo "Connected to db successfully";
}


//$conn->close();
?>