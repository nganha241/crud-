<?php include("./connect.php"); ?>

<?php
$id = $_GET['id'];
$sql = "select * from users where id = '$id' ";
$result = mysqli_query($conn, $sql);
$kq = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="./index.php">List</a>
    <br>
    <form action="./create.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?= $kq['name'] ?>">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" value="<?= $kq['address'] ?>">
        </div>
        <div>
            <label>Avatar</label>
            <input type="text" name="avt">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php

$sql = "update users set name = '$name', address = '$address', avt = '$avt' where id = '$id' ";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>