@if (Session::get('role') == 'admin')
            @include('layouts/navbar_admin')
@else
            @include('layouts/navbar_user')
@endif