<?php
require "connection.php";
$id = $_GET["id"];
$stmt = mysqli_prepare($conn,"DELETE FROM students WHERE id = ?");
mysqli_stmt_bind_param($stmt,"s",$id);
$result = mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);

if($result){
    header("Location:view-student-details.php");
}
else{
    echo "Unable to delete record, Error : " . mysqli_error($conn);
}
?>