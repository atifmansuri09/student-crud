<!DOCTYPE html>
<html>

<head>
    <title>Index Page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar p-0">
        <div class="Nav py-0 px-1">
            <a class="navbar-brand" href="index.php"><img class="main-logo" src="hogwarts-logo-img.png"></a>
            <a class="navbar-brand" href="login.php"><button class="btn btn-outline-light">Login</button></a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <div id="carouselExampleInterval" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="hero-img1">
                    <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                    <p class="Header ms-5 text-light fw-bold">WELCOME TO</p>
                    <p class="Header ms-5 text-light fw-bold">HOGWARTZ</p>
                    <p class="Body text-light"><i>The School of Witchcraft and Wizardry</i></p>
                    <p class="Body text-light"><i>Manage your magical academic<br> journey with ease.</i></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="hero-img2">
                    <p class="Header ms-5 text-light fw-bold">EVERY STUDENT</p>
                    <p class="Header ms-5 text-light fw-bold">HAS A STORY</p>
                    <p class="Body text-light"><i>Manage Your Students</i></p>
                    <p class="Body text-light"><i>Keep student records organized,<br>
                            accessible, and easy to manage.</i></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-img3">
                    <p class="Header ms-5 text-light fw-bold">LEARN. GROW.</p>
                    <p class="Header ms-5 text-light fw-bold">EXCEL.</p>
                    <p class="Body text-light"><i>Manage Academic Life</i></p>
                    <p class="Body text-light"><i>Keep track of courses, attendance,<br>
                            and student performance in one place.</i></p>
                </div>
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="Carousel-Btn  carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ABOUT US SECTION -->
    <div class="container-fluid About-Section">
        <section class="About-Us row" id="About-Us">
            <div class="About-Us-img col-lg-6 col-md-12 col-sm-12">
                <img src="about-hogwarts-img.png" alt="About Hogwarts Image" class="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="About-Us-header fw-bold text-light text-center mt-2 mb-5">ABOUT US</h1>
                <p class="About-Us-para text-light fs-4 mt-3"> <b>Hogwarts School of Witchcraft and Wizardry</b> is a
                    place where young witches and wizards come together to learn, explore, and discover their magical
                    potential.</p>

                <p class="About-Us-para text-light fs-4 mt-3">Our Student Management System makes it easier to manage
                    student records, academic details, attendance, and performance in one organized place.</p>

                <p class="About-Us-para text-light fs-4">Bringing together the magic of Hogwarts and the power of
                    technology, our system makes academic management simple, efficient, and convenient.</p>

            </div>
    </div>
    </section>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>