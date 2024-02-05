<!-- Sidebar -->
{{-- <div class="sidenav" id="mySidenav">
    <a href="#dashboard">Dashboard</a>
    <a href="#assignments">Assignments</a>
    <a href="#activities">Activities</a>
    <a href="#grades">Grades</a>
    <a href="#inbox">Inbox</a>
</div> --}}

<!-- Burger Menu Button -->
<div class="burger-menu" id="burgerMenu">
    <div class="bar">Dashboard</div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>

<!-- Main Content -->

<div class="main" id="mainContent">
    <div class="sidenav" id="mySidenav">
        <a href="#dashboard"> <img src="img/dashboard.png" alt="Dashboard icon" width="22%"> Dashboard</a>
        <a href="#assignments"> <img src="img/assignment.png" alt="assignment icon" width="22%">Assignments</a>
        <a href="#activities"><img src="img/activity.png" alt="Activity icon" width="22%">Activities</a>
        <a href="#grades"> <img src="img/grades.png" alt="grades icon" width="22%">Grades</a>
        <a href="#schedule"><img src="img/calendar.png" alt="schedule icon" width="22%">Schedule</a>
        <a href="#inbox"><img src="img/inbox.png" alt="inbox icon" width="22%">Inbox</a>
        <a href="#help"><img src="img/help.png" alt="Help icon" width="22%">Help</a>
    </div>
</div>



<style>
    /* Styles for the burger menu button */
.burger-menu {
    display: none; /* Hide the button by default on larger screens */
    cursor: pointer;
    padding: 10px;
    background-color: #333;
    color: #fff;
}

.bar {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 5px 0;
}

/* Styles for the sidebar */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(128, 0, 0, 0.772);
    padding-top: 5%;
    z-index: 1;
    transition: left 0.5s; /* Add transition for smooth sliding */
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #bdb2b2;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}



/* Responsive styles */
@media screen and (max-width: 768px) {
    .sidenav {
        left: -200px; /* Initially hide the sidebar off the screen */
    }

    .burger-menu {
        display: block; /* Show the burger menu button on smaller screens */
    }

    .main {
        margin-left: 0; /* Adjust main content margin when sidebar is hidden */
    }
}



</style>