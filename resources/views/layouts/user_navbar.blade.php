<nav class="navbar navbar-expand-sm navbar-dark bg-maroon fixed-top">
  <div class="container-fluid">
      <!-- Logo on the left -->
      <a class="navbar-brand" href="javascript:void(0)">Logo</a>
      
      <!-- Toggle button for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar items on the right -->
      <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item dropdown">
                {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notifications
                </a> --}}
                <div class="notification">
                    <button id="notificationBtn">
                      <i class="fa fa-bell">Notification</i>
                      <span class="badge">20</span>
                    </button>
                    <div class="notification-menu">
                      <!-- Notification items go here -->
                      <a href="#">Notification 1</a>
                      <a href="#">Notification 2</a>
                      <a href="#">Notification 3</a>
                    </div>
                  </div>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">News</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                    <!-- Add more dropdown items as needed -->

                </div>
            </li>
          </ul>
      </div>
  </div>
</nav>


  <style>
    .navbar {
    z-index: 1000;
    background-color: maroon;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    color: #bdb2b2;
    padding-right: 5%; /* Add right padding to create some space on the right side */
    padding-left: 5%; /* Add left padding to create some space on the left side */
}

/* Apply hover effect to nav-link */
.navbar-nav .nav-link:hover {
    color: white;
    background-color: maroon;
}

/* Apply hover effect to navbar-brand */
.navbar-brand:hover {
    color: white;
}

.dropdown-toggle::after {
    display: none !important;
}

.dropdown-menu {
    display: 
}
.notification {
  position: relative;
  display: inline-block;
}

.notification-menu {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  right: 0;
  top: 30px;
}

.notification-menu a {
  color: black;
  padding: 8px 0;
  display: block;
  text-decoration: none;
}

.notification-menu a:hover {
  background-color: #ddd;
}

.notification:hover .notification-menu {
  display: block;
}

.notificationBtn {
  background-color: maroon;
  border: none;
  cursor: pointer;
  outline: none;
  position: relative;
}

.badge {
  background-color: red;
  color: white;
  padding: 4px 8px;
  border-radius: 50%;
  position: absolute;
  top: -8px;
  right: -8px;
}

</style>