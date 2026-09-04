<!-- BACKEND -->
<?php
require "connection.php";
$message = "";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $year = $_POST["classyear"];
    $phonenumber = $_POST["phonenumber"];
    $type = $_FILES["studentphoto"]["type"];
    $size = $_FILES["studentphoto"]["size"];
    $extension = ($type == "image/png") ? ".png" : ".jpg";
    $studentphoto = time() . "_" . $name . $extension;
    $temp = $_FILES["studentphoto"]["tmp_name"];

    if (empty($name) || empty($email) || empty($course) || empty($year) || empty($phonenumber)) {
        $message = "All Fields must be required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid Email!";
    } else if (strlen($phonenumber) != 10) {
        $message = "Phone Number must be of 10 digits!";
    } else if ($type != "image/jpeg" && $type != "image/png") {
        $message = "Only PNG or JPG Images Allowed!";
    } else if ($size > 2097152) {
        $message = "Maximum File Size is 2MB";
    } else {
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }
        move_uploaded_file($temp, "uploads/" . $studentphoto);
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name,email,course,classyear,phonenumber,photo)
                VALUES (?,?,?,?,?,?);");
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $course, $year, $phonenumber, $studentphoto);
        $result = mysqli_stmt_execute($stmt); //Returns true or false
        if ($result) {
            $message = '<p class="text-success text-center">Student Added Successfully!</p>';
        } else {
            $message = "Failed to Add Student! Error : " . mysqli_error($conn);
        }
    }
}
?>
<!-- FRONTENED -->
<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        body {
            background: linear-gradient(135deg,
                    var(--coffee) 0%,
                    var(--cream) 35%,
                    var(--coffee) 100%);
        }
    </style>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" target="_blank"><img class="main-logo" src="images/hogwarts-logo-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link me-3 ms-2 btn" href="Home" target="_blank">Home</a>
                    <a class="nav-link me-3 active btn" href="add-student-details.php" target="_blank">Add Student</a>
                    <a class="nav-link me-3 btn" href="view-student-details.php" target="_blank">View Students</a>
                    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="addstudentpage">
        <!-- <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                
            </div>
        </div> -->
        <p class="message text-center">
            <?php echo $message; ?>
        </p>
        <form class="add-student row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="name"
                    placeholder="Enter your full name..." required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Enter your Full Name!
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your Email..."
                    id="validationCustom02" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Invalid Email!
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom03" class="form-label">Course</label>
                <input type="text" class="form-control" name="course" placeholder="Enter your Course..."
                    id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid Course.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom04" class="form-label">Academic Year</label>
                <select class="form-select" id="validationCustom04" name="classyear" required>
                    <option selected disabled value="">Select your Year</option>
                    <option value="FY">FY</option>
                    <option value="TY">TY</option>
                    <option value="SY">SY</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid Academic year.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom05" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phonenumber" placeholder="Enter your Number..."
                    id="validationCustom05" required>
                <div class="invalid-feedback">
                    Please provide a valid Phone Number.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Upload your Photo</label>
                <input type="file" name="studentphoto" accept="image/jpeg,image/png" class="form-control" required>
                <div class="invalid-feedback">
                    Select an Image!
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <button class="add-student-btn btn mt-2 mb-4" type="submit" name="submit">Submit
                    form</button>
                <button class="add-student-btn btn mt-2 mb-4 ms-5" type="reset" value="Reset" name="reset">Reset
                    form</button>
            </div>
        </form>
    </div>

    <script src="bootstrap.min.js"></script>
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