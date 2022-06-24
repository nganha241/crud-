<?php include("./connect.php"); ?>

<?php
$id = $_GET['id'];
?>

<?php
$name = $_POST['name'];
$address = $_POST['address'];
$avt = $_POST['avt'];
$sql = "update users set name = '$name', address = '$address', avt = '$avt' where id = '$id' ";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<a href="./index.php">Lists</a>