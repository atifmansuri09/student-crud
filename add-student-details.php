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

    if (empty($name) || empty($email) || empty($course) || empty($year) || empty($phonenumber)) {
        $message = "All Fields must be required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid Email!";
    } else if (strlen($phonenumber) != 10) {
        $message = "Phone Number must be of 10 digits!";
    }

    if (file_exists("uploads")) {
        mkdir("uploads", 0777, true);
    }

    $photo = time() . $name;
    $temp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];

    if ($type != "image/jpeg" && $type != "image/png") {
        $message = "Only PNG or JPG Images Allowed!";
    } else if ($size > 2097152) {
        $message = "Maximum File Size is 2MB";
    } else {
        move_uploaded_file($temp, "uploads/" . $photo);
        $sql = "INSERT INTO students (name,email,course,classyear,phonenumber,photo)
                VALUES (?,?,?,?,?,?);";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $course, $year, $phonenumber, $photo);
        $result = mysqli_stmt_execute($stmt);
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
</head>

<body>
    <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="img-fluid d-block mx-auto" src="images/add-student-img.jpeg" width="15%" alt="Add student">
        </div>
    </div>
    <!-- <form method="post" class="add-student row g-3 needs-validation" novalidate>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationCustom01" name="name"
                placeholder="Enter your full name..." required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your Email..."
                id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
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
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled>Select your Year</option>
                <option name="classyear" value="FY">FY</option>
                <option name="classyear" value="SY">SY</option>
                <option name="classyear" value="TY">TY</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid year.
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
            <input type="file" name="photo" accept="image/jpeg,image/png" class="form-control" required>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <button class="btn btn-primary btn-lg mt-2 mb-4" type="submit">Submit form</button>
        </div>
    </form> -->
    <form class="add-student row g-3 needs-validation" novalidate method="post">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationCustom01" name="name"
                placeholder="Enter your full name..." required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter your Email..."
                id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
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
                <option selected disabled>Select your Year</option>
                <option value="FY">FY</option>
                <option value="TY">TY</option>
                <option value="SY">SY</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid year.
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
            <input type="file" name="photo" accept="image/jpeg,image/png" class="form-control" required>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <button class="btn btn-primary btn-lg mt-2 mb-4" type="submit" name="submit">Submit
                form</button>
        </div>
    </form>
    <p class="text-danger fw-bold"><?php echo $message; ?></p>
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