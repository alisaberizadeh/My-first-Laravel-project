<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <script src="{{ asset('/js/app.js') }}" ></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <h2 class="text-info">Laravel</h2>
            
            <div>
                @if (!Auth::check())
                <a href="/register" class="btn btn-light">Sing Up</a>
                <a href="/login" class="btn btn-light">Sing In</a>
                @else
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                      <a class=" dropdown-toggle btn btn-light" data-bs-toggle="dropdown" href="#">{{Auth::user()->name}}</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> <i style="margin-right: 5px;" class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout_form').submit()"> <i style="margin-right: 5px;"  class="fa fa-power-off"></i> Logout</a></li>
                        <form action="{{route('logout')}}" method="POST" id="logout_form">@csrf</form>
                      </ul>
                    </li>
 
                  </ul>
                @endif        
            </div>
        </div>
    </nav>

    @yield('content')
    

     
</body>
</html>