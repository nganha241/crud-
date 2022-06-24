<?php include("./connect.php"); ?>

<?php
$trang = 1;
if (isset($_GET['trang'])) {
    $trang = $_GET['trang'];
}

$sql_so_user = "select count(*) from users";
$mang_so_user = mysqli_query($conn, $sql_so_user);
$kq_so_user = mysqli_fetch_array($mang_so_user);
$so_user = $kq_so_user['count(*)'];

$so_user_tren_trang = 2;

$so_trang = ceil($so_user / $so_user_tren_trang);
$bo_qua = $so_user_tren_trang * ($trang - 1);

$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
$sql = "select * from users where name like '%$search%' limit $so_user_tren_trang offset $bo_qua";
$result = mysqli_query($conn, $sql);

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


    <table class="table">
        <caption>
            <form>
                <input type="search" name="search" value="<?= $search ?>">
            </form>
        </caption>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Avatar</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th></th>
        </tr>

        <?php foreach ($result as $kq) { ?>

        <tr>
            <td><?php echo $kq['id'] ?></td>
            <td><img src="<?php echo $kq['avt'] ?>" alt="" width="50px;"></td>
            <td><a href="./detail_user.php?id=<?= $kq['id'] ?>"><?php echo $kq['name'] ?></a></td>
            <td><?php echo $kq['address'] ?></td>
            <td>
                <a href="./form_edit.php?id=<?= $kq['id'] ?>">Edit</a>
                <a href="./delete.php?id=<?= $kq['id'] ?>">Delete</a>
            </td>
        </tr>

        <?php } ?>
    </table>
    <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
    <a href="?trang=<?= $i ?>"><?php echo $i; ?></a>
    <?php } ?>
</body>

</html>