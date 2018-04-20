<div class="container">
    <div class="row">
        <div class="col-sm-7">
        <a href="{{url('/admin')}}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>
          <b> Volver</b>
        </a>
          <h3>Lista de mascotas</h3>
        </div>

        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('mascotas')}}?search='+this.value)"
                       placeholder="Buscar por nombre" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('mascotas')}}?search='+$('#search').val())">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

          </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th width="60px">No</th>
            <th><a href="javascript:ajaxLoad('{{url('mascotas?field=mas_nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre</a>
                {{request()->session()->get('field')=='mas_nombre'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th><a href="javascript:ajaxLoad('{{url('mascotas?field=mas_edad&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Edad</a>
                {{request()->session()->get('field')=='mas_edad'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=mas_imagen&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Imagen
                </a>
                {{request()->session()->get('field')=='mas_imagen'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=mas_apto&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Apto
                </a>
                {{request()->session()->get('field')=='mas_apto'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=mas_castrado&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Castrado
                </a>
                {{request()->session()->get('field')=='mas_castrado'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=mas_sexo&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Sexo
                </a>
                {{request()->session()->get('field')=='mas_sexo'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=mas_descripcion&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Descripcion
                </a>
                {{request()->session()->get('field')=='mas_descripcion'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('mascotas?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Created At
                </a>
                {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('mascotas?field=updated_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                Update At
              </a>
              {{request()->session()->get('field')=='updated_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>
            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('mascotas/create')}}')"
                 class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar Mascota</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($mascotas as $mascota)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $mascota->mas_nombre }}</td>
            <td>{{ $mascota->mas_edad }}</td>
            <td>{{ $mascota->mas_imagen }}</td>
            <td>{{ $mascota->mas_apto }}</td>
            <td>{{ $mascota->mas_castrado }}</td>
            <td>{{ $mascota->mas_sexo }}</td>
            <td>{{ $mascota->mas_descripcion }}</td>
            <td>{{ $mascota->created_at }}</td>
            <td>{{ $mascota->updated_at }}</td>
            <td>
              <a class="btn btn-success" title="Ver"
                 href="javascript:ajaxLoad('{{url('mascotas/show/'.$mascota->id)}}')">
                 <span class="glyphicon glyphicon-eye-open"></span>
            </a>
                <a class="btn btn-warning" title="Editar"
                   href="javascript:ajaxLoad('{{url('mascotas/update/'.$mascota->id)}}')">
                   <span class="glyphicon glyphicon-edit"></span>
                    </a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger" title="Eliminar"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('mascotas/delete/'.$mascota->id)}}','{{csrf_token()}}')">
                   <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

        <ul class="pagination">
            {{ $mascotas->links() }}
        </ul>
</div>