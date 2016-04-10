<!DOCTYPE html>
<html>
<head>
    <title>Revista Un Deseo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('css/estilo.css')  !!}
    {!! Html::style('css/bootstrap.min.css')  !!}
    {!! Html::style('css/menu.css')  !!}

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {!! Html::script('js/menu.js')  !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    @yield('script')



    <style>
        .index-add{
            display: inline-block;
            float: right;
            margin-top: 25px;
            margin-right: 10px;
        }

    </style>

    <style media="screen">


        @media (max-width: 480px) {
            .celular{
                display: none;
            }
        }
        @media (max-width: 768px) {
            .tablet{
                display: none;
            }
        }
    </style>


</head>
<body>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'>Home</a></li>
        <li><a href='{{ route("avisos.index") }}'>Avisos</a></li>
        <li><a href='#'>Rubros</a></li>
        <li><a href='#'>Sub Rubros</a></li>
    </ul>
</div>

@yield('contenido')
</html>