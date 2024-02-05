<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts/bootstap')
    <link rel="stylesheet" href="css/login.css"> 
    <script src="js/login.js"></script>
    <title>CAE Univerity</title>
</head>
<body>
  @include('layouts/navbar')

  <div class="container-fluid" id="login_form_container">
      <div class="row">
          <div class="col-lg-4">
              <div class="login-container">
                  <h2>Student Login</h2>
                  <form id="login-form">
                      @csrf
                      <div class="form-group">
                          <label for="id_number">ID Number</label>
                          <input type="text" id="id_number" name="id_number" required>
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" id="password" name="password" required>
                      </div>
                      <div class="form-group">
                          <button type="submit">Login</button>
                          <a href="#">Forgot Password!</a>
                      </div>
                  </form>
                  <div id="message" class="message"></div>
              </div>
          </div>
      </div>
  </div>

</body>

</html>
