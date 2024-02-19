<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        table {
            margin-left: 14%;
            width: 60%;
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

        <h5 id="std-text"><b>Schedule List</b></h5>
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

    </div>
    </body>
    </html>
