<?php

$u_name = $email = $password = $repassword = $gender = "";
$u_name_err = $email_err = $password_err = $repassword_err = $gender_err = "";

    if(isset($_POST['signup'])) {                   //gathering input after submitting form
        if(empty($_POST["u_name"])) {
            $u_name_err = "Name Required!";
        } 
        else {
            $u_name = test_input($_POST["u_name"]);
        }
        if(empty($_POST["email"])) {
            $email_err = "Email Invalid!";
        } 
        else {
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["password"])) {
            $password_err = "Password Required!";
        } 
        else {
            $password = test_input($_POST["password"]);
        }
        if(empty($_POST["repassword"])) {
            $repassword_err = "Repeat Required!";
        } 
        else {
            $repassword = test_input($_POST["repassword"]);
        }
        if(empty($_POST["gender"])) {
            $gender_err = "Gender Required!";
        } 
        else {
            $gender = test_input($_POST["gender"]);
        }
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);                         
        $repassword = test_input($_POST["repassword"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data);    //removes whitespaces and predifined characters
        $data = stripslashes($data);    //removes backlashes
        $data = htmlspecialchars($data);        //converts some predefined characters to html entities
        return $data;
      }

?>