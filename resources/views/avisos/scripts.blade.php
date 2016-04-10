@section('script')

<script>

    function actualizarMapa(cords)
    {
        $("#mapa").prop("latitude",cords.lat);
        $("#mapa").prop("longitude",cords.lng);
        $("#marcador").prop("latitude",cords.lat);
        $("#marcador").prop("longitude",cords.lng);
        $("#lat").val(cords.lat);
        $("#lng").val(cords.lng);
    }

    function mostrarOcultarMasDatos()
    {
        if( $('#masDatos').prop('checked') )
            $("#divOtrosDatos").css("display","");
        else
            $("#divOtrosDatos").css("display","none");
    }

    function mostrarError(mensaje)
    {
        $("#mensaje_error").html(mensaje);
        $("#error").modal(function(){show:true})

    }




    $().ready(function(){

        mostrarOcultarMasDatos();

        $("#masDatos").click(function(){
            mostrarOcultarMasDatos();
        });

        $("#id_rubro").change(function(){
            var id_rubro = $("#id_rubro").val();
            var datos = "id_rubro="+id_rubro;
            var destino = "{{ Route('rubros.darComboSubRubros') }}";
            $.ajax({
                type: "Post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: destino,
                data: datos,
                async: true,
                success: function(respuesta){
                    $("#div_combo_subrubros").html(respuesta);
                }

            });

        });

        $("#btnBuscar").click(function(){

            var nro = $("#nro").val();
            var direccion = $("#direccion").val();
            var localidad = $("#localidad").val();


            if(nro && direccion && localidad)
            {
                var url = 'https://maps.googleapis.com/maps/api/geocode/json?address='+nro+'+'+direccion+','+localidad+',AR&key=AIzaSyD5UP9JtvEgiy_94C5KEgUu5GCMCC6kqfE';
                $.ajax({
                    type: "GET",
                    url : url,
                    async: true,
                    headers : {
                        'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                    },
                    success: function(respuesta)
                    {
                        if(respuesta['status'] == 'ZERO_RESULTS')
                        {
                            mostrarError("No se encontraron resultados");
                        }
                        else
                        {
                            //$scope.usuarios = gems;
                            //$scope.usuarios = data;//así enviamos los posts a la vista
                            var cords = respuesta.results[0]['geometry']['location'];
                            $("#mapa").prop("latitude",cords.lat);
                            $("#mapa").prop("longitude",cords.lng);
                            $("#marcador").prop("latitude",cords.lat);
                            $("#marcador").prop("longitude",cords.lng);
                            $("#lat").val(cords.lat);
                            $("#lng").val(cords.lng);

                        }
                    }
                });
            }
            else
            {
                mostrarError("Debe completar todos los campos");
            }
        });

        $("#btnAceptar").click(function(){
            var datos = $('#form').serialize();
            var destino = "{{ Route('avisos.validarDatos') }}";
            $.ajax({
                type: "Post",
                url: destino,
                data: datos,
                async: true,
                success: function(respuesta2){
                    if(respuesta2)
                    {
                        mostrarError(respuesta2);
                    }
                    else
                    {
                        form.submit();
                    }
                }

            })

        });





    });


</script>


<!-- Polyfill Web Components support for older browsers -->
<script src="{{ asset('polymer/webcomponentsjs/webcomponents-lite.min.js')}}"></script>
<!-- Import element -->
<link rel="import" href="{{ asset('polymer/google-map/google-map.html')}}">


<!-- Use element -->

<style>
    google-map {
        height: 300px;
        width: auto;
    }

    body {
        overflow-x: hidden;
    }

</style>



@endsection