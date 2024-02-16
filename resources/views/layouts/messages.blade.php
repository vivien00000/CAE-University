@if (Session::has('success'))
<p class="notif bg bg-success text-light">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p class="notif bg bg-danger text-light">{{Session::get('fail')}}</p>
@endif
@foreach ($errors -> all() as $error)
    <p class="notif bg bg-danger text-light">{{$error}}</p>
@endforeach
