<!-- BACKEND -->
<?php
session_start();
if (!isset($_SESSION["admin_name"])) {
    header("Location:login.php");
}
require "connection.php";
$message = "";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $house = $_POST["house"];
    $year = $_POST["classyear"];
    $phonenumber = $_POST["phonenumber"];
    $type = $_FILES["studentphoto"]["type"];
    $size = $_FILES["studentphoto"]["size"];
    $extension = ($type == "image/png") ? ".png" : ".jpg";
    $studentphoto = time() . "_" . $name . $extension;
    $temp = $_FILES["studentphoto"]["tmp_name"];

    if (empty($name) || empty($email) || empty($house) || empty($year) || empty($phonenumber)) {
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
        $stmt = mysqli_prepare($conn, "INSERT INTO students (name,email,house,classyear,phonenumber,photo)
                VALUES (?,?,?,?,?,?);");
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $house, $year, $phonenumber, $studentphoto);
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
    <!-- SIDEBAR -->
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="Sidebar col-2">
                <ul class="nav gap-3 flex-column nav-pills justify-content-center" style="height:100vh;">
                    <li class="nav-item mb-3">
                        <a href="adminindex.php" class=""><img src="images/hogwarts-dashboard-logo.png"
                                class="d-block mx-auto" alt="" style="width:45%;"></a>
                        <h3 class="text-center pt-0 h4"
                            style="color:var(--cream);letter-spacing: 1px;font-family: 'Times New Roman', Times, serif;color:var(--border);">
                            HOGWARTS</h3>
                    </li>
                    <li>
                        <a class="nav-link" href="adminindex.php" aria-current="page"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="mb-2 me-2 bi bi-house-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                            </svg>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="add-student-details.php"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="mb-2 me-2 bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                            </svg>Add Magician</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view-student-details.php"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="mb-2 me-2 bi bi-people-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            </svg>View Magicians</a>
                    </li>
                    <li class="nav-item mt-auto text-center mb-4">
                        <a class="nav-link mb-5 fs-5" href="logout.php" aria-disabled="true" tabindex="-1"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="mb-2 me-2 bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                            </svg>Logout</a>
                    </li>
                </ul>
            </div>
            <div class="addstudentpage col-lg-10 col-md-10 col-sm-10 card">
                <div class="card-header">
                    <h3 class="mb-0 text-center">Add Magician</h3>
                </div>
                <p class="message text-center">
                    <?php echo $message; ?>
                </p>
                <form class="add-student row g-3 needs-validation" novalidate method="post"
                    enctype="multipart/form-data">
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
                        <label for="validationCustom03" class="form-label">House</label>
                        <select class="form-select" id="validationCustom03" name="house" required>
                            <option selected disabled value="">Select your House</option>
                            <option value="Gryffindor">Gryffindor</option>
                            <option value="Hufflepuff">Hufflepuff</option>
                            <option value="Ravenclaw">Ravenclaw</option>
                            <option value="Slytherin">Slytherin</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid House.
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom04" class="form-label">Academic Year</label>
                        <select class="form-select" id="validationCustom04" name="classyear" required>
                            <option selected disabled value="">Select your Year</option>
                            <option value="FY">FY</option>
                            <option value="SY">SY</option>
                            <option value="TY">TY</option>
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
                        <input type="file" name="studentphoto" accept="image/jpeg,image/png" class="form-control"
                            required>
                        <div class="invalid-feedback">
                            Select an Image!
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                        <button class="submit-btn btn mt-2 mb-4 pt-2" type="submit" name="submit">Add <svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="mb-1 ms-2 bi bi-feather" viewBox="0 0 16 16">
                                <path
                                    d="M15.807.531c-.174-.177-.41-.289-.64-.363a3.8 3.8 0 0 0-.833-.15c-.62-.049-1.394 0-2.252.175C10.365.545 8.264 1.415 6.315 3.1S3.147 6.824 2.557 8.523c-.294.847-.44 1.634-.429 2.268.005.316.05.62.154.88q.025.061.056.122A68 68 0 0 0 .08 15.198a.53.53 0 0 0 .157.72.504.504 0 0 0 .705-.16 68 68 0 0 1 2.158-3.26c.285.141.616.195.958.182.513-.02 1.098-.188 1.723-.49 1.25-.605 2.744-1.787 4.303-3.642l1.518-1.55a.53.53 0 0 0 0-.739l-.729-.744 1.311.209a.5.5 0 0 0 .443-.15l.663-.684c.663-.68 1.292-1.325 1.763-1.892.314-.378.585-.752.754-1.107.163-.345.278-.773.112-1.188a.5.5 0 0 0-.112-.172M3.733 11.62C5.385 9.374 7.24 7.215 9.309 5.394l1.21 1.234-1.171 1.196-.027.03c-1.5 1.789-2.891 2.867-3.977 3.393-.544.263-.99.378-1.324.39a1.3 1.3 0 0 1-.287-.018Zm6.769-7.22c1.31-1.028 2.7-1.914 4.172-2.6a7 7 0 0 1-.4.523c-.442.533-1.028 1.134-1.681 1.804l-.51.524zm3.346-3.357C9.594 3.147 6.045 6.8 3.149 10.678c.007-.464.121-1.086.37-1.806.533-1.535 1.65-3.415 3.455-4.976 1.807-1.561 3.746-2.36 5.31-2.68a8 8 0 0 1 1.564-.173" />
                            </svg></button>
                        <button class="submit-btn btn mt-2 mb-4 ms-5 pt-2" type="reset" value="Reset" name="reset">Reset<svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="mb-1 ms-2 bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                                <path
                                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                            </svg></button>
                    </div>
                </form>
            </div>
        </div>
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