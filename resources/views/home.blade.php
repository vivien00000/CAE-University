<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts/bootstap')
        <link rel="stylesheet" href="css/home.css">
        <title>Home</title>
        <style>
           
        </style>
    </head>
    <body>
       @include('layouts/navbar')
        {{-- carousel --}}


        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="3"
                aria-label="Slide 4"
            ></button>
        </div>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/ama_carou.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">AMA Basic Education</h2> <br>
                   <h3 class="carou_text2"> Online learning for a better education.</h3>
                   <button class="buttons">Register Online</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou2.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">AMA Basic Education</h2> <br>
                        <h3 class="carou_text2"> Online learning for a better education.</h3>
                        <button class="buttons">Register Online</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou3.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">AMA Basic Education</h2> <br>
                        <h3 class="carou_text2"> Online learning for a better education.</h3>
                        <button class="buttons">Register Online</button>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/ama_carou4.webp" class="d-block w-50 p-5" alt="ama_carou.webp">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carou_text">AMA Basic Education</h2> <br>
                        <h3 class="carou_text2"> Online learning for a better education.</h3>
                        <button class="buttons">Register Online</button>
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




        {{-- <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="img/ama_carou.webp"
                        class="carousel"
                        alt="carousel1"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            first slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou2.webp"
                        class="carousel"
                        alt="carousel2"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            second slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou3.webp"
                        class="carousel"
                        alt="carousel3"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            second slide.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img
                        src="img/ama_carou4.webp"
                        class="carousel"
                        alt="carousel4"
                    />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>
                            Some representative placeholder content for the
                            third slide.
                        </p>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}

        {{-- about section --}}
        <nav class="navbar bg-body-tertiary" id="about_section">
            <div class="container-fluid">
                <span class="navbar-text col-md-8 offset-2" id="about_section2">
                    <h1>ABOUT AMA UNIVERSITY AND COLLEGES</h1>
                    <h3>
                        AMA University is a member of the AMA Education System
                        and the first in IT education and full online education
                        in the Philippines.
                    </h3>
                </span>
            </div>
        </nav>

        {{-- vision and mission --}}

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 py-5">
                    <img src="img/reputation.webp" alt="icons2" class="about2ndline ps-5 ms-3"/>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsa dignissimos explicabo voluptas perspiciatis fugiat
                        numquam quod ea quis eius doloremque.
                    </p>
                </div>
                <div class="col-lg-3 py-5">
                    <img src="img/vission.webp" alt="icons2" class="about2ndline ps-5 ms-3"/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Nesciunt quisquam sit repellat a illo. Pariatur
                        veniam mollitia animi voluptatibus consectetur?
                    </p>
                </div>
                <div class="col-lg-3 py-5">
                    <img src="img/campus.webp" alt="icons2"  class="about2ndline ps-5 ms-3"/>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Minus reprehenderit officiis sint veritatis quia
                        iste saepe. Non ut nesciunt perferendis?
                    </p>
                </div>
            </div>
        </div>
        {{-- programs offered --}}
        <div class="container-fluid" id="programs">
            <div class="row">
                <h1>PROGRAMS OFFERED</h1>
                <div class="col-lg-3">
                 <img src="img/BSComputer.png" alt="icon" />
                </div>
                <div class="col-lg-3">
                 <img src="img/BSEngineering.png" alt="icon" />
                </div>
                <div class="col-lg-3">    
                <img src="img/BSAccounting.png" alt="icon" />
            </div>
            </div>
        </div>

        {{-- NEWS --}}

        <div class="container-fluid">
            <div class="row\" id="news">
                <div class="col-lg-5">
                    <img src="img/news.png" alt="icon" />
                </div>
                <div class="col-lg-3 py-5">
                    <img src="img/news2.png" alt="icon" />
                </div>
            </div>
        </div>

        {{-- pre-reg --}}

        <div class="container-fluid" id="preregister">
            <div class="row">
                <div class="col-lg-12">
                    <img src="img/pre_register.png" alt="pics" />
                </div>
            </div>
        </div>

        {{-- footer --}}

        <footer class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="mb-4">CAE Education System</h5>
                        <p>
                            CAE University now offers full online education,
                            earn your degree online - anywhere you are in the
                            world.
                        </p>
                        <p>
                            Maximina St., Villa Arca Subdivision Proj. 8, Quezon
                            City
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-4">Contact Information</h5>
                        <p>Hotline: (02) 1234-5678 / 8765-4321</p>
                        <p>Email: cae_university@caees.edu.ph</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-4">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PROGRAMS</a></li>
                            <li><a href="#">ADMISSIONS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <p>Follow us:</p>
                        <a href="#" class="text-white mx-2"
                            ><i class="fab fa-facebook"></i
                        ></a>
                        <a href="#" class="text-white mx-2"
                            ><i class="fab fa-twitter"></i
                        ></a>
                        <a href="#" class="text-white mx-2"
                            ><i class="fab fa-instagram"></i
                        ></a>
                        <a href="#" class="text-white mx-2"
                            ><i class="fab fa-youtube"></i
                        ></a>
                        <a href="#" class="text-white mx-2"
                            ><i class="fab fa-linkedin"></i
                        ></a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <p>LINKS</p>
                        <ul class="list-unstyled">
                            <li><a href="#">CAE EDUCATION SYSTEM</a></li>
                            <li><a href="#">CAE NEWS</a></li>
                            <li><a href="#">Branch/Campus Directory</a></li>
                            <li><a href="#">CAEES TV</a></li>
                            <li><a href="#">INVESTORS</a></li>
                            <li><a href="#">CAREERS</a></li>
                            <li><a href="#">PRIVACY POLICY</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
