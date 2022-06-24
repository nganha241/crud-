<?php include("./connect.php");?>

<?php 
$id = $_GET['id'];
    $sql = "select * from users where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $detail = mysqli_fetch_array($result);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="./form_create.php">Add to list</a>
    <a href="./index.php">Lists</a>
    <table class="table">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>
        </tr>
        <tr>
            <td><?php echo $detail['id'] ?></td>
            <td><?php echo $detail['name'] ?></a></td>
            <td><?php echo $detail['address'] ?></td>
            <td><img src="<?php echo $detail['avt'] ?>" alt="" width="5%"></td>
        </tr>
    </table>
</body>

</html>