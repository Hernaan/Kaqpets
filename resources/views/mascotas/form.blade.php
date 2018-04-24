 <div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($mascota)?'Edit':'Agregar'}} Mascota</h1>
        <hr/>
        @if(isset($mascota))
            {!! Form::model($mascota,['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("mas_nombre","Nombre",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("mas_nombre",null,["class"=>"form-control".($errors->has('mas_nombre')?" is-invalid":""),"required","autofocus",'placeholder'=>'Nombre']) !!}
                <span id="error-title" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row required">
            {!! Form::label("mas_edad","Edad",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::number("mas_edad",null,["class"=>"form-control".($errors->has('mas_edad')?" is-invalid":""),"required","autofocus",'placeholder'=>'Edad']) !!}
                <span id="error-subtitle" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("mas_imagen","Imagen",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
        
                    {!! Form::file("mas_imagen",null,["class"=>"form-control".($errors->has('mas_imagen')?" is-invalid":""),"required",'placeholder'=>'Imagen']) !!}
                    <span id="error-content" class="invalid-feedback"></span>
                
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("mas_apto","Apto",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::select("mas_apto", array(
                    'para jugar con criaturas' => 'para jugar con criaturas',
                    'para cuidar la casa' => 'para cuidar la casa',
                    'otros' => 'otros',
                  ), null,["class"=>"form-control".($errors->has('mas_apto')?" is-invalid":""),"required",'placeholder'=>'Apto']) !!}
                <span id="error-content" class="invalid-feedback"></span>
            </div>
        </div>

		<div class="form-group row required">
            {!! Form::label("mas_castrado","Castrado",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::select("mas_castrado", array(
                    'si' => 'si',
                    'no' => 'no',
                  ), null,["class"=>"form-control".($errors->has('mas_castrado')?" is-invalid":""),"required",'placeholder'=>'Castrado']) !!}
                <span id="error-content" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("mas_sexo","Sexo",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::select("mas_sexo", array(
                    'macho' => 'macho',
                    'hembra' => 'hembra',
                  ),null,["class"=>"form-control".($errors->has('mas_sexo')?" is-invalid":""),"required",'placeholder'=>'Sexo']) !!}
                <span id="error-content" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("mas_descripcion","Descripcion",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::textarea("mas_descripcion",null,["class"=>"form-control".($errors->has('mas_descripcion')?" is-invalid":""),"required",'placeholder'=>'Descripcion']) !!}
                <span id="error-content" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('mascotas')}}')" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left"></span> Atras</a>
                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>