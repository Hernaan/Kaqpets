@extends('layouts.app')
@section('content')
<div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><span class="fa fa-paw"></span> Bienvenido!</h1>
            <p>Esta es la pagina de administracion de tu pagina. Desliza hacia abajo para administrar la pagina</p>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Acciones</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="/imagen/pets.svg" alt="" width="150">
                    <div class="caption">
                        <h3>Mascotas</h3>
                        <p>Administra tus mascotas</p>
                        <p>
                            <a href="{{url('mascotas')}}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="/imagen/news.png" alt="" width="150">
                    <div class="caption">
                        <h3>Noticias</h3>
                        <p>Agrega nuevas noticias</p>
                        <p>
                            <a href="{{url('noticias')}}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="/imagen/people.png" alt="" width="180">
                    <div class="caption">
                        <h3>Voluntarios</h3>
                        <p>Mira los voluntarios de caacuPETS</p>
                        <p>
                            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="/imagen/tools.svg" alt="" width="150">
                    <div class="caption">
                        <h3>Otros</h3>
                        <p>Otras acciones no definidas</p>
                        <p>
                            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
@endsection