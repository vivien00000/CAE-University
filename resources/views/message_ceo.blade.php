<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/navbar')
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
  <title>University CEO Message</title>
  <style>


    #message-ceo {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #background{
        height: 20%;
        width: 100%;
    }
    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: block;
      border: 4px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .message {
      text-align: center;
    }

    @media (max-width: 768px) {
      .container {
        max-width: 90%;
      }
    }
  </style>
</head>
<body>
    <img src="img/BG2.jpg" alt="background web" id="background">
<div class="container" id="message-ceo">
    <h2 class ="text-center">Office of the Chairman</h2>
  <img src="img/ceo.jpg" alt="CEO Picture" class="profile-pic">
  <div class="message">
    <h5><b>Mr. Kevin Kenneth G. Daus</b></h5>
    <h6>Office of the Chairman</h6>
    <br/>
    <p id="text-center">We live in this period of human history where the whole world is right at our fingertips. The advent of computers has changed our lives and keeps changing the way we live. We now find ourselves in this transitory stage of social evolution where knowledge workers have become the most valuable capital of nations in the global village. This is the Age of Information. This is the Age of Technology. This is the Age of Knowledge. In the years to come, the shift from traditional modes of learning to what we may tentatively call “blended learning” will become more pronounced. All our campuses and branches have started utilizing online instruction or e-learning, making education more accessible anytime, anywhere. As the pioneer of online education, we shall soon venture into the establishment of the global online university. Our expansion plans, therefore, are three-pronged. First, physical expansion by establishing other campuses abroad. Second, virtual expansion by dominating cyber space through online education. Third, internal expansion by opening new branches in the Philippines. We remain steadfast in our commitment to produce globally competitive knowledge workers and we shall continue creating the demand for competent ICT manpower in the world market.</p>
  </div>
</div>

   {{-- footer --}}
   @include('layouts/footer')
</body>
</html>
