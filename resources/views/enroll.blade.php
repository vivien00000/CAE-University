<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    {{-- @include('layouts/navbar') --}}
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Enrollment Form</title>
    <style>
    #enroll {
            background-color: maroon;
            margin-left: 100;
            padding: 20;
        }

        .card {
            max-width: 70%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(230, 161, 13, 0.1);
            color: white;
            font-size: 15px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
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
    <div class="card" id="enroll">
        <h1>Enrollment Form</h1>
        <hr>
        <form action="/enroll" method="POST">
            @csrf <!-- CSRF protection for Laravel -->
            <h2>Student's Information</h2>
                <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="student_id" >Student ID Number:</label>
                                    <input type="text" id="student_id" placeholder="Ex. 70003-5545" name="student_id" required>
                                </div>
                                <div class="col-lg-3">
                                    <label>Student Type:</label>
                                    <input type="checkbox" id="new_student" name="student_type[]" value="new_student">
                                    <label for="new_student">New Student</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="checkbox" id="transferee" name="student_type[]" value="transferee">
                                    <label for="transferee">Transferee</label>
                                    <input type="checkbox" id="old" name="student_type[]" value="old">
                                    <label for="old">Old Student</label>
                                </div>

                               <div class="row">
                                <div class="col-lg-4">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" placeholder="Ex. Dela Cruz" name="last_name" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" placeholder="Ex. Juan" name="first_name" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" id="middle_name" placeholder="Ex. Cruz" name="middle_name" required>
                                </div>
                            </div>
                               </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" placeholder="Ex. JuanDelaCruz@gmail.com" name="email" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" id="phone" placeholder="Ex. 0995-222-2222" name="phone" required>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" id="dob" name="dob" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="pob">Place of Birth:</label>
                                    <input type="text" id="pob" placeholder="Ex. Rizal" name="pob" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="gender">Gender:</label>
                                    <select id="gender" name="gender" required>
                                        <option value="" disabled selected>Select your gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="course">Select Course:</label>
                                    <select id="course" name="course" required>
                                        <option value="">Select a course</option>
                                        <option value="computer_science">Computer Science</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="business_administration">Business Administration</option>
                                        <!-- Add more course options as needed -->
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="semester">Select Semester:</label>
                                    <select id="semester" name="semester" required>
                                        <option value="">Select a semester</option>
                                        <option value="fall">1st Semester</option>
                                        <option value="spring">2nd Semester</option>
                                        <option value="summer">Summer</option>
                                        <!-- Add more semester options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <h2>Permanent Address</h2>
                                <div class="col-lg-4">
                                    <label for="house_number">House number/ Unit number:</label>
                                    <input type="text" id="house_number" placeholder="Ex. 0001" name="house_number" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="street">Street:</label>
                                    <input type="text" id="street" placeholder="Ex. Kalye Uno" name="street" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="barangay">Barangay:</label>
                                    <input type="text" id="barangay" placeholder="Ex. Pag-asa" name="barangay" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="city">City:</label>
                                    <input type="text" id="city"  placeholder="Ex. Dagupan" name="city" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="province">Province:</label>
                                <input type="text" id="province"  placeholder="Ex. Pangasinan" name="province" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="postal_code">Postal Code:</label>
                                    <input type="text" id="postal_code"  placeholder="Ex. 2405" name="postal_code" required>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <h2>Parents Information</h2>
                                <div class="col-lg-6">
                                    <label for="father_name">Father's Full Name:</label>
                                    <input type="text" id="father_name"  placeholder="Ex. Andres Bonifacio" name="father_name" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="father_phone">Father's Phone Number:</label>
                                    <input type="tel" id="father_phone"  placeholder="Ex. 0995-222-2222" name="father_phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="father_address">Father's Address:</label>
                                    <input type="text" id="father_address"  placeholder="Ex. 0001, Kalye uno, Pagasa, Dagupan, Pangasinan" name="father_address" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="mother_name">Mother's Maiden Name:</label>
                                    <input type="text" id="mother_name" placeholder="Ex. Gabriella Silang"  name="mother_name" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="mother_phone">Mother's Phone Number:</label>
                                    <input type="tel" id="mother_phone" placeholder="Ex. 0995-222-2222"  name="mother_phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="mother_address">Mother's Address:</label>
                                    <input type="text" id="mother_address" placeholder="Ex. 0001, Kalye uno, Pagasa, Dagupan, Pangasinan" name="mother_address" required>
                                </div>
                                <div class="row">
                                    <hr>
                                    <h2>Emergency Contact</h2>
                                    <div class="col-lg-4">
                                        <label for="guardian_name">Name:</label>
                                        <input type="text" id="e_name" placeholder="Ex. Juana Dela Cruz" name="e_name" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="e_phone">Phone Number:</label>
                                        <input type="tel" id="e_phone" placeholder="Ex. 0995-222-2222"  name="e_phone" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="e_address">Address:</label>
                                        <input type="text" id="e_address" placeholder="Ex. 0001, Kalye uno, Pagasa, Dagupan, Pangasinan" name="e_address" required>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <div class="col-lg-8">
                                            <p><strong>CAE UNIVERSITY</strong></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="submit" value="Submit">
                                        </div>
                                    </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

    {{-- footer --}}
    @include('layouts/footer')
</body>
</html>
