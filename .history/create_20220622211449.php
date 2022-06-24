<?php include("./connect.php");?>
<?php 
$name = $_POST['name'];
$address = $_POST['address'];
$avt = $_POST['avt'];

$sql = "insert into users (name, address, avt) values ('$name', '$address', '$avt')";

mysqli_query($conn, $sql);
?>