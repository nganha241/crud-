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
    
</body>
</html>