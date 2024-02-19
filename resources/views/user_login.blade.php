<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts/bootstap')
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/login.js"></script>
    <title>CAE Univerity</title>
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
<nav class="img-fluid">
    <div class="container-fluid">
        <a href="/"><span><img src="img/caeLogo.png" alt="logo" id="logo2"/></span></a>
</nav>
<div class="container-fluid" id="login_form_container">
    <div class="row">
        <div class="col-lg-4">
            <div class="login-container">
                <h2>Login</h2>
                <form id="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email_address" required value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                        <a href="#">Forgot Password!</a>
                    </div>
                </form>
                <div id="message" class="message"></div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
