<?php 
$servername = "localhost";
$username = "root";
$password = "13062013";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_errno) {
    die();
}
echo "successfully"
?>