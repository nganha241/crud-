<?php include("./connect.php");?>

<?php 
$id = $_GET['id'];
    $sql = "select * from users where id = '$id'";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>

<?php 
    mysqli_fetch_array($result);
?>