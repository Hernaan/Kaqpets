<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($noticia)?'Edit':'New'}} Noticia</h1>
        <hr/>
        @if(isset($noticia))
            {!! Form::model($noticia,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("not_titulo","Title",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("not_titulo",null,["class"=>"form-control".($errors->has('not_titulo')?" is-invalid":""),"autofocus",'placeholder'=>'Title']) !!}
                <span id="error-title" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row required">
            {!! Form::label("not_sub_titulo","SubTitle",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("not_sub_titulo",null,["class"=>"form-control".($errors->has('not_sub_titulo')?" is-invalid":""),"autofocus",'placeholder'=>'SubTitle']) !!}
                <span id="error-subtitle" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("not_contenido","Content",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::textarea("not_contenido",null,["class"=>"form-control".($errors->has('not_contenido')?" is-invalid":""),'placeholder'=>'Content']) !!}
                <span id="error-content" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('noticias')}}')" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left"></span> Atras</a>
                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>