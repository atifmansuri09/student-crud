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
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="row">
                <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                    <div class="hero-img1">
                        <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                        <p class="Header ms-5 fw-bold">WELCOME TO</p>
                        <p class="Header ms-5 fw-bold">HOGWARTZ</p>
                        <p class="Body"><i>The School of Witchcraft and Wizardry</i></p>
                        <p class="Body"><i>Manage your magical academic<br> journey with ease.</i></p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
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
    <div class="container-fluid About-Section py-5" id="AboutUs">
        <section class="About-Us row" id="About-Us">
            <div class="About-Us-img col-lg-6 col-md-12 col-sm-12">
                <img src="images/about-hogwarts-img.png" alt="About Hogwarts Image" class="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
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
    <div class="container-fluid mt-2 pt-5 House-section" id="HogwartsHouses">
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
    <div class="container-fluid Management-Section py-5 mt-2" id="OurManagement">
        <section class="Management row" id="Management">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="About-Us-header fw-bold text-center mt-2 mb-5">MANAGEMENT SYSTEM</h1>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <!-- MANAGEMENT SLIDER 1 -->
                <div id="carouselExampleCaptionManagement1" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptionManagement1" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="row">
                            <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                                <div class="management-img1">
                                    <p class="Sub-Header fw-bold text-light text-center">DINING HALL</p>
                                </div>
                            </div>
                            <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                                <div class="management-img2">
                                    <p class="Sub-Header text-light fw-bold text-center">LIBRARY</p>
                                </div>
                            </div>
                            <div class="carousel-item col-lg-12 col-md-12 col-sm-12">
                                <div class="management-img3">
                                    <p class="Sub-Header text-light fw-bold text-center">CLASSROOM</p>
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

                <div id="carouselExampleCaptionManagement2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="row">
                            <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                                <div class="management-img4">
                                    <p class="Sub-Header fw-bold text-light text-center">MUSEUM</p>
                                </div>
                            </div>
                            <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                                <div class="management-img5">
                                    <p class="Sub-Header text-light fw-bold text-center">GROUND</p>
                                </div>
                            </div>
                            <div class="carousel-item col-lg-12 col-md-12 col-sm-12">
                                <div class="management-img6">
                                    <p class="Sub-Header text-light fw-bold text-center">CHESS GROUND</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionManagement2"
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
            </div>
        </section>
    </div>
    <!-- HEAD STAFF SECTION (IMAGE SLIDER) -->

    <h1 class="Head-Staff-header text-center fw-bold mt-2 py-3" id="HeadStaff">OUR HEAD STAFF</h1>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
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
                <div class="carousel-item active col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
                    <div class="headstaff-img1">
                        <!-- <img src="hero-img3.jpg" class="d-block w-100" alt="..."> -->
                        <p class="Header ms-5 fw-bold text-light text-center">ALBUS DUMBLEDORE</p>
                        <p class="Sub-Header ms-5 text-light fw-bold text-center"><i>~HEADMASTER OF HOGWARTS~</i></p>
                        <!-- <p class="Body text-light"><i>The School of Witchcraft and Wizardry</i></p> -->
                        <p class="Body text-light text-center">A wise and powerful wizard who guides Hogwarts with
                            knowledge, compassion, and courage.</p>
                    </div>
                </div>
                <div class="carousel-item col-lg-12 col-md-12 col-sm-12" data-bs-interval="3000">
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
    <div class="FAQ-Section container-fluid px-5" id="FAQs">
        <h1 class="text-center mt-3 pt-4">FAQs</h1>
        <div class="FAQ-Sub-Section row px-5">
            <div class="accordion p-5" id="accordionPanelsStayOpenExample">
                <div class="accordion-item col-lg-12 col-md-12 col-sm-12 p-0">
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
                <div class="accordion-item col-lg-12 col-md-12 col-sm-12">
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
                <div class="accordion-item col-lg-12 col-md-12 col-sm-12">
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
                <div class="accordion-item col-lg-12 col-md-12 col-sm-12">
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
                <div class="accordion-item col-lg-12 col-md-12 col-sm-12">
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
    <!-- FOOTER SECTION -->
    <footer>
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-5 pt-2 column-1">
                        <h2 class="text-light mb-4 text-center">Quick Links</h2>
                        <ul class="navbar-nav">
                            <li><a href="#AboutUs" class="footer-text nav-link ms-5">About Us</a></li>
                            <li><a href="#HogwartsHouses" class="footer-text nav-link ms-5">Houses</a></li>
                            <li><a href="#OurManagement" class="footer-text nav-link ms-5">Management</a></li>
                            <li><a href="#HeadStaff" class="footer-text nav-link ms-5">Head Staff</a></li>
                            <li><a href="#FAQs" class="footer-text nav-link ms-5">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 column-2 pt-5">
                        <img src="images/hogwarts-color-logo.jpg" alt="" width="230" height="210"
                            class="d-block mx-auto" style="opacity:0.8;" class="">
                        <p class="footer-text fs-5 text-center"><i>“Where magic begins, and dreams take flight.”</i></p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 column-3 pt-5">
                        <h2 class="text-light mb-4 text-center">Social Links</h2>
                        <!-- <div> -->
                        <ul class="navbar-nav">
                            <li><a href="www.facebook.com" class="p-1 ftIcons nav-link text-center mb-2"><svg
                                        xmlns="http://www.facebook.com" width="35" height="35" fill="currentColor"
                                        class="bi bi-facebook footer-text" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg></a></li>
                            <li>
                                <!-- THREADS -->
                                <a href="www.threads.com" class="p-1 ftIcons nav-link text-center mb-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-threads footer-text" viewBox="0 0 16 16">
                                        <path
                                            d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161" />
                                    </svg></a>
                            </li>
                            <li>
                                <!-- INSTAGRAM -->
                                <a href="www.instagram.com" class="p-1 ftIcons nav-link text-center mb-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-instagram footer-text" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg></a>
                            </li>
                            <li>
                                <!-- TWITTER -->
                                <a href="www.twitter.com" class="ftIcons p-1 nav-link text-center mb-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-twitter-x footer-text" viewBox="0 0 16 16">
                                        <path
                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                    </svg></a>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 column-4 pt-5">
                        <h2 class="text-light mb-4 text-center">Contact Us</h2>
                        <p class="footer-text text-center fs-5 mb-4">
                            📍 Hogwarts Castle,
                            Scotland
                        </p>
                        <p class="footer-text text-center fs-5 mb-4">
                            ✉ info@hogwarts.edu
                        </p>
                        <p class="footer-text text-center fs-5 mb-4">
                            ☎ +44 1234 567890
                        </p>
                        <p class="footer-text text-center fs-5 mb-4">
                            🕐
                            Monday – Friday
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>