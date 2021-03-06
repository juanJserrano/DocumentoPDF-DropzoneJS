<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* inicio.html.php */
class __TwigTemplate_5fe4e74fa4942de1bc3f0adc7a21c7bc1bfcdbbc42de1b995e1f947430f1d00a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
            'contenido' => [$this, 'block_contenido'],
            'piecera' => [$this, 'block_piecera'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.php", "inicio.html.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">

        <div class=\"opcioneCheck d-flex flex-row justify-content-end\">
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"firma\" value=\"option1\">
                <label class=\"form-check-label\" for=\"exampleRadios1\">
                    Firma
                </label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"opcion\" value=\"option2\">
                <label class=\"form-check-label\" for=\"exampleRadios2\">
                    Opcion
                </label>
            </div>
        </div>
         
        <!-- Zona de Arrastrar y soltar -->
        <form action=\"plantilla/subir.html.php\" class=\"dropzone\" id=\"myDropzone\">
            <div class=\"fallback\">
                <input name=\"file\" type=\"file\" multiple />            
            </div>
        </form>

        <!-- Div contendedor informa de respuesta -->
        <div class=\"contenedor\">
            <div class=\"contenedorOpcion\" id=\"Pdf\">
                <!-- <canvas id=\"myCanvas\"></canvas> -->
            </div>

           <div class=\"contenedorFirma\">
                    <img src=\"plantilla/imageBackground.png\" alt=\"\" width=\"100%\" >
            </div>

        </div>

        

    <div id=\"example1\"></div>
          
    </div>
</div>

";
    }

    // line 54
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 62
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);
/*         cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");  
 */ 
        
    });
        Dropzone.options.myDropzone = {
            paramName: \"file\", // The name that will be used to transfer the file
            maxFilesize:2, //mb
            dictDefaultMessage:\"Arrastra o da click\"

        };
        \$(\".contenedor\").hide();
        
        \$(\"#opcion\").on( \"click\", function() {
            //muestro mediante id
            \$('.contenedor').show(\"fast\",\"swing\"); //muestro mediante id
            if (\$('.contenedor').show) {
                \$('.contenedorOpcion').show(); //muestro mediante id
                \$('.contenedorFirma').hide(); //muestro mediante id
                PDFObject.embed(\"plantilla/Wikipedia.pdf\", \"#Pdf\");
            }
            
            /* var viewer = \$(\"#myCanvas\"); */
           
           /*  PDFObject.embed(\"plantilla/MEMORIASMAGDALENACRECE2020PPT.pdf\",viewer); */
        });

        \$(\"#firma\").on( \"click\", function() {
            \$('.contenedor').show(\"fast\",\"swing\"); //oculto mediante id
            if (\$('.contenedor').show) {
                    \$('.contenedorFirma').show(); //muestro mediante id
                    \$('.contenedorOpcion').hide(); //muestro mediante id
            }
        });

        /* PDFObject.embed(\"plantilla/MEMORIASMAGDALENACRECE2020PPT.pdf\", \"#example1\"); */
</script>
";
    }

    public function getTemplateName()
    {
        return "inicio.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 63,  123 => 62,  114 => 55,  110 => 54,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}

{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\" class=\"logo\">Aplicación CCSM           
{% endblock %}
  
{% block contenido %}
<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">

        <div class=\"opcioneCheck d-flex flex-row justify-content-end\">
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"firma\" value=\"option1\">
                <label class=\"form-check-label\" for=\"exampleRadios1\">
                    Firma
                </label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"opcion\" value=\"option2\">
                <label class=\"form-check-label\" for=\"exampleRadios2\">
                    Opcion
                </label>
            </div>
        </div>
         
        <!-- Zona de Arrastrar y soltar -->
        <form action=\"plantilla/subir.html.php\" class=\"dropzone\" id=\"myDropzone\">
            <div class=\"fallback\">
                <input name=\"file\" type=\"file\" multiple />            
            </div>
        </form>

        <!-- Div contendedor informa de respuesta -->
        <div class=\"contenedor\">
            <div class=\"contenedorOpcion\" id=\"Pdf\">
                <!-- <canvas id=\"myCanvas\"></canvas> -->
            </div>

           <div class=\"contenedorFirma\">
                    <img src=\"plantilla/imageBackground.png\" alt=\"\" width=\"100%\" >
            </div>

        </div>

        

    <div id=\"example1\"></div>
          
    </div>
</div>

{% endblock %}

{% block piecera %}
<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);
/*         cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");  
 */ 
        
    });
        Dropzone.options.myDropzone = {
            paramName: \"file\", // The name that will be used to transfer the file
            maxFilesize:2, //mb
            dictDefaultMessage:\"Arrastra o da click\"

        };
        \$(\".contenedor\").hide();
        
        \$(\"#opcion\").on( \"click\", function() {
            //muestro mediante id
            \$('.contenedor').show(\"fast\",\"swing\"); //muestro mediante id
            if (\$('.contenedor').show) {
                \$('.contenedorOpcion').show(); //muestro mediante id
                \$('.contenedorFirma').hide(); //muestro mediante id
                PDFObject.embed(\"plantilla/Wikipedia.pdf\", \"#Pdf\");
            }
            
            /* var viewer = \$(\"#myCanvas\"); */
           
           /*  PDFObject.embed(\"plantilla/MEMORIASMAGDALENACRECE2020PPT.pdf\",viewer); */
        });

        \$(\"#firma\").on( \"click\", function() {
            \$('.contenedor').show(\"fast\",\"swing\"); //oculto mediante id
            if (\$('.contenedor').show) {
                    \$('.contenedorFirma').show(); //muestro mediante id
                    \$('.contenedorOpcion').hide(); //muestro mediante id
            }
        });

        /* PDFObject.embed(\"plantilla/MEMORIASMAGDALENACRECE2020PPT.pdf\", \"#example1\"); */
</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\DocumentoPDF-Dropzone\\DocumentoPDF\\plantilla\\inicio.html.php");
    }
}
