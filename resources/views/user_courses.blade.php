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
        margin-top: 10%;
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
</style>
</head>
<body>


<table>
  <tr>
    <th>Course</th>
    <th>Room</th>
    <th>Schedule</th>
    <th>Professor</th>

  </tr>
  @foreach($subjects as $s)
  <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->room}}</td>
        <td>{{$s->schedule}}</td>
        <td>{{$s->last_name}} , {{$s->first_name}}</td>
    
  </tr>
  @endforeach
</table>
{{-- {{$subjects -> links('pagination::bootstrap-5')}} --}}

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
