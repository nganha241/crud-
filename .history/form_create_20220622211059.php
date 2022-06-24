<?php include("./connect.php");?>

<form action="./create.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address">
    </div>
    <div>
        <label>Avatar</label>
        <input type="text" name="avt">
    </div>
    <button type="submit">Submit</button>
</form>