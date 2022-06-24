<?php include("./connect.php");
echo $conn;
?>

<form action="./index.php" method="post">
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