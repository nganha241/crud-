<?php include("./connect.php"); ?>

<?php
$id = $_GET['id'];
$sql = "delete * from users where id = '$id' ";
echo $sql;
mysqli_query($conn, $sql);
mysqli_close($conn);
?>