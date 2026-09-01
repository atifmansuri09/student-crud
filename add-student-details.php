<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>
    <h1 class="text-center fw-bold mt-4">Add Student</h1>
    <form action="add-student-server.php" method="post" class="add-student row g-3 needs-validation" novalidate>
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
                <option selected disabled >Select your Year</option>
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
    </form>
    <script src="bootstrap.min.js"></script>
</body>

</html>