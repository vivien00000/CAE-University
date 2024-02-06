<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">USER</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#site_navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="site_navbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cafeteria">Cafeteria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orders">Orders</a>
                </li>
                @if (Session::get('user_id'))
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notifications">
                        <span class="material-symbols-outlined">
                            notifications
                            </span>
                        {{Session::get('notification_count')}}
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif
        </div>
    </div>
</nav>