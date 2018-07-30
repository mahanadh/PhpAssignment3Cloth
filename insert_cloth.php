<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/30/2018
 * Time: 8:06 AM
 */
include_once 'database.php';

if(isset($_POST['submit'])) {
    header('Location: '. 'cloth_table.php');
    exit;
}

$code= $_POST['code'];
$title= $_POST['title'];
$description= $_POST['description'];
$type= $_POST['type'];
$size= $_POST['size'];
print_r($_POST);

$stmt =$conn->prepare(
    " insert into cloth (code, title, description, type , size ) VALUES ( ? , ? , ? , ? , ? ) "
);

$stmt->bind_param(
    "ssssd",$code, $title, $description, $type , $size );

echo "here";

$stmt->execute();
$stmt->close();
$conn->close();
?>

<html><form action="cloth_table.php" method="post" >
    <input type='submit' name='Go to page' value='Go to page'  />
</form>
</html>
