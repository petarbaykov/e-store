<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
      
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script>
      var baseUrl = '<?php echo asset('/');?>';
    </script>
  </head>
  <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
             
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('cart')}}">Cart <span class="sr-only">(current)</span></a>
             
            </li>
            <li class="nav-item active">
              <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
          </ul>
        </div>
        </div>
      </nav>

    <div class="container">
      @yield('content')
    </div>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  </body>
</html>
