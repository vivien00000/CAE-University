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
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .card {
            width: 600px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>

    <div class="card">
        <table>
            <tr>
                <th>Inbox</th>
                <th>Sent</th>
                <th>Unread</th>
                <th>Archived</th>
            </tr>
            <tr>
                <td>10</td>
                <td>8</td>
                <td>3</td>
                <td>5</td>
            </tr>
        </table>
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
