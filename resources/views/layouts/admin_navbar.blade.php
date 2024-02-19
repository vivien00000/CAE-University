<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/faculty.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    {{-- first navbar --}}
<nav class="navbar bg-body-tertiary" id="color_nav">
    <div class="container-fluid px-1">
        <span class="navbar-text" id="first_nav">

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
        <div class="sidebar">
<<<<<<< HEAD
            <a href="/admin_dashboard"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="/admin_notification"><i class="fas fa-bell"></i> Notifications</a>
                    <a href="/admin_faculty"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
                    <a href="/students"><i class="fas fa-user-graduate"></i> Students</a>
                    <a href="/admin_merch"><i class="fas fa-shopping-cart"></i> Merchandise</a>
=======
<<<<<<< HEAD
            <a href="/admin_dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a href="/admin_account"><i class="fas fa-user"></i> Account</a>
            <div class="dropdown">
                <a href="/admin_messages"><i class="fas fa-envelope"></i> Messages</a>

            </div>
                    <a href="/admin_notification"><i class="fas fa-bell"></i> Notifications</a>
                    <a href="/admin_faculty"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
                    <a href="/students"><i class="fas fa-user-graduate"></i> Students</a>
                    <a href="/admin_department"><i class="fas fa-building"></i> Departments</a>
                    <a href="/admin_enrollment"><i class="fas fa-user-plus"></i> Enrollment</a>
=======
            <a href="/dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a href="/profile"><i class="fas fa-user"></i> Account</a>
            <div class="dropdown">
                <a href="/messages"><i class="fas fa-envelope"></i> Messages</a>

            </div>
                    <a href="/notification"><i class="fas fa-bell"></i> Notifications</a>
                    <a href="/faculty"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
                    <a href="/students"><i class="fas fa-user-graduate"></i> Students</a>
                    <a href="/department"><i class="fas fa-building"></i> Departments</a>
                    <a href="/enrollment"><i class="fas fa-user-plus"></i> Enrollment</a>
>>>>>>> 6c63ac9ae85471de6d30031f1b82958acc553f63
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
</body>
</html>
