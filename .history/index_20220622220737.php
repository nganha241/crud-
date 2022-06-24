<?php include("./connect.php");?>

<?php 
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
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
    <a href="./form-create.php">Add to list</a>
    <table class="table">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>
        </tr>

        <?php foreach($result as $kq){ ?>

        <tr>
            <td scope="row"><?php echo $kq['id'] ?></td>
            <td><a href="./detail_user.php?id=<?=$kq['id']?>"><?php echo $kq['name'] ?></a></td>
            <td><?php echo $kq['address'] ?></td>
            <td><img src="<?php echo $kq['avt'] ?>" alt="" width="5%"></td>
        </tr>

        <?php } ?>
    </table>
</body>

</html>