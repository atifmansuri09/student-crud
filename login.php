<?php
$message = "";
if (isset($_POST["submit"])) {
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "dumbledore321") {
        $_SESSION["admin_name"] = $username;
        header("Location:adminindex.php");
    } else {
        $message = '<span class="text-danger">Invalid Password and Username, Try Again</span>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <p class="text-center fs-5"><?php echo $message; ?></p>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputUsername1"
                aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>