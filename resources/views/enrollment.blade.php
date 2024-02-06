<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <title>Enrollment Form</title>
</head>

<body>
    @include('layouts/messages')
    @include('layouts/navbar')

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Enrollment Form</h1>

                <form action="{{ route('enrollment.submit') }}" method="POST">
                    @csrf

                        <label for="last_name">Last Name*</label>
                        <input type="text" name="last_name" required>

                        <label for="first_name">First Name*</label>
                        <input type="text" name="first_name" required>

                        <label for="middle_name">Middle Name</label>
                        <input type="text" name="middle_name">

                        <label for="contact_info">Contact Info</label>
                        <input type="text" name="contact_info">

                        <label for="email">Email*</label>
                        <input type="email" name="email" required>

                        <label for="verify_email">Input Email to verify*</label>
                        <input type="email" name="verify_email" required>

                        <label for="country_code">Select Country Code*</label>
                        <select name="country_code" required>
                            <option value="63">[PH] Philippines (63)</option>
                        </select>

                        <label for="contact_number">Contact Number*</label>
                        <input type="text" name="contact_number" required>

                        <label for="verify_contact_number">Input Contact Number to verify*</label>
                        <input type="text" name="verify_contact_number" required>

                        <label for="program_course">Program/Course*</label>
                        <select name="program_course" required>
                            <option value="1">Bachelor of Science in Information Technology</option>
                            <option value="1">Bachelor of Science in Computer Science</option>
                            <option value="1">Bachelor of Science in Business Administration</option>
                            <option value="1">Bachelor of Science in Computer Engineering</option>
                            <option value="1">Bachelor of Science in Industrial Engineering</option>
                        </select>

                        <label for="Year_level">Select Year Level*</label>
                        <select name="Year_level" required>
                           <option value="1">First Year</option>
<option value="2">Second Year</option>
<option value="3">Third Year</option>
<option value="4">Fourth Year</option>
                        </select>

                    <label for="consent">Consent to collect and use my personal data</label>
                    <input type="checkbox" name="consent" required>

                    <p>I have fully read and understood the Data Privacy Policy statement of CAE Education System (CAEES).
                        It is under these conditions that I am voluntarily submitting the information I have encoded above.
                        I agree to the data privacy policy of CAE Education System.</p>

                    <input type="submit" class="btn btn-primary" value="Submit Form">
                </form>
            </div>
        </div>
    </div>

</body>

</html>