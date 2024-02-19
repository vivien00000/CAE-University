<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    {{-- @include('layouts/navbar') --}}
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title>Inquiry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .card {
            max-width: 70%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .privacy-notice {
            margin-top: 20px;
            font-size: 12px;
        }

        .privacy-notice a {
            color: blue;
        }
    </style>
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

    <div class="card">
        <h2>Inquiry Form</h2>
        <form action="/submit_inquiry" method="POST">
            @csrf
            <label for="first_name">First Name: *</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name: *</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="mobile_number">Mobile Number: *</label>
            <input type="tel" id="mobile_number" name="mobile_number" placeholder="Ex. 09123456789" required>

            <label for="program_interest">What program are you interested in?</label>
            <select id="program_interest" name="program_interest">
                <option value="college">College/Bachelor's Degree</option>
                <option value="entrepreneurship">Entrepreneurship</option>
                <option value="industrial_engineering">Industrial Engineering</option>
                <option value="computer_engineering">Computer Engineering</option>
                <option value="computer_science">Computer Science</option>
                <option value="information_technology">Information Technology</option>
                <option value="business_administration">Business Administration</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <input type="submit" value="Submit">

            <div class="privacy-notice">
                <p>
                    <strong>Privacy Notice</strong>
                    <br>
                    By filling out this form, you hereby consent that AMAes will get:
                    <ol>
                        <li>Your IP address and cookies from which you accessed our website, and details of which version of web browser and operating system you used,</li>
                        <li>The date and time of your visit to our website,</li>
                        <li>Google Analytics data, which is information on how you use our website, using cookies, and page tagging techniques to help us improve our website,</li>
                        <li>The website address of the website from which you accessed our website,</li>
                        <li>The approximate location from which you viewed our website.</li>
                    </ol>
                    To view the full text of our Privacy Policy, you may visit this page: <a href="http://www.amaes.edu.ph/amaes-privacy-policy">AMAES Privacy Policy</a>.
                </p>
            </div>
        </form>
    </div>

    {{-- footer --}}
    @include('layouts/footer')
</body>
</html>
