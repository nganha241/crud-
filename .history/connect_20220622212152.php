<?php 
$servername = "localhost";
$username = "root";
$password = "13062013";
$db_name = "crud-";


$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_errno) {
    die();
}

?>