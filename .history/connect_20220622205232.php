<?php 
$servername = "localhost";
$username = "root";
$password = "13062013";

public $conn; 
$conn = new mysqli($servername, $username, $password);

if($conn->connect_errno) {
    die();
}
echo "successfully"
?>