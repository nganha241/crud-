<?php include("./connect.php");?>

<?php 
$id = $_GET['id'];
    $sql = "select * from users where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $detail = mysqli_fetch_array($result);
    mysqli_close($conn);
?>

<?php 
    
?>