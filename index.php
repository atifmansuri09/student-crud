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
            <div class="row">
                <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="hero-img1">
                        <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                        <p class="Header ms-5 text-light fw-bold">WELCOME TO</p>
                        <p class="Header ms-5 text-light fw-bold">HOGWARTZ</p>
                        <p class="Body text-light"><i>The School of Witchcraft and Wizardry</i></p>
                        <p class="Body text-light"><i>Manage your magical academic<br> journey with ease.</i></p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="hero-img2">
                        <p class="Header ms-5 text-light fw-bold">EVERY STUDENT</p>
                        <p class="Header ms-5 text-light fw-bold">HAS A STORY</p>
                        <p class="Body text-light"><i>Manage Your Students</i></p>
                        <p class="Body text-light"><i>Keep student records organized,<br>
                                accessible, and easy to manage.</i></p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-img3">
                        <p class="Header ms-5 text-light fw-bold">LEARN. GROW.</p>
                        <p class="Header ms-5 text-light fw-bold">EXCEL.</p>
                        <p class="Body text-light"><i>Manage Academic Life</i></p>
                        <p class="Body text-light"><i>Keep track of courses, attendance,<br>
                                and student performance in one place.</i></p>
                    </div>
                </div>
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
                <p class="About-Us-para text-light fs-4 mt-3"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"> <b>Hogwarts School
                        of Witchcraft and
                        Wizardry</b> is a
                    place where young witches and wizards come together to learn, explore, and discover their magical
                    potential.</p>

                <p class="About-Us-para text-light fs-4 mt-3"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;">Hogwarts is home to
                    four legendary houses, each with its
                    own values, traditions, and unique identity.
                </p>

                <p class="About-Us-para text-light fs-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;">Bringing together
                    the magic of
                    Hogwarts and the power of
                    technology, our system makes academic management simple, efficient, and convenient.
                </p>
            </div>
        </section>
    </div>
    <!-- HOGWARTS HOUSE (CARDS) -->
    <div class="container Hero-section">
        <div class="row card-section">
            <div class="col-lg-12">
                <h1 class="text-center text-light mt-5 mb-4">HOGWARTS HOUSES</h1>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5">
                <img src="Gryffindor.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Gryffindor</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5">
                <img src="Hufflepuff.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Hufflepuff</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5">
                <img src="RavenClawCrest.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">RavenClaw Crest</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5">
                <img src="Slytherin.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Slytherin</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- MANAGEMENT SYSTEM -->
    <div class="container Management-Section">
        <section class="Management row" id="Management">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="About-Us-header fw-bold text-light text-center mt-2 mb-5">MANAGEMENT SYSTEM</h1>
                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>1.) </b>
                     <b>Our Student Management System</b> makes managing student records simple with complete CRUD functionality. Add, view, update, and delete student information with ease.</p>

                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>2.) </b>Keep all student data organized and structured in one place, making records easy to access and manage.
                </p>

                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>3.) </b>With a clean UI and simple features, the system provides a smooth and efficient way to manage student information.
                </p>
                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>4.) </b>
                     Stay on top of student information with a system designed for quick and hassle-free record management. Everything stays within easy reach.</p>

                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>5.) </b>From maintaining individual student profiles to keeping records up to date, the system keeps your information neat and well structured.
                </p>

                <p class="About-Us-para text-light fs-4 mt-4"
                    style="line-height:40px;font-family:'Tongari Regular',serif;font-size: 25.2px;"><b>6.) </b>Designed with simplicity in mind, the platform offers a clean experience that makes everyday student management faster and more convenient.
                </p>
            </div>
            <div class="Management-img col-lg-6 col-md-12 col-sm-12">
                <img src="hogwarts-management-img1.jpg" alt="Hogwarts Management Image 1">
                <img src="hogwarts-management-img2.jpg" alt="Hogwarts Management Image 2">
                <img src="hogwarts-management-img3.jpg" alt="Hogwarts Management Image 3">
            </div>
        </section>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>