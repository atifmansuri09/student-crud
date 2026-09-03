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
            <a class="navbar-brand" href="index.php"><img class="main-logo" src="images/hogwarts-logo-img.png"></a>
            <a class="navbar-brand" href="login.php"><button class="btn btn-outline-light">Login</button></a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="row">
                <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="hero-img1">
                        <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                        <p class="Header ms-5 fw-bold">WELCOME TO</p>
                        <p class="Header ms-5 fw-bold">HOGWARTZ</p>
                        <p class="Body"><i>The School of Witchcraft and Wizardry</i></p>
                        <p class="Body"><i>Manage your magical academic<br> journey with ease.</i></p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="hero-img2">
                        <p class="Header ms-5 fw-bold">EVERY STUDENT</p>
                        <p class="Header ms-5 fw-bold">HAS A STORY</p>
                        <p class="Body"><i>Manage Your Students</i></p>
                        <p class="Body"><i>Keep student records organized,<br>
                                accessible, and easy to manage.</i></p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12">
                    <div class="hero-img3">
                        <p class="Header ms-5 fw-bold">LEARN. GROW.</p>
                        <p class="Header ms-5 fw-bold">EXCEL.</p>
                        <p class="Body"><i>Manage Academic Life</i></p>
                        <p class="Body"><i>Keep track of courses, attendance,<br>
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
    <div class="container-fluid About-Section py-5">
        <section class="About-Us row" id="About-Us">
            <div class="About-Us-img col-lg-6 col-md-12 col-sm-12">
                <img src="images/about-hogwarts-img.png" alt="About Hogwarts Image" class="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="About-Us-header fw-bold text-center mt-2 mb-5">ABOUT US</h1>
                <p class="About-Us-para fs-4 mt-3" style="font-family:'Tongari Regular',serif;">
                    <b>Hogwarts School
                        of Witchcraft and
                        Wizardry</b> is a
                    place where young witches and wizards come together to learn, explore, and discover their magical
                    potential.
                </p>

                <p class="About-Us-para fs-4 mt-3" style="font-family:'Tongari Regular',serif;">
                    Hogwarts is home to
                    four legendary houses, each with its
                    own values, traditions, and unique identity.
                </p>

                <p class="About-Us-para fs-4" style="font-family:'Tongari Regular',serif;">
                    Bringing together
                    the magic of
                    Hogwarts and the power of
                    technology, our system makes academic management simple, efficient, and convenient.
                </p>
            </div>
        </section>
    </div>
    <!-- HOGWARTS HOUSE (CARDS) -->
    <div class="container-fluid mt-2 pt-5 House-section">
        <div class="row card-section">
            <div class="col-lg-12">
                <h1 class="Section-heading text-center mb-4 pb-4">HOGWARTS HOUSES</h1>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5 border-0">
                <img src="images/Gryffindor.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Gryffindor</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5 border-0">
                <img src="images/Hufflepuff.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Hufflepuff</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5 border-0">
                <img src="images/RavenClawCrest.png" class="card-img-top" alt="..."
                    style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">RavenClaw Crest</h5>
                </div>
            </div>
            <div class="Card col-lg-5 col-md-6 col-sm-6 card mx-auto mb-5 border-0">
                <img src="images/Slytherin.png" class="card-img-top" alt="..." style="width:100%;aspect-ratio:2/2;">
                <div class="card-body">
                    <h5 class="card-title text-center h3" style="text-transform:uppercase;">Slytherin</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- MANAGEMENT SYSTEM -->
    <div class="container-fluid Management-Section py-5 mt-2">
        <section class="Management row" id="Management">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="About-Us-header fw-bold text-center mt-2 mb-5">MANAGEMENT SYSTEM</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- MANAGEMENT SLIDER 1 -->
                <div id="carouselExampleIntervalManagement1" class="carousel slide management-slider"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img1.jpg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img2.jpg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img3.jpg" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIntervalManagement1" data-bs-slide="prev">
                        <span class="Carousel-Btn carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIntervalManagement1" data-bs-slide="next">
                        <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="About-Us-para fs-4 mt-4" style="font-family:'Tongari Regular',serif;"><b>1.)
                    </b>
                    <b>Our Student Management System</b> makes managing student records simple with complete CRUD
                    functionality. Add, view, update, and delete student information with ease.
                </p>

                <p class="About-Us-para fs-4 mt-4" style="font-family:'Tongari Regular',serif;"><b>2.)
                    </b>Keep all
                    student data organized and structured in one place, making records easy to access and manage.
                </p>
            </div>
            <div class="Management-img col-lg-6 col-md-12 col-sm-12">
                <p class="About-Us-para fs-4 mt-4" style="font-family:'Tongari Regular',serif;"><b>3.)
                    </b>With a
                    clean UI and simple features, the system provides a smooth and efficient way to manage student
                    information.
                </p>
                <p class="About-Us-para fs-4 mt-4" style="font-family:'Tongari Regular',serif;"><b>4.)
                    </b>Designed
                    with simplicity in mind, the platform offers a clean experience that makes everyday student
                    management faster and more convenient.
                </p>
                <!-- MANAGEMENT SLIDER 2 -->

                <div id="carouselExampleIntervalManagement2" class="carousel slide management-slider"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img1.jpg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img2.jpg" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="images/hogwarts-management-img3.jpg" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIntervalManagement2" data-bs-slide="prev">
                        <span class="Carousel-Btn carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIntervalManagement2" data-bs-slide="next">
                        <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </div>
    <!-- HEAD STAFF SECTION (IMAGE SLIDER) -->

    <h1 class="Head-Staff-header text-center fw-bold mt-2 py-3">OUR HEAD STAFF</h1>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="row">
                <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="headstaff-img1">
                        <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                        <p class="Header ms-5 fw-bold text-light text-center">ALBUS DUMBLEDORE</p>
                        <p class="Sub-Header ms-5 text-light fw-bold text-center"><i>~HEADMASTER OF HOGWARTS~</i></p>
                        <!-- <p class="Body text-light"><i>The School of Witchcraft and Wizardry</i></p> -->
                        <p class="Body text-light text-center">A wise and powerful wizard who guides Hogwarts with
                            knowledge, compassion, and courage.</p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="2000">
                    <div class="headstaff-img2">
                        <p class="Header ms-5 text-light fw-bold text-center">SEVERUS SNAPE</p>
                        <p class="Sub-Header ms-5 text-light fw-bold text-center"><i>~PROFESSOR OF POTION~</i></p>
                        <p class="Body text-light text-center">A strict and highly skilled professor known for his
                            mastery of
                            Potions and complex magical knowledge.</p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12">
                    <div class="headstaff-img3">
                        <p class="Header ms-5 text-light fw-bold text-center">MINERVA McGONAGALL</p>
                        <!-- <p class="Header ms-5 text-light fw-bold">EXCEL.</p> -->
                        <p class="Sub-Header text-light text-center fw-bold"><i>~PROFESSOR OF TRANSFIGURATION~</i></p>
                        <p class="Body text-light text-center">A respected professor known for her discipline, wisdom,
                            and
                            exceptional skill in Transfiguration.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="Carousel-Btn carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="Carousel-Btn carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- FREUENTLY ASKED QUESTIONS -->
    <div class="FAQ-Section container-fluid px-5">
        <h1 class="text-center mt-3 pt-4">FAQs</h1>
        <div class="FAQ-Sub-Section row px-5">
            <div class="accordion p-5" id="accordionPanelsStayOpenExample">
                <div class="accordion-item col-lg-12 col-sm-6 p-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            What is Hogwarts?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <strong class="fs-3">Hogwarts School of Witchcraft and Wizardry is a magical school where
                                young
                                witches and
                                wizards are trained in the art of magic. Students learn various magical subjects while
                                living and growing together within the castle.</strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-12 col-sm-6">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            What are the four Hogwarts Houses?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <strong class="fs-3">Hogwarts is divided into four houses: Gryffindor, Slytherin, Ravenclaw,
                                and
                                Hufflepuff.
                                Each house represents different qualities and traditions, giving students a unique
                                identity
                                throughout their time at Hogwarts.</strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-12 col-sm-6">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            What is the Student Management System?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <strong class="fs-3">The Student Management System is a web-based application created to
                                make
                                managing
                                student information easier and more organized. It provides a structured way to maintain
                                student records in one centralized system.</strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-12 col-sm-6">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            What can I do with the Student Management System?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <strong class="fs-3">The system provides CRUD functionality for managing student records.
                                You
                                can add new
                                students, view existing information, update records when required, and delete records
                                that
                                are no longer needed.</strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-12 col-sm-6">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive">
                            Is the Student Management System easy to use?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <strong class="fs-3">Yes, the system is designed with a clean and straightforward interface.
                                Its
                                simple
                                layout and essential features make it easy to navigate and manage student information
                                without unnecessary complexity.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>