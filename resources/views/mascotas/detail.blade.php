<div class="container">
  <div class="col-md-8 offset-md2">
    <h2>Mascota</h2>
  </div>
  <div class="col-md-9">
    <div class="thumbnail">
        <img class="img-responsive" src="{{ $mascota->mas_imagen }}" alt="">
        <div class="caption-full">
      
            <h4><a href="#">{{ $mascota->mas_nombre }}</a>
            </h4>
            <p>{{ $mascota->mas_edad }}</a></p>
            <p>{{ $mascota->mas_apto }}</p>
            <p>{{ $mascota->mas_castrado }}</p>
            <p>{{ $mascota->mas_sexo }}</p>
            <p>{{ $mascota->mas_descripcion }}</p>
        </div>
    </div>
</div>
      <div class="col-md-8 offset-md2">
      <a class="btn btn-danger" href="javascript:ajaxLoad('{{ url('mascotas') }}')"><i class="glyphicon glyphicon-chevron-left"></i> Atras</a>
    </div>
    </div>