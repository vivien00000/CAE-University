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

<style>
    table {
        margin-top: 2%;
        margin-left: 8%;
        width: 65%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
    #buton {
        padding: 9px;
        font-size: 90%;
    }
    #room_number {
        padding: 5%;
    }
  #filter1 {
    margin-left: 50%;
  }
</style>
</head>
<body>
<div class="container mt-5" id="filter1">
    <div class="col-lg-12 offset-1border border-light">
        <strong>Filter</strong>
        <select name="year_level">
            <option value="" selected id="room_number">Room Number</option>
            <option value="1">1st floor</option>
            <option value="2">2nd floor</option>
            <option value="3">3rd floor</option>
            <option value="4">4th floor</option>
        </select>

        <select name="gender">
            <option value="" selected id="depart">Department</option>
            <option value="male">Computer Studies</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
     
            <input type="submit" class="btn btn-success" id="buton" />
     
    </div>
</div>
</div>
</form>
</div>
<table>
  <tr>
    <th>Course</th>
    <th>Room</th>
    <th>Schedule</th>
    <th>Professor</th>
  </tr>
  @foreach ( $subjects as $s )
  <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->room}}</td>
        <td>{{$s->schedule}}</td>
        <td>{{$s->last_name}} , {{$s->first_name}}</td>
  </tr>
  @endforeach
</table>

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
