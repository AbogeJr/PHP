<?php 
$host = 'localhost';
$user = 'root';
$db = 'blog';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if(!$conn) {
    echo "Sorry Boss... Could not connect: ".mysqli_connect_errno();
} 
// else {
//     echo 'Welcome Boss!';
// }
?>