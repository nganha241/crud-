<?php include("./connect.php");?>

<?php 
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<?php foreach($result as $kq){ ?>
<table>

</table>
<?php } ?>