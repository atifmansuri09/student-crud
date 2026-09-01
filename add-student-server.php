<?php
require "connection.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $year = $_POST["classyear"];
    $phonenumber = $_POST["phonenumber"];
    $photo = $_POST["photo"];
}