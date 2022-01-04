<?php
    $conn = new mysqli("localhost", "root", "", "project");
    if(!$conn) {
        echo "Couldn't connect!";
    }
    else {
        echo "Connected to Database Successfully<br><br>";
    }
?>