<div class="container">
  <div class="col-md-8 offset-md2">
    <h2>Noticia</h2>
  </div>
  <div class="col-md-9">
    <div class="thumbnail">
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
        <div class="caption-full">
      
            <h4><a href="#">{{ $noticia->not_titulo }}</a>
            </h4>
            <p>{{ $noticia->not_sub_titulo }}</a></p>
            <p><h2>{{ $noticia->not_contenido }}</h2></p>
        </div>
    </div>
</div>
      <div class="col-md-8 offset-md2">
      <a class="btn btn-danger" href="javascript:ajaxLoad('{{ url('noticias') }}')"><i class="glyphicon glyphicon-chevron-left"></i> Atras</a>
    </div>
    </div>

