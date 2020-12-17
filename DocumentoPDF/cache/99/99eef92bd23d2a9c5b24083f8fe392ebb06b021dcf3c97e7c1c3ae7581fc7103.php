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

/* estructura.tmpl */
class __TwigTemplate_01f08e9c657b92c6e0c40718b5b4d076853a5dec09135c9d85dc8a8334f7506f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "mantenimiento", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $this->loadTemplate("mantenimiento.html.php", "estructura.tmpl", 2)->display($context);
        } else {
            // line 3
            echo "    
    ";
            // line 4
            $this->loadTemplate("inicio.html.php", "estructura.tmpl", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "estructura.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if Config.mantenimiento %}
    {% include \"mantenimiento.html.php\" %}
{% else %}    
    {% include \"inicio.html.php\" %}
{% endif %}", "estructura.tmpl", "C:\\laragon\\www\\AppIndependientesPlantillaBase\\plantilla\\estructura.tmpl");
    }
}
