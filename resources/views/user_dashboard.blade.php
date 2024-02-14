<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/bootstap')
   <link rel="stylesheet" href="css/user_page.css">
   <link rel="stylesheet" href="css/calendar.css">
    <script src="js/calendar.js"></script>
</head>
<body>
    @include('layouts/left_navbar')
    @include('layouts/calendar')

    <div class="container" id="card_container">
        <div class="row" id="text">
            <div class="col-lg-9">
                <h1>Dashboard</h1>
                <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="img/intro.png" alt="introduction to Computing image">
                                    <div class="card-body">
                                      <h4 class="card-title"> <a href="#" id="href" >Introduction to Computing</a> </h4>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="img/program.jpg" alt="Card image">
                                    <div class="card-body">
                                         <h4 class="card-title"> <a href="#" id="href" >Computer Programming</a> </h4>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="img/advance.jpg" alt="Card image">
                                    <div class="card-body">
                                         <h4 class="card-title"> <a href="#" id="href" >Advance Computer Programming</a> </h4>
                                    </div>
                                  </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top" src="img/data.jpg" alt="Card image">
                                        <div class="card-body">
                                             <h4 class="card-title"> <a href="#" id="href" >Data Structures and Algorithms</a> </h4>

                                        </div>
                                      </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top" src="img/information.jpg" alt="Card image">
                                        <div class="card-body">
                                             <h4 class="card-title"> <a href="#" id="href" >Information Management</a> </h4>

                                        </div>
                                      </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top" src="img/human computer.jpg" alt="Card image">
                                        <div class="card-body">
                                             <h4 class="card-title"> <a href="#" id="href" >Human-computer interaction</a> </h4>

                                        </div>
                                      </div>
                                </div>
                                </div>

                            </div>

    <div class="col-lg-3 todo-items" id="todo"> <!-- Take up 3 columns for the To-Do items -->
        <h3>To-Do List</h3>
        <ul class="list-group">
            <li class="list-group-item">Nothing to show</li>
            <li class="list-group-item">Recent Feedback</li>
        </ul>
        <button type="button" class="btn btn-primary mt-3">View Grades</button>
    </div>
</div>
</body>
</html>
