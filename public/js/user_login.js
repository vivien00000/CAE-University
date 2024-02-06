// $(document).ready(function () {
//     $("#login-form").submit(function (event) {
//         event.preventDefault();

//         const id_number = $("#id_number").val();
//         const password = $("#password").val();
//         const message = $("#message");

// function login() {
//     var username = document.getElementById("username").value;
//     var password = document.getElementById("password").value;

//     // Check credentials (this is just a basic example, not secure for production)
//     if (username === "your_username" && password === "your_password") {
//       document.getElementById("error-message").innerText = "Login successful!";
//     } else {
//       document.getElementById("error-message").innerText =
//         "Invalid username or password. Please try again.";
//     }
//   }

// Let the form submit naturally without preventing the default behavior
// This will cause the browser to reload the page
// However, you can still handle the form submission server-side

// For demonstration, we're assuming the form action is set to "/login"
// Ensure your form action matches the endpoint in your backend
//     });
// });

$(document).ready(function () {
    $("#login-form").submit(function (event) {
        event.preventDefault(); // Prevent form submission

        const email = $("#email").val();
        const password = $("#password").val();
        const message = $("#message");

        // AJAX request to handle login
        $.ajax({
            type: "POST",
            url: "/login", // Route to your login controller method
            data: {
                email: email,
                password: password,
                _token: $('input[name="_token"]').val(), // CSRF token
            },
            success: function (response) {
                if (response.success) {
                    // Redirect to home page upon successful login
                    window.location.href = "/user_page"; // Change the URL as needed
                } else {
                    message.text(response.message).css("color", "red");
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                message
                    .text("No account found. Please try again.")
                    .css("color", "red");
            },
        });
    });
});

