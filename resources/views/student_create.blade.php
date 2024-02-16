<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <title>Add New Student</title>
</head>

<body>

    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="card-title">Add New Student</h1>
                <form action="/admin/students" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate:</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                    </div>
                    <div class="mb-3">
                        <label for="year_level" class="form-label">Year level:</label>
                        <input type="number" class="form-control" id="year_level" name="year_level">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Mobile number:</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                    </div>
                    <div class="mb-3">
                        <label for="email_address" class="form-label">Email address:</label>
                        <input type="email" class="form-control" id="email_address" name="email_address">
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province:</label>
                        <select class="form-select" id="province" name="province">
                            <option value="La Union">La Union</option>
                            <option value="Pangasinan">Pangasinan</option>
                            <option value="Ilocos Sur">Ilocos Sur</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
