<?php
session_start();
if (!isset($_SESSION["admin_name"])) {
    header("Location:login.php");
}
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
    <!-- <nav class="navbar navbar-expand-lg navbar-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" target="_blank"><img class="main-logo"
                    src="images/hogwarts-logo-img.png"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link me-3 ms-2 btn" href="Home" target="_blank">Home</a>
                    <a class="nav-link me-3 btn" href="add-student-details.php" target="_blank">Add Student</a>
                    <a class="nav-link me-3 btn active" href="view-student-details.php" target="_blank">View
                        Students</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- SIDEBAR -->
    <div class="container-fluid">
        <div class="row">
             <!-- SIDEBAR -->
            <div class="Sidebar col-3">
                <ul class="nav gap-3 flex-column nav-pills justify-content-center" style="height:100vh;">
                    <li class="nav-item mb-3">
                        <a href="adminindex.php" class=""><img src="images/hogwarts-dashboard-logo.png"class="d-block mx-auto" alt="" style="width:45%;"></a>
                        <h3 class="text-center pt-0" style="color:var(--cream);letter-spacing: 1px;font-family: 'Times New Roman', Times, serif;color:var(--border);">HOGWARTS</h3>
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
                        <a class="nav-link" href="add-student-details.php"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="mb-2 me-2 bi bi-person-fill-add"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                            </svg>Add Magician</a>
                    </li>
                    <li class="nav-item active">
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
            <div class="container-fluid col-lg-9 mt-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Hogwarts Magicians </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6 pt-4">
                                <form method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control ms-4"
                                            placeholder="Search Student...." value="<?php echo $search; ?>">
                                        <button class="btn btn-outline-dark"> Search </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 text-end pt-4 pe-4">
                                <a href="view-student-details.php?search=<?php echo $search; ?> &sort=asc"
                                    class="btn btn-outline-daek">A-Z</a>
                                <a href="view-student-details.php? search=<?php echo $search; ?> &sort=desc"
                                    class="btn btn-outline-dark ms-3 me-1">Z-A</a>
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
                                                <td>
                                                    <?php echo $row["id"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["name"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["email"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["course"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["classyear"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["phonenumber"]; ?>
                                                </td>
                                                <td><img src="uploads/<?php echo $row["photo"]; ?>" alt="" width="100"
                                                    height="100"
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
                            <p class="fs-5">
                                Total Students: <strong>
                                    <?php echo $totalRecords; ?>
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="mb-0 text-center">Hogwarts Students </h3>
            </div>
            <div class="card-body>">
                <div class="row mb-3">
                    <div class="col-md-6 pt-4">
                        <form method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control ms-4"
                                    placeholder="Search Student...." value="<?php echo $search; ?>">
                                <button class="btn btn-outline-light"> Search </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-end pt-4 pe-4">
                        <a href="view-student-details.php?search=<?php echo $search; ?> &sort=asc"
                            class="btn btn-outline-light">A-Z</a>
                        <a href="view-student-details.php? search=<?php echo $search; ?> &sort=desc"
                            class="btn btn-outline-light ms-3 me-1">Z-A</a>
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
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>