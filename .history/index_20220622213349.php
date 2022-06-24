<?php include("./connect.php");?>

<?php 
    $sql = "select * from users";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>