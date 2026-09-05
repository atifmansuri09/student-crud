<?php
require "connection.php";

session_start();
if (!isset($_SESSION["admin_name"])) {
    header("Location:login.php");
}

$sqltotal = "SELECT COUNT(*) AS total FROM students;";
$resulttotal = mysqli_query($conn, $sqltotal);
$total = mysqli_fetch_assoc($resulttotal)["total"];
$sqlfy = "SELECT COUNT(*) AS total FROM students WHERE classyear = 'FY';";
$resultfy = mysqli_query($conn, $sqlfy);
$fy = mysqli_fetch_assoc($resultfy)["total"];
$sqlsy = "SELECT COUNT(*) AS total FROM students WHERE classyear = 'SY';";
$resultsy = mysqli_query($conn, $sqlsy);
$sy = mysqli_fetch_assoc($resultsy)["total"];
$sqlty = "SELECT COUNT(*) AS total FROM students WHERE classyear = 'TY';";
$resultty = mysqli_query($conn, $sqlty);
$ty = mysqli_fetch_assoc($resultty)["total"];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
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

<!-- <body style="background-color:var(--border);height:auto;"> -->

<body>
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
                        <a class="nav-link active" href="adminindex.php" aria-current="page"><svg
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
            <div class="col-9">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                        <div class="hogwarts-card mt-5 py-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 px-5">
                                    <img src="images/hogwarts-color-logo.jpg" alt="" class="align-item-start"
                                        style="width:100%;opacity:0.7;filter:saturate(1.8);">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
                                    <p class="text-center record">
                                        <?php echo $total; ?>
                                    </p>
                                    <h2 class="magician-heading">TOTAL NUMBER OF MAGICIANS</h2>
                                </div>
                            </div>
                            <div class="year-overlay">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="year-card">
                                            <p class="record">
                                                <?php echo $fy; ?>
                                            </p>
                                            <h2 class="magician-heading">MAGICIANS IN <br> FY</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="year-card">
                                            <p class="record">
                                                <?php echo $sy; ?>
                                            </p>
                                            <h2 class="magician-heading">MAGICIANS IN <br> SY</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="year-card">
                                            <p class="record">
                                                <?php echo $ty; ?>
                                            </p>
                                            <h2 class="magician-heading">MAGICIANS IN <br> TY</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>