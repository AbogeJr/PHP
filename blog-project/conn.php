<?php
    $host = "localcost";
    $user = "root";
    $password = "pass";
    $db = "myspace";

    $conn = new mysqli($host, $user, $password, $db);

    if(!$conn) {
        echo "Sorry Boss! Database Connection Error<br>";
    }
?>