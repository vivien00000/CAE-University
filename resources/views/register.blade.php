<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="register" method="POST">
        @csrf
        <label>First name:</label>
        <input type="text" name="first_name" /><br />
        <label>Last name:</label>
        <input type="text" name="last_name" /><br />
        <label>Email address:</label>
        <input type="email" name="email" /><br />
        <label>Password:</label>
        <input type="password" name="pw" /><br />
        <label>Confirm password:</label>
        <input type="password" name="con_pw" /><br />
        <label>Role:</label>
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br />
        <label>Student ID:</label>
        <input type="number" name="student_id" /><br />
        <input type="submit" class="btn btn-success" />
    </form>
</body>

</html>
