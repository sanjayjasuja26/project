
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Working project</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>

        @if(Auth::check())
        <li><a href="/upload"> Upload</a></li>
          @endif


    </ul>
    <ul  style="float:right">
      @if(!Auth::check())
        <li class="socialdiv" style="margin-top:15px;margin-left:5px;">

         <a href="/login">Login</a>
         </li>

    @else
            <li class="socialdiv" style="margin-top:15px;margin-left:5px;">
              <a href="/logout">Log Out</a>
           </li>
          <li class="socialdiv" style="margin-top:15px;margin-left:5px;">
            <a href="#">{{Auth::user()->name}}</a>
          </li>
          <li class="socialdiv" style="margin-top:15px;margin-left:20px;">
            <a href="/manage">Managepost</a>
         </li>

    @endif
   </ul>

  </div>
</nav>


@yield('content')


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
