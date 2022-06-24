<?php include("./connect.php");?>

<form action="./index.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address">
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="avt">
    </div>
    <button type="submit">Submit</button>
</form>

<?php 
$name = $_POST['name'];
$adress = $_POST['address'];
$avt = $_POST['avt'];

$sql = "insert into users (name, adress, avt) values ('$name', '$address', '$avt')";

mysqli_query($conn, $sql);
?>