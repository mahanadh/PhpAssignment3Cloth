<?php


session_start();

if(isset($_POST['submit'])){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $query = "select * from user_table where username = '$user' && password = '$pass'";
    $db_host="localhost";  $db_user="root";  $db_password="";  $db="php_class";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db);
    $result = mysqli_query ( $con , $query);
    $count=mysqli_num_rows($result);

    if($count == 1){
        $_SESSION["LoggedIn"] = TRUE;
        header('Location: ' . 'add_clothes.php');
    }else{


        header('Location:' . 'MainPage.html');
        echo 'Invalid Details';
    }
}
else
{
    header('Location:' . 'MainPage.html');
}
?>