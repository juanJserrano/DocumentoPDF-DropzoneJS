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
class __TwigTemplate_5ea954e3a1d9adffa46c001e48ea0f741f4f333c4cd9e65afe89cc1ee03e98f4 extends Template
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
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\" checked>
                <label class=\"form-check-label\" for=\"exampleRadios1\">
                    Firma
                </label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\" value=\"option2\">
                <label class=\"form-check-label\" for=\"exampleRadios2\">
                    Opcion
                </label>
            </div>
        </div>
         
    <!-- Zona de Arrastrar y soltar -->
    <form action=\"plantilla/subir.php\" class=\"dropzone\" id=\"my-dropzone\">
        <div class=\"fallback\">
            <input name=\"file\" type=\"file\" multiple id=\"inputFile\"/>
        </div>
    </form>

    </div>
    </div>
</div>   
";
    }

    // line 38
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 46
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);
/*         cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");  
 */ 
        /*  \$(\"div#inputFile\").dropzone({ url:'pantilla/subir.php' });

        Dropzone.options.myAwesomeDropzone = {
        paramName: \"file\", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
            if (file.name == \"justinbieber.jpg\") {
            done(\"Naha, you don't.\");
            }
            else { done(); }
        }
        }; */

      
    });
         Dropzone.options.myAwesomeDropzone = false;
        var myDropzone = new Dropzone(\"#inputFile\", { url: \"subir.php\"});


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
        return array (  111 => 47,  107 => 46,  98 => 39,  94 => 38,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
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
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\" checked>
                <label class=\"form-check-label\" for=\"exampleRadios1\">
                    Firma
                </label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios2\" value=\"option2\">
                <label class=\"form-check-label\" for=\"exampleRadios2\">
                    Opcion
                </label>
            </div>
        </div>
         
    <!-- Zona de Arrastrar y soltar -->
    <form action=\"plantilla/subir.php\" class=\"dropzone\" id=\"my-dropzone\">
        <div class=\"fallback\">
            <input name=\"file\" type=\"file\" multiple id=\"inputFile\"/>
        </div>
    </form>

    </div>
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
        /*  \$(\"div#inputFile\").dropzone({ url:'pantilla/subir.php' });

        Dropzone.options.myAwesomeDropzone = {
        paramName: \"file\", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
            if (file.name == \"justinbieber.jpg\") {
            done(\"Naha, you don't.\");
            }
            else { done(); }
        }
        }; */

      
    });
         Dropzone.options.myAwesomeDropzone = false;
        var myDropzone = new Dropzone(\"#inputFile\", { url: \"subir.php\"});


</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\DocumentoPDF-Dropzone\\DocumentoPDF\\plantilla\\inicio.html.php");
    }
}
