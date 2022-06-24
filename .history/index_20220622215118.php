<?php include("./connect.php");?>

<?php 
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>
        </tr>
    </thead>
    <?php foreach($result as $kq){ ?>
    <tbody>
        <tr>
            <th scope="row"><?php echo $kq['id'] ?></th>
            <td><a href="./detail_user.php"><?php echo $kq['name'] ?></a></td>
            <td><?php echo $kq['address'] ?></td>
            <td><img src="<?php echo $kq['avt'] ?>" alt="" width="5%"></td>
        </tr>
    </tbody>
    <?php } ?>
</table>