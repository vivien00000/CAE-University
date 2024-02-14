<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    @include('layouts/navbar')
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cs.css">
</head>
<body>


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
