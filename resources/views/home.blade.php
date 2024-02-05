<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Home</title>
        <style>
            body {
                font-family: "Roboto", Helvetica, Arial, Lucida, sans-serif;
            }
            #first_nav {
                color: white;
                padding: 0px;
                margin: 0px;
                padding-left: 30px;
            }

            #color_nav {
                background-color: maroon;
            }
            #top_email {
                color: white;
                margin-left: 50px;
            }
            #call {
                width: 25px;
                margin-top: 0px;
                font-family: "Open Sans", Arial, sans-serif;
            }
            #mail {
                width: 25px;
                margin-right: 10px;
                font-family: "Open Sans", Arial, sans-serif;
            }
            #icons {
                padding-bottom: 5px;
                padding-right: 50px;
            }
            #second_nav {
                background-color: white;
                font-size: 20px;
                padding-bottom: 0px;
            }
            #logo {
                width: 200px;
                padding: 15px 0px 30px 35px;
            }
            #navbarNavDropdown {
                display: flex;
                justify-content: right;
                padding: 30px 10px 20px 0px;
            }
            .nav-item {
                padding-right: 20px;
            }
            #carouselExampleCaptions {
                background-image: url(https://www.ama.edu.ph/wp-content/uploads/2017/05/AMA_Univ_slide_01.jpg);
            }
            #about_section {
                background-color: maroon;
            }
            #about_section2 {
                color: azure;
                text-align: center;
                padding: 70px 70px;
            }
            .carousel {
                padding: 100px;
            }
        </style>
    </head>
    <body>
        {{-- first navbar --}}
        <nav class="navbar bg-body-tertiary" id="color_nav">
            <div class="container-fluid">
                <span class="navbar-text" id="first_nav">
                    <img src="img/call_white.png" alt="call icon" id="call" />
                    Call Us: 1234-5678
                    <a href="#" id="top_email"
                        ><img
                            src="img/mail_white.jpg"
                            alt="mail_icon"
                            id="mail"
                        />cae_university@amaes.edu.ph</a
                    >
                </span>
                <span id="icons">
                    <a href="#"
                        ><img
                            src="img/fb.png"
                            alt="fb icon"
                            style="width: 20px; margin-right: 15px"
                    /></a>
                    <a href="#"
                        ><img
                            src="img/twitter.png"
                            alt="twitter icon"
                            style="width: 20px; margin-right: 15px"
                    /></a>
                    <a href="#"
                        ><img
                            src="img/in.png"
                            alt="linkedin icon"
                            style="width: 20px; margin-right: 15px"
                    /></a>
                    <a href="#"
                        ><img
                            src="img/yt.png"
                            alt="youtube icon"
                            style="width: 20px; margin-right: 15px"
                    /></a>
                    <a href="#"
                        ><img
                            src="img/insta.webp"
                            alt="instagram icon"
                            style="width: 20px; margin-right: 15px"
                    /></a>
                </span>
            </div>
        </nav>

        {{-- second navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="second_nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"
                    ><img src="img/ama.svg.png" alt="logo" id="logo"
                /></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                ><b>HOME</b></a
                            >
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <b>ABOUT</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <b>PROGRAMS</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <b>ADMISSIONS</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"
                                ><b>LOG IN</b></a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- carousel --}}

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="img/ama_carou.webp"
                        class="carousel"
                        alt="carousel1"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            first slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou2.webp"
                        class="carousel"
                        alt="carousel2"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            second slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou3.webp"
                        class="carousel"
                        alt="carousel3"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            second slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou4.webp"
                        class="carousel"
                        alt="carousel4"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            third slide.
                        </p>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- about section --}}
        <nav class="navbar bg-body-tertiary" id="about_section">
            <div class="container-fluid">
                <span class="navbar-text col-md-8 offset-2" id="about_section2">
                    <h1>ABOUT AMA UNIVERSITY AND COLLEGES</h1>
                    <h3>
                        AMA University is a member of the AMA Education System
                        and the first in IT education and full online education
                        in the Philippines.
                    </h3>
                </span>
            </div>
        </nav>

        {{-- vision and mission --}}

        <div class="container-fluid">
            <div class="row offset-2">
                <div class="col-lg-4 ">
                    <img src="img/reputation.webp" alt="icons2" />

                </div>
                <div class="col-lg-4 ">
                    <img src="img/vission.webp" alt="icons2" />

                </div>
                <div class="col-lg-4 ">
                    <img src="img/campus.webp" alt="icons2" />

                </div>
            </div>
        </div>
    </body>
</html>
