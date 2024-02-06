<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts/bootstap')
        <link rel="stylesheet" href="css/home.css">
    </head>
 
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
                    <a class="nav-link" aria-current="page" href="/user_login" data-toggle="modal" data-target="#loginModal">
                        <b>LOG IN</b>
                    </a>
                </li>
            </ul>
            </div>
    </div>
</nav>
