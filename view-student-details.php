<?php
require "connection.php";
// SEARCH
$search = "";
if (isset($_GET["search"])) {
    $search = $_GET["search"];
}

// SORTING
$sort = "ASC";
if (isset($_GET["sort"])) {
    if ($_GET["sort"] == "desc") {
        $sort = "DESC";
    }
}

// PAGINATION
$limit = 5;
$page = 1;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}
$offset = ($page - 1) * $limit;

// TOTAL RECORDS
$countQuery = "
SELECT COUNT(*) AS total FROM students WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR course LIKE '%$search%'";

$countResult = mysqli_query($conn, $countQuery);
$totalRecords = mysqli_fetch_assoc($countResult)["total"];
$totalPages = ceil($totalRecords / $limit);

// MAIN QUERY 
$sql = "SELECT * FROM students 
WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR course LIKE '%$search%'
ORDER BY name $sort LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>View Student Table</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="adminstyle.css">
    <style>
        body {

            background: linear-gradient(to right,
                    var(--text-brown) 0%,
                    var(--parchment) 25%,
                    var(--cream) 50%,
                    var(--parchment) 75%,
                    var(--text-brown) 100%);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" target="_blank"><img class="main-logo"
                    src="images/hogwarts-logo-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link me-3 ms-2 btn" href="Home" target="_blank">Home</a>
                    <a class="nav-link me-3 btn" href="add-student-details.php" target="_blank">Add Student</a>
                    <a class="nav-link me-3 btn active" href="view-student-details.php" target="_blank">View
                        Students</a>
                    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="mb-0 text-center">Hogwarts Students </h3>
            </div>
            <div class="card-body>">
                <div class="row mb-3">
                    <div class="col-md-6 pt-4">
                        <form method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control ms-4" placeholder="Search Student...."
                                    value="<?php echo $search; ?>">
                                <button class="btn btn-outline-light"> Search </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-end pt-4 pe-4">
                        <a href="view-student-details.php?search=<?php echo $search; ?> &sort=asc" class="btn btn-outline-light">A-Z</a>
                        <a href="view-student-details.php? search=<?php echo $search; ?> &sort=desc" class="btn btn-outline-light ms-3 me-1">Z-A</a>
                        <a href="add-student-details.php" class="add-btn btn">+Add Student </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Academic Year</th>
                                <th>Phone Number</th>
                                <th>Photo</th>
                                <th width="90">Edit </th>
                                <th width="90">Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["course"]; ?></td>
                                        <td><?php echo $row["classyear"]; ?></td>
                                        <td><?php echo $row["phonenumber"]; ?></td>
                                        <td><img src="uploads/<?php echo $row["photo"]; ?>" alt="" width="100" height="100"
                                                class="rounded-circle object-fit-cover object-position-center"
                                                style="object-position: center;">
                                        </td>
                                        <td>
                                            <a href="edit-student-details.php?id=<?php echo $row["id"]; ?>"
                                                class="btn btn-md btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="delete-student-details.php?id=<?php echo $row["id"]; ?>"
                                                class="btn btn-md btn-danger"
                                                onclick="return confirm ('Delete this Student?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Records Found</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <?php
                        for ($i = 1; $i <= $totalPages; $i++) {
                            ?>
                            <li class="page-item <?php if ($page == $i)
                                echo "active"; ?> ">
                                <a class="page-link" href="?page =<?php echo $i; ?>
                        &search =<?php echo $search; ?> &sort =<?php echo strtolower($sort); ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <div class="text-center">
                    <p class="text-light fs-5">
                        Total Students: <strong><?php echo $totalRecords; ?> </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>