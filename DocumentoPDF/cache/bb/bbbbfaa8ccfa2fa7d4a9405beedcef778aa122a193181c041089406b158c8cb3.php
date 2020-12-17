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
        
    </div>
</div>   
";
    }

    // line 15
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 23
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        setTimeout(ocultarCargando, 1234);

        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\"); 
        
    });

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
        return array (  88 => 24,  84 => 23,  75 => 16,  71 => 15,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
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

        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\"); 
        
    });

</script>
{% endblock %}", "inicio.html.php", "C:\\laragon\\www\\AppIndependientesPlantillaBase\\plantilla\\inicio.html.php");
    }
}
