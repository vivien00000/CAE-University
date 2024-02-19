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
            <a href="/admin_dashboard"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="/admin_notification"><i class="fas fa-bell"></i> Notifications</a>
                    <a href="/admin_faculty"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
                    <a href="/students"><i class="fas fa-user-graduate"></i> Students</a>
                    <a href="/admin_merch"><i class="fas fa-shopping-cart"></i> Merchandise</a>
                    <a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
</body>
</html>
