<html>
<head>
    <meta charset="UTF-8">
    <title>Add new PRODUCT</title>
</head>
<body bgcolor="#add8e6">
<p><b><h2><center>Add New Product</center></h2></b></p>
<center><form action="insert_cloth.php" method="post">

    CODE:<input type="number" name="code" ><br>
    TITLE: <input type="text" name="title" ><br>
    Description: <input type="text" name="description" ><br>
    TYPE: <input type="text" name="type" ><br>
    SIZE: <select name="size">
        <option value="Large">Large</option>
        <option value="X-Large">X-Large</option>
        <option value="Small">Small</option>
    </select>
    <br>
    <input type="submit" value="Submit"><br>

</form>
</center>
<br><center><div id="button"><a href="logout.php">LOGOUT</a></div></center>

</body>
</html>