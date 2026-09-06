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
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        body {
            background: linear-gradient(135deg,
                    var(--border) 0%,
                    var(--chocolate) 45%,
                    var(--dark-coffee) 100%);
            height: 100vh;
        }

        div.card.login {
            background: linear-gradient(135deg,
                    var(--chocolate) 0%,
                    var(--chocolate) 50%,
                    var(--border) 100%);
            color: var(--light-cream);
            width: 40%;
            margin: 10% auto;
            font-weight: 500;
        }

        div.card.login input {
            width: 80%;
            margin: auto;
        }

        label {
            margin-left: 10%;
        }
    </style>
</head>

<body>
    <div class="card login">
        <div class="card-header">
            <h3 class="mb-0 text-center" style="color:var(--parchment);">Login</h3>
        </div>
        <p class="text-center fs-5 ">
            <?php echo $message; ?>
        </p>
        <form method="post" class="row needs-validation pt-4" novalidate enctype="multipart/form-data">
            <div class="mb-3 col-lg-12 col-md-12 col-sm-12">
                <label for="exampleInputUsername1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername1"
                    aria-describedby="emailHelp" placeholder="Enter your username">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3 col-lg-12 col-md-12 col-sm-12">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="Enter your username">
            </div>
            <button type="submit" name="submit" class="btn submit-btn d-block mx-auto mb-4">Submit</button>
        </form>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>