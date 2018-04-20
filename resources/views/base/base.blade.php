<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Caacupets</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
              CaacuPETS
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.sciax2.it/forum/utenti/-kik_226760/" target="_blank">Accion</a></li>
          <li class="dropdown ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Ajustes
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">SETTINGS</li>
              <li class=""><a href="#">Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class=""><a href="#">Other Link</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
<div class="container-fluid">
  <div class="col col-md-3">      
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a href="{{ url('/mascota') }}" target="_blank">Mascotas</a>
        </h4>
      </div>
      
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a href="{{ url('/noticia') }}" target="_blank">Noticias</a>
        </h4>
      </div>
      
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
      <a href="{{ url('/noticia') }}" target="_blank">Voluntarios</a>
      </h4>
    </div>
  
    </div>
  </div> 
</div>
<div class="col col-md-9">
    <div class="row">
      <div class="col col-md-10">
        
           @yield('content') 
      </div>
    </div>
  </div>
</div>
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/noticiaCrud.js')}}"></script>
<!--<script src="{{asset('js/mascotaCrud.js')}}"></script>-->
</body>
</html>