<div class="container">
    <div class="row">
        <div class="col-sm-7">
          <a href="{{url('/admin')}}" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i>
          <b> Volver</b>
          </a>
          <h3>Lista de noticias</h3>
        </div>
        <div class="col-sm-5">
          <div class="pull-right">
            <div class="input-group">
                <input class="form-control" id="search"
                       value="{{ request()->session()->get('search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('noticias')}}?search='+this.value)"
                       placeholder="Search Title" name="search"
                       type="text" id="search"/>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"
                            onclick="ajaxLoad('{{url('noticias')}}?search='+$('#search').val())">
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
            <th><a href="javascript:ajaxLoad('{{url('noticias?field=not_titulo&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Titulo</a>
                {{request()->session()->get('field')=='not_titulo'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th><a href="javascript:ajaxLoad('{{url('noticias?field=not_sub_titulo&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Sub Titulo</a>
                {{request()->session()->get('field')=='not_sub_titulo'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('noticias?field=not_contenido&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Contenido
                </a>
                {{request()->session()->get('field')=='not_contenido'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('noticias?field=created_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Created At
                </a>
                {{request()->session()->get('field')=='created_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('noticias?field=updated_at&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                Update At
              </a>
              {{request()->session()->get('field')=='updated_at'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>
            <th width="160px" style="vertical-align: middle">
              <a href="javascript:ajaxLoad('{{url('noticias/create')}}')"
                 class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Nueva Noticia</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($noticias as $noticia)
          <tr>
            <th>{{$i++}}</th>
            <td>{{ $noticia->not_titulo }}</td>
            <td>{{ $noticia->not_sub_titulo }}</td>
            <td >{{ $noticia->not_contenido }}</td>
            <td>{{ $noticia->created_at }}</td>
            <td>{{ $noticia->updated_at }}</td>
            <td>
              <a class="btn btn-success" title="Ver"
                 href="javascript:ajaxLoad('{{url('noticias/show/'.$noticia->id)}}')">
                  <span class="glyphicon glyphicon-eye-open"></span></a>
                <a class="btn btn-warning" title="Editar"
                   href="javascript:ajaxLoad('{{url('noticias/update/'.$noticia->id)}}')">
                    <span class="glyphicon glyphicon-edit"></span></a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger" title="Eliminar"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('noticias/delete/'.$noticia->id)}}','{{csrf_token()}}')">
                   <span class="glyphicon glyphicon-trash">
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

        <ul class="pagination">
            {{ $noticias->links() }}
        </ul>
</div>