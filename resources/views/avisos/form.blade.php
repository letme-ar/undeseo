@extends ('master')

@include('avisos.scripts')

@section ('contenido')

<div>
    <div class="page-header">
        <h1 style="margin-left: 10px"> {!! $action !!} un aviso </h1>

        {!! Form::model($model,$data_formulario, array('role' => 'form')) !!}

        {!! Field::text('titulo','Titulo', null, ['placeholder' => 'Introduce el titulo'] ) !!}

        {!! Field::text('descripcion','Descripción', null, ['placeholder' => 'Introduce la descripción'] ) !!}

        <div class="row">
            <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                    {!! Form::label('direccion', '', array('for' => 'direccion')) !!}
                    {!! Form::text('direccion', null, array('placeholder' => 'Dirección', 'class' => 'form-control','id' => 'direccion')) !!}
                </div>

                <div class="form-group col-md-12">
                    {!! Form::label('nro', '', array('for' => 'direccion')) !!}
                    {!! Form::text('nro',null, array('placeholder' => 'Nro', 'class' => 'form-control','id' => 'nro')) !!}
                </div>

                <div class="form-group col-md-12">
                    {!! Form::label('localidad',"", array('for' => 'direccion')) !!}
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('localidad',null, array('placeholder' => 'Localidad', 'class' => 'form-control','id' => 'localidad','style' => 'display: inline-block; float: left; width: 90%')) !!}
                            <div style="display: inline-block; float: left"><a title="Buscar" href="#">{!! Html::image('images/usados/find.png', "Imagen no encontrada",array("id" => "btnBuscar","style" => "height: 32px; width: 32px") ) !!}</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-5">
                <google-map id="mapa" latitude="{!! $model->lat !!}" longitude="{!! $model->lng !!}" zoom="15">
                    <google-map-marker latitude="{!! $model->lat !!}" longitude="{!! $model->lng !!}" id="marcador" title="Go Giants!">
                        <img src="">
                    </google-map-marker>

                </google-map>
            </div>

        </div>


        {!! Field::select('id_rubro',"Rubro",$datos_rubros,null,['id' => 'id_rubro']) !!}


        <div id="div_combo_subrubros">{!! Field::select('id_sub_rubro','Sub Rubro',$datos_sub_rubros,null,['id' => 'id_sub_rubro']) !!}</div>

        {!! Field::text('telefono','Teléfono', null, ['placeholder' => 'Introduce el teléfono'] ) !!}

        <div class="form-group col-md-12">
        {!! Field::checkbox('MasDatos','Mas datos',null,[],['id' => 'masDatos']) !!}
        </div>
        <div id="divOtrosDatos">

            {!! Field::text('email','Email', null, ['placeholder' => 'Introduce el email'] ) !!}

            {!! Field::text('web','Web', null, ['placeholder' => 'Introduce la página web'] ) !!}

            {!! Field::text('facebook','Facebook', null, ['placeholder' => 'Introduce el facebook'] ) !!}

            {!! Field::text('twitter','Twitter', null, ['placeholder' => 'Introduce el twitter'] ) !!}

        </div>
        {{ csrf_field() }}
        {!! Form::hidden('id_aviso',null,['id' => 'id_aviso']) !!}
        {!! Form::hidden('lat',null,['id' => 'lat']) !!}
        {!! Form::hidden('lng',null,['id' => 'lng']) !!}
        {!! Form::close() !!}

        @include("fields.botones_button")

        @include("fields.modal_error")

    </div>

</div>
@endsection