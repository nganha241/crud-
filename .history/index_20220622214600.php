<?php include("./connect.php");?>

<?php 
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<?php foreach($result as $kq){ ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>
<?php } ?>