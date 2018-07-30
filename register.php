<?php

if($_POST['submit']=='Register')

{

    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db_host="localhost";  $db_user="root";  $db_password="";  $db="php_class";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db);
    $sql = " insert into user_table (username,password,email_id) values ( '$user' ,'$password' , '$email' ) ";
    echo $sql;
    $result = mysqli_query ( $con , $sql );
    if ( $result )
    { echo " Registeration Success ";
    }
    else
    { echo " Registeration Failed \n Try again ";

    }

}

?>