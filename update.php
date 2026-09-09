<?php
require "connection.php";
// EDITING IT TO DATABASE

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $house = $_POST["house"];
    $year = $_POST["classyear"];
    $phonenumber = $_POST["phonenumber"];

    if (empty($name) || empty($email) || empty($house) || empty($year) || empty($phonenumber)) {
        $message = "All Fields must be required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid Email!";
    } else if (strlen($phonenumber) != 10) {
        $message = "Phone Number must be of 10 digits!";
    } else if (!empty($_FILES["studentphoto"]["name"])) {
        $type = $_FILES["studentphoto"]["type"];
        $size = $_FILES["studentphoto"]["size"];
        $extension = ($type == "image/png") ? ".png" : ".jpg";
        $studentphoto = time() . "_" . $name . $extension;
        $temp = $_FILES["studentphoto"]["tmp_name"];

        if ($type != "image/jpeg" && $type != "image/png") {
            $message = "Only PNG or JPG Images Allowed!";
        } else if ($size > 2097152) {
            $message = "Maximum File Size is 2MB";
        }

        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }
        move_uploaded_file($temp, "uploads/" . $studentphoto);
        $stmt = mysqli_prepare($conn, "UPDATE students SET name=?,email=?,house=?,classyear=?,phonenumber=?,photo=? WHERE id = ?;");
        mysqli_stmt_bind_param($stmt, "ssssssi", $name, $email, $house, $year, $phonenumber, $studentphoto, $id);

    } else {
        $stmt = mysqli_prepare($conn, "UPDATE students
                SET name=?,email=?,house=?,classyear=?,phonenumber=?
                WHERE id = ?;");
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $house, $year, $phonenumber, $id);
    }
    $result = mysqli_stmt_execute($stmt); //Returns true or false
    if ($result) {
        header("Location:view-student-details.php");
    } else {
        $message = "Failed to Edit Student Details! Error : " . mysqli_error($conn);
    }

}
?>