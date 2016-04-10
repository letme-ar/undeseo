@extends("master")

@section("contenido")
<div class="page-header">
    <div class="titulo-listado">
        <h1 style="display: inline-block; margin-left: 10px">Avisos</h1>
        <div class="index-add"><a title="Agregar" href="{!! route('avisos.create') !!}">{!! Html::image('images/usados/add.png', "Imagen no encontrada",array("id" => "anterior","style" => "height: 32px; width: 32px") ) !!}</a></div>
    </div>

    <!--<div class="form-group col-md-4">
        <label>Filtro</label>
        <input class="form-control" type="text" placeholder="Buscar" ng-model="search">
    </div>

    <div ng-controller="IndexController">


        <table class="table table-striped table-hover">
            <thead >
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Direccion</th>
                <th>Nro</th>
                <th class="celular">Rubro</th>
                <th class="celular">Sub Rubro</th>
                <th class="celular tablet">Telefono</th>
                <th class="celular tablet">Email</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="aviso in avisos | filter:search">
                <th>@{{ aviso.titulo }}</th>
                <th>@{{ aviso.descripcion }}</th>
                <th>@{{ aviso.direccion }}</th>
                <th>@{{ aviso.nro }}</th>
                <th class="celular">@{{ aviso.descripcion_rubro }}</th>
                <th class="celular">@{{ aviso.descripcion_sub_rubro }}</th>
                <th class="celular tablet">@{{ aviso.telefono }}</th>
                <th class="celular tablet">@{{ aviso.email }}</th>
                <th><a href="aviso/@{{aviso.id_aviso}}/edit" class="btn btn-success btn-sm">Editar</a></th>
            </tr>
            </tbody>
        </table>




    </div>-->

    <div>


        <table class="table table-striped table-hover">
            <thead >
            <tr>
                <th>Titulo</th>
                <th class="celular">Descripcion</th>
                <th>Direccion</th>
                <th>Nro</th>
                <th class="celular">Rubro</th>
                <th class="celular">Sub Rubro</th>
                <th class="celular tablet">Telefono</th>
                <th class="celular tablet">Email</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($listado as $key => $value)
                    <tr>
                        <th>{!! $value->titulo  !!} </th>
                        <th class="celular">{!! $value->descripcion !!}</th>
                        <th>{!! $value->direccion !!}</th>
                        <th>{!! $value->nro !!}</th>
                        <th class="celular">{!! $value->SubRubro->Rubro->descripcion_rubro !!}</th>
                        <th class="celular">{!! $value->SubRubro->descripcion_sub_rubro !!}</th>
                        <th class="celular tablet">{!! $value->telefono !!}</th>
                        <th class="celular tablet">{!! $value->email !!}</th>
                        <th><a title="Editar" href="{!! route('avisos',[str_replace(" ","-",$value->titulo),$value->id_aviso]) !!}">{!! Html::image('images/usados/edit.png', "Imagen no encontrada",array("id" => "anterior","style" => "height: 20px; width: 20px") ) !!}</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>




    </div>

</div>


@endsection