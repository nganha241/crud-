<?php include("./connect.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>