{% extends "base.html.php" %}

{% block logo %}
<img src="img/logo.png" width="30" height="30" alt="" class="logo">Aplicación CCSM           
{% endblock %}
  
{% block contenido %}
<div class="jumbotron wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
    <div class="container">
        
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

        cargarVista("formulario-muestra", "formulario", "nuevo"); 
        
    });

</script>
{% endblock %}