<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts/bootstap')
        <link rel="stylesheet" href="css/home.css">
        <title>CAE University</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    </head>
    <body>
       @include('layouts/navbar')
        {{-- carousel --}}

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/online.jpg" class="d-block w-50 p-5" alt="ama_carou.webp">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">CAE Basic Education</h2>
                   <h3 class="carou_text2"> Online learning for a better education.</h3>
                   <button class="buttons">Register Now</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou2.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">CAE Basic Education</h2>
                   <h3 class="carou_text2"> Online learning for a better education.</h3>
                   <button class="buttons">Learn more</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou3.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">CAE Basic Education</h2>
                   <h3 class="carou_text2"> Online learning for a better education.</h3>
                   <button class="buttons">Pre-register online</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou4.jpg" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">CAE Basic Education</h2>
                   <h3 class="carou_text2"> Online learning for a better education.</h3>
                   <button class="buttons">Learn more</button>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        {{-- about section --}}
        <nav class="navbar bg-body-tertiary" id="about_section">
            <div class="container-fluid">
                <span class="navbar-text col-md-8 offset-2" id="about_section2">
                    <h2>ABOUT CAE UNIVERSITY AND COLLEGES</h2>
                    <h4>
                        CAE University is a member of the CAE Education System
                        and the first in IT education and full online education
                        in the Philippines.
                    </h4>
                </span>
            </div>
        </nav>

        {{-- vision and mission --}}

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <img src="img/reputation.webp" alt="icons2" class="about2ndline"/>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsa dignissimos explicabo voluptas perspiciatis fugiat
                        numquam quod ea quis eius doloremque.
                    </p>

                </div>
                <div class="col-lg-3">
                    <img src="img/vission.webp" alt="icons2" class="about2ndline"/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Nesciunt quisquam sit repellat a illo. Pariatur
                        veniam mollitia animi voluptatibus consectetur?
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="img/campus.webp" alt="icons2"  class="about2ndline"/>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Minus reprehenderit officiis sint veritatis quia
                        iste saepe. Non ut nesciunt perferendis?
                    </p>
                </div>
            </div>
        </div>
         <!-- space -->
    <div class="d-flex" style="height: 10px">
        <div class="vr"></div>
      </div>
        {{-- programs offered --}}
         <!-- space -->
    <div class="d-flex" style="height: 50px">
        <div class="vr"></div>
      </div>
        <div class="container-fluid" id="programs">
            <h1 class="programs"><b>PROGRAMS OFFERED</b></h1>
            <div class="row">
                <div class="col-lg-4">
                 <img src="img/BS1.jpg" alt="icon" class="offered" />
                    <h3 class="collegeof">College of Computer Studies</h3>
                </div>
                <div class="col-lg-4">
                 <img src="img/BS2.jpg" alt="icon" class="offered" />
                    <h3 class="collegeof">College of Engineering</h3>
                </div>
                <div class="col-lg-4">
                <img src="img/BS3.jpg" alt="icon" class="offered" />
                    <h3 class="collegeof">College of Business Administration</h3>
            </div>
            </div>
        </div>

        {{-- footer --}}
@include('layouts/footer')

    </body>
</html>
