<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/bootstap')
   <script src="js/user_sidebar.js"></script>
   <link rel="stylesheet" href="css/user_page.css">
    <title>Document</title>
</head>
<body>
    @include('layouts/user_navbar')
    @include('layouts/left_navbar')
    {{-- @include('layouts/right_navbar') --}}

   
<div class="container" id="card_container">
    <h1 class="text-left">Dashboard</h1>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title"> <a href="#" id="href" >Introduction to Computing</a> </h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                <div class="card-body">
                     <h4 class="card-title"> <a href="#" id="href" >Computer Programming</a> </h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                <div class="card-body">
                     <h4 class="card-title"> <a href="#" id="href" >Advance Computer Programming</a> </h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
              </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                         <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>

                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                         <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>

                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                    <div class="card-body">
                         <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>

                    </div>
                  </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                        <div class="card-body">
                             <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
    
                        </div>
                      </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                        <div class="card-body">
                             <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
    
                        </div>
                      </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                        <div class="card-body">
                             <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
    
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                 <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                 <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image">
                            <div class="card-body">
                                 <h4 class="card-title"> <a href="#" id="href" >John Doe</a> </h4>
                              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
        
                            </div>
                          </div>
                    </div>
                </div>
    </div>
  {{-- <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>

  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
   --}}

</div>
</body>
</html>