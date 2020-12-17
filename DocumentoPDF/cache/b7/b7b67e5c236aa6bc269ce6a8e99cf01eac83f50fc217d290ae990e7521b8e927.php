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
class __TwigTemplate_18fc32111eb7daa9fc2449941b7113f6306f379decb534479b67874a7a832b88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
            'menu' => [$this, 'block_menu'],
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
        echo "<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\">                 
Aplicación CCSM
";
    }

    // line 8
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Link</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
</li>
<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
    </div>
</li>
";
    }

    // line 28
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">
        <h1 class=\"display-3\">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"text-center\">
    <div class=\"cover-container d-flex h-100 p-3 mx-auto flex-column wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
        <header class=\"masthead mb-auto\">
            <div class=\"inner\">
                <h3 class=\"masthead-brand\">Cover</h3>
                <nav class=\"nav nav-masthead justify-content-center\">
                    <a class=\"nav-link active\" href=\"#\">Home</a>
                    <a class=\"nav-link\" href=\"#\">Features</a>
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </nav>
            </div>
        </header>

        <main role=\"main\" class=\"inner cover\">
            <h1 class=\"cover-heading\">Cover your page.</h1>
            <p class=\"lead\">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class=\"lead\">
                <a href=\"#\" class=\"btn btn-lg btn-secondary\">Learn more</a>
            </p>
        </main>

        <footer class=\"mastfoot mt-auto\">
            <div class=\"inner\">
                <p>Cover template for <a href=\"https://getbootstrap.com/\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
            </div>
        </footer>
    </div>
</div>

<div id=\"formulario-muestra\" class=\"container\" ></div>
";
    }

    // line 70
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "}
<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
";
    }

    // line 78
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
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
        return array (  149 => 79,  145 => 78,  132 => 70,  89 => 29,  85 => 28,  64 => 9,  60 => 8,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.php\" %}

{% block logo %}
<img src=\"img/logo.png\" width=\"30\" height=\"30\" alt=\"\">                 
Aplicación CCSM
{% endblock %}

{% block menu %}
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Link</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
</li>
<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
    </div>
</li>
{% endblock %}                    

{% block contenido %}

<div class=\"jumbotron wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"1s\">
    <div class=\"container\">
        <h1 class=\"display-3\">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
    </div>
</div>

<div class=\"text-center\">
    <div class=\"cover-container d-flex h-100 p-3 mx-auto flex-column wow slideInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"2s\">
        <header class=\"masthead mb-auto\">
            <div class=\"inner\">
                <h3 class=\"masthead-brand\">Cover</h3>
                <nav class=\"nav nav-masthead justify-content-center\">
                    <a class=\"nav-link active\" href=\"#\">Home</a>
                    <a class=\"nav-link\" href=\"#\">Features</a>
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </nav>
            </div>
        </header>

        <main role=\"main\" class=\"inner cover\">
            <h1 class=\"cover-heading\">Cover your page.</h1>
            <p class=\"lead\">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class=\"lead\">
                <a href=\"#\" class=\"btn btn-lg btn-secondary\">Learn more</a>
            </p>
        </main>

        <footer class=\"mastfoot mt-auto\">
            <div class=\"inner\">
                <p>Cover template for <a href=\"https://getbootstrap.com/\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\">@mdo</a>.</p>
            </div>
        </footer>
    </div>
</div>

<div id=\"formulario-muestra\" class=\"container\" ></div>
{% endblock %}

{% block piecera %}}
<ul class = \"list-inline\">
    <li class = \"list-inline-item\"><a href = \"https://www.ccsm.org.co\">CamComercioSM</a></li>
    <li class = \"list-inline-item\"><a href = \"#\">Terminos y Condiciones</a></li>
    <li class = \"list-inline-item\"><a href = \"https://pqrs.ccsm.org.co\">Contactanos</a></li>
</ul>
{% endblock %}

{% block js%}
<script type=\"text/javascript\">
    \$(document).ready(function () {
        setTimeout(ocultarCargando, 1234);
        cargarVista(\"formulario-muestra\", \"formulario\", \"nuevo\");
    });
</script>
{% endblock %}", "inicio.html.php", "/home/cabox/workspace/base.tmpl/plantilla/inicio.html.php");
    }
}
