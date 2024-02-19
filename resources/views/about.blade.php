<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts/navbar')
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title>CAE University & Colleges</title>
</head>
    <div class="container-fluid" id="about_page">
        <h1 id="h1-text">About CAE University and Colleges</h1>
        <img src="img/univ.jpg" id ="university"alt="University Image">
        <h2 id="h2-text">CAE UNIVERSITY IS A TOP CHOICE FOR IT BASED EDUCATION IN THE PHILIPPINES</h2>
        <div class="reasons-container">
            <div class="reasons">
                <h3>5 Reasons Why CAE University Remains to be a Top Choice for Excellent IT Education:</h3>
                <ul>
                    <li>A pioneer in the field of IT education (Founded in 1980)</li>
                    <li>Quality Graduates (graduates are among the highest paid employees in the country based on jobstreet data)</li>
                    <li>Reputable Industry Partners (Microsoft, Google, Cisco, etc.)</li>
                    <li>Advanced Learning Method (Offers online education)</li>
                    <li>Highly Accredited by Private and Government Institutions (CHED, PACUCOA, ABET, etc.)</li>
                </ul>
            </div>
            <div class="reasons">
                <img src="img/caeLogo.png" alt="CAELogo">
            </div>
        </div>
        <div class="cae-container" >
            <h2 id="h2-text" >About the CAE Education System</h2>
            <p>The CAE Education System is a leading provider of IT-based education in the Philippines, and its flagship institution, AMA University and Colleges, is a member of this esteemed system. Founded by Dr. Amable R. Aguiluz V in 1980 and named after his father, Hon. Amable M. Aguiluz, AMA has become the largest network of colleges and universities in Asia, producing graduates who are highly competent in various technologies and applications needed in the industry.</p>
            <p>CAE's focus on IT education means that technology is integrated into all of its programs, providing students with an advantage in the use of different industry-required business applications and making them tech-savvy. The AMA Education System is dedicated to providing quality education that prepares students for promising careers, and as the pioneer in IT education and online learning in the Philippines, AMAES offers a holistic, high-quality education to produce graduates who are ready to meet the demands of the times. This commitment to excellence has made AMA Education System a reliable and trusted provider of education in the Philippines.</p>
        </div>
    </div>
    @include('layouts/footer')

</html>
