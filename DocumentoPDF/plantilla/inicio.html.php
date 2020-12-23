{% extends "base.html.php" %}

{% block logo %}
<img src="img/logo.png" width="30" height="30" alt="" class="logo">Aplicación CCSM           
{% endblock %}
  
{% block contenido %}
<div class="jumbotron wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">

        <div class="opcioneCheck d-flex flex-row justify-content-end">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="firma" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Firma
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="exampleRadios" id="opcion" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Opcion
                </label>
            </div>
        </div>
         
        <!-- Zona de Arrastrar y soltar -->
        <form action="plantilla/subir.html.php" class="dropzone" id="myDropzone">
            <div class="fallback">
                <input name="file" type="file" multiple />            
            </div>
        </form>

        <!-- Div contendedor informa de respuesta -->
        <div class="contenedor">
            <div class="contenedorOpcion">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto cupiditate, nulla omnis molestias repellat, accusantium impedit libero facilis quia at suscipit veritatis aliquam porro. Commodi repellat quaerat modi fugiat voluptatibus.
                Deserunt dignissimos fugit autem maiores ad architecto maxime, accusantium voluptatibus ex distinctio alias sequi ea perspiciatis nostrum error, tempora voluptatum ab. Doloremque quae, voluptatibus saepe porro laudantium dolores? Odit, corporis.
                Veritatis et quaerat, labore neque sint odio reiciendis reprehenderit alias voluptas consequuntur corrupti ea assumenda omnis perspiciatis consequatur sed dignissimos ad deleniti aspernatur voluptatum quis. Eaque deserunt sequi voluptatibus necessitatibus!
            </div>

           <div class="contenedorFirma">
                <canvas id="myCanvas" style="background-color:yellow"></canvas>
            </div>

        </div>
          
    </div>
</div>

{% endblock %}

{% block piecera %}
<ul class = "list-inline">
    <li class = "list-inline-item"><a href = "https://www.ccsm.org.co">CamComercioSM</a></li>
    <li class = "list-inline-item"><a href = "#">Terminos y Condiciones</a></li>
    <li class = "list-inline-item"><a href = "https://pqrs.ccsm.org.co">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(ocultarCargando, 1234);
/*         cargarVista("formulario-muestra", "formulario", "nuevo");  
 */ 
        
    });
        Dropzone.options.myDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize:2, //mb
            dictDefaultMessage:"Arrastra o da click"

        };
        $(".contenedor").hide();
        
        $("#opcion").on( "click", function() {
            //muestro mediante id
            $('.contenedor').show("fast","swing"); //muestro mediante id
            if ($('.contenedor').show) {
                $('.contenedorOpcion').show(); //muestro mediante id
                $('.contenedorFirma').hide(); //muestro mediante id
            }
                
        });

        $("#firma").on( "click", function() {
            $('.contenedor').show("fast","swing"); //oculto mediante id
            if ($('.contenedor').show) {
                    $('.contenedorFirma').show(); //muestro mediante id
                    $('.contenedorOpcion').hide(); //muestro mediante id
            }
        });
</script>
{% endblock %}