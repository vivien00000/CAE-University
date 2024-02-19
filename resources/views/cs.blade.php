<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    {{-- @include('layouts/navbar') --}}
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cs.css">
</head>
<body>

    {{-- first navbar --}}
 <nav class="navbar bg-body-tertiary" id="color_nav">
    <div class="container-fluid px-1">
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
                    style="width: 15px; margin-right: 10px"
            /></a>
            <a href="#"
                ><img
                    src="img/twitter.png"
                    alt="twitter icon"
                    style="width: 15px; margin-right: 10px"
            /></a>
            <a href="#"
                ><img
                    src="img/in.png"
                    alt="linkedin icon"
                    style="width: 15px; margin-right: 10px"
            /></a>
            <a href="#"
                ><img
                    src="img/yt.png"
                    alt="youtube icon"
                    style="width: 15px; margin-right: 10px"
            /></a>
            <a href="#"
                ><img
                    src="img/insta.webp"
                    alt="instagram icon"
                    style="width: 15px; margin-right: 10px"
            /></a>
        </span>
    </div>
</nav>

{{-- second navbar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="second_nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"
            ><img src="img/caeLogo.png" alt="logo" id="logo"
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
                        href="/"
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
                            <a class="dropdown-item" href="/about">About CAE University</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/message_ceo"
                                >Message from Chairman</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="/merch"
                                >Merchandise</a
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
                    <ul class="dropdown-menu" id="prog_drop">
                        <li>
                            <a class="dropdown-item" href="/cs">Computer Sciences</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                                >Business Administration</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"
                                >Engineering</a
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
                            <a class="dropdown-item" href="/enroll">Enroll Now!</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/inquire"
                                >Inquire!</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/user_login" data-toggle="modal" data-target="#loginModal">
                        <b>LOG IN</b>
                    </a>
                </li>
            </ul>
            </div>
    </div>
</nav>


    <div class="container">

        <img src="img/banner_CS.webp" alt="Computer Science" id="image-banner">
        <h1 id="head-text">Bachelor of Science in Computer Science</h1>

        <h3>Program Educational Objectives (PEO)</h3>
        <ul>
            <li>Practice as successful Computer Science professionals for the advancement of society.</li>
            <li>Promote professionalism in the area of Computer Science.</li>
        </ul>
        <h2>Student Outcomes (SO)</h2>
        <ul>
            <li>An ability to apply knowledge of computing and mathematics appropriate to the program's student outcomes and to the discipline.</li>
            <li>An ability to analyze a problem, and identify and define the computing requirements appropriate to its solution.</li>
        </ul>
        <h2>Possible Careers:</h2>
        <ul>
            <li>Computer Scientist</li>
            <li>Applications Developer</li>

        </ul>
        <h2>Curriculum:</h2>
        <ul>
            <li><a href="2008-2009_curriculum.pdf" target="_blank">2008-2009 Curriculum</a></li>
            <li><a href="2013-2014_curriculum.pdf" target="_blank">2013-2014 Curriculum</a></li>
            <li><a href="2014-2015_curriculum.pdf" target="_blank">2014-2015 Curriculum</a></li>
        </ul>
        <p>For more information or to inquire, you may <a href="pre_register_form.html" class="button">PRE-REGISTER ONLINE</a> and our Admission Officer will contact you to provide more details and answer your questions.</p>
    </div>
        {{-- footer --}}
        @include('layouts/footer')
    </body>
    </html>
