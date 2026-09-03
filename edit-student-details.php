<!-- BACKENED -->
<?php
require "connection.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id") or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
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
    <div class="addstudentpage">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="img-fluid d-block mx-auto" src="images/add-student-img.jpeg" style="" width="15%"
                    alt="Add student">
            </div>
        </div>
        <p class="message text-center">
            <?php echo $message; ?>
        </p>
        <form class="add-student row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="name"
                    placeholder="Enter your full name..." value="<?php echo $row["name"]; ?>" required>
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
                    value="<?php echo $row["email"]; ?>" id="validationCustom02" required>
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
                    value="<?php echo $row["course"]; ?>" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid Course.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="validationCustom04" class="form-label">Academic Year</label>
                <select class="form-select" id="validationCustom04" name="classyear"
                    value="<?php echo $row["classyear"]; ?>">
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
                    value="<?php echo $row["phonenumber"]; ?>" id="validationCustom05" required>
                <div class="invalid-feedback">
                    Please provide a valid Phone Number.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Upload your Photo</label>
                <input type="file" name="studentphoto" accept="image/jpeg,image/png" class="form-control"
                    value="<?php echo $row["photo"]; ?>" required>
                <div class="invalid-feedback">
                    Select an Image!
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <button class="btn btn-outline-primary btn-lg mt-2 mb-4" type="submit" name="submit">Submit
                    form</button>
                <button class="btn btn-outline-secondary btn-lg mt-2 mb-4 ms-5" type="reset" value="Reset"
                    name="reset">Reset form</button>
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