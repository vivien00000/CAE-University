<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="/js/admin.js"></script>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add New Faculty</h5>
            <form action="/admin_faculty" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="department" required>
                </div>
                <div class="mb-3">
                    <label for="date_entered" class="form-label">Date Entered</label>
                    <input type="date" class="form-control" id="date_entered" name="date_entered" required>
                </div>
                <div class="mb-3">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                </div>
                <div class="mb-3">
                    <label for="email_address" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email_address" name="email_address" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
