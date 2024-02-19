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

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">

                <!-- Profile Picture -->
                {{-- <div class="text-center">
                    @if ($profile_picture)
                    <img src="img/user_profiles/{{$profile_picture -> image}}" alt="blank profile picture" width="200px" /><br />
                    @else
                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/no-profile-picture-icon.png" alt="blank profile picture" width="100px" /><br />
                    @endif
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        Upload profile picture
                    </button>
                </div> --}}

                <!-- Personal Information -->
             <h2>Personal information</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Full name:</td>
                            <td>
                                <input type="text" value="{{$students->last_name}}" name="last_name" id="last_name" class="form-control">
                            </td>
                            <td>
                                <input type="text" value="{{$students->first_name}}" name="first_name" id="first_name" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Birthdate:</td>
                            <td colspan="2">
                                <input type="date" value="{{$students->birthdate}}" name="birthdate" id="birthdate" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td colspan="2">
                                <input type="text" value="{{$students->gender}}" name="gender" id="gender" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Province:</td>
                            <td colspan="2">
                                <input type="text" value="{{$students->province}}" name="province" id="province" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Enrollment Information -->
                <h2>Enrollment information</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Year level:</td>
                            <td colspan="2">
                                <input type="text" value="{{$students->year_level}}" name="year_level" id="year_level" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Date enrolled:</td>
                            <td colspan="2">
                                <input type="date" value="{{$students->date_enrolled}}" name="date_enrolled" id="date_enrolled" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Contact Information -->
                <h2>Contact information</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Mobile number:</td>
                            <td colspan="2">
                                <input type="text" value="{{$students->mobile_number}}" name="mobile_number" id="mobile_number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Email address:</td>
                            <td colspan="2">
                                <input type="email" value="{{$students->email_address}}" name="email_address" id="email_address" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- <!-- Your Classes -->
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="card-title">Your Classes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Class ID</th>
                            <th>Name of Subject</th>
                            <th>Schedule</th>
                            <th>Room</th>
                        </tr>
                    </thead>
                    <tbody>m
                        @foreach ($classes as $c)
                        <tr>
                            <td>{{$c -> class_id}}</td>
                            <td>{{$c -> name}}</td>
                            <td>{{$c -> schedule}}</td>
                            <td>{{$c -> room}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <div class="col-lg-3 todo-items" id="todo">
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
