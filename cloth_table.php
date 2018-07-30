<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/30/2018
 * Time: 8:13 AM
 */
include_once 'database.php';

if(isset($_POST['submit'])) {
    header("Location: http://www.example.com/page.php");
    exit;
}
?>


<html>
<style>
</style>

<body bgcolor="#add8e6">
<form action="add_clothes.php" method="post" >
    <input style="float:right; margin-right:1500px;" type='submit' name='Add new product' value='Add new product'  />
</form>

<table border="2">
    <tr>
        <th>Code</th>
        <th>Title</th>
        <th>Description</th>
        <th>Type</th>
        <th>Size</th>
    </tr>

    <?php
    $sql= "SELECT * FROM cloth";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        for($i=0; $row = $result -> fetch_assoc();$i++){
            ?>
            <tr style="background-color: <?php echo  $i % 2==0 ? 'yellow':'white' ?>">
                <td><?php echo $row ["code"] ?> </td>
                <td><?php echo $row ["title"] ?> </td>
                <td><?php echo $row ["description"] ?> </td>
                <td><?php echo $row ["type"] ?> </td>
                <td><?php echo $row ["size"] ?> </td>
            </tr>

            <?php
        }
    }else {
        echo "0 results";
    }

    $conn->close();
    ?>

</table>
</body>
</html>