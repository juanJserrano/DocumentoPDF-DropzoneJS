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

/* base.html.php */
class __TwigTemplate_77e8ef821621497a7984c98edf6f8791b6f22ba977379c0d05d7fb8523a5ebe2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'logo' => [$this, 'block_logo'],
            'menu' => [$this, 'block_menu'],
            'contenido' => [$this, 'block_contenido'],
            'piecera' => [$this, 'block_piecera'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- <!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<!-- <!-- <html lang=\"es\"> <!--<![endif]-->
<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"apple-touch-icon\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"favicon/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"favicon/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"favicon/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"favicon/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"favicon/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"favicon/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"favicon/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"favicon/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-icon-180x180.png\">

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"favicon/favicon-96x96.png\">        
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"favicon/android-icon-192x192.png\">

        <link rel=\"manifest\" href=\"manifest.json\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"favicon/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link rel=\"mask-icon\" href=\"favicon.s  vg\" color=\"#5bbad5\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Primary Meta Tags -->
        <title>";
        // line 39
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 39), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 39), "html", null, true);
        echo "</title>
        <meta name=\"title\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
        <meta name=\"application-name\" content=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["nombreAplicacion"] ?? null), "html", null, true);
        echo "\">
        <meta name=\"robots\" content=\"index,follow\"><!-- All Search Engines -->
        <meta name=\"googlebot\" content=\"index,follow\"><!-- Google Specific -->

        <!-- Open Graph / Facebook -->
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
        <meta property=\"og:title\" content=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        <meta property=\"og:description\" content=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
        <meta property=\"og:image\" content=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 51), "html", null, true);
        echo "/favicon.png\">

        <!-- Twitter -->
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
        <meta property=\"twitter:title\" content=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_TITULO", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
        <meta property=\"twitter:description\" content=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_DESCRIPCION", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
        <meta property=\"twitter:image\" content=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Config"] ?? null), "APP_URL", [], "any", false, false, false, 58), "html", null, true);
        echo "/favicon.png\">}

        <!--meta-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

        <link rel=\"stylesheet\" href=\"css/jquery-ui.min.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
       <!--  <link rel=\"stylesheet\" href=\"css/bootstrap-theme.min.css\">  --> 

        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome/all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fuente-ccsm.css\">


      <!--   <link rel=\"stylesheet\" href=\"css/animate.css\">  -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
        <script src=\"https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js\"></script>
        <script src=\"https://kit.fontawesome.com/f062c2af32.js\" crossorigin=\"anonymous\"></script>       
 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" /> <!--animacion de -->
        <link rel=\"stylesheet\" href=\"css/sweetalert2.min.css\">
        <link rel=\"stylesheet\" href=\"css/magic/magic.min.css\">
        <link rel=\"stylesheet\" href=\"dropzone-5.7.0/dist/basic.css\">
        <link rel=\"stylesheet\" href=\"dropzone-5.7.0/dist/dropzone.css\">
        

        ";
        // line 85
        $this->displayBlock('css', $context, $blocks);
        // line 86
        echo "
        <link rel=\"stylesheet\" href=\"css/main.css\"  media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/print.css\"  media=\"print\" >
       <!--  <script type=\"text/javascript\">
            var _apisicam = _apisicam || {};
            _apisicam.clavePublica = 'UH2NeOFONF+fFIvrdE/+CvuuQbX4iQ+6rxcx0h71gdaSDNV0vn5ZWq9ngOBeDsHS';
            _apisicam.clavePrivada = 'p+NcgxIqwqg7Khl4BvOmN08RQtSM68OMpC5uFZC+mYE=';
            window.apisicam || (function (d) {
                var s, c, o = apisicam = function () {
                    o._.push(arguments)
                };
                o._ = [];
                s = d.getElementsByTagName('script')[0];
                c = d.createElement('script');
                c.type = 'text/javascript';
                c.charset = 'utf-8';
                c.async = true;
                c.src = 'https://cliente.api.sicam32.net/javascript/index.php?' + _apisicam.clavePublica + ':' + _apisicam.clavePrivada;
                s.parentNode.insertBefore(c, s);
            })(document);
        </script> -->

        <style>
            footer{
                position:absolute;
                bottom:0;
                left:0;
            }
        </style>
    </head>
    <body  class=\"bg-light\" >

        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <a class=\"navbar-brand\" href=\"/\">
                ";
        // line 120
        $this->displayBlock('logo', $context, $blocks);
        // line 121
        echo "            </a>
            <div class=\"collapse navbar-collapse\" id=\"navbarsAplicacionCCSM\">
                <ul class=\"navbar-nav mr-auto\">
                    ";
        // line 124
        $this->displayBlock('menu', $context, $blocks);
        // line 125
        echo "                </ul>
            </div>
        </nav>

        

        <main role=\"main\">
            ";
        // line 132
        $this->displayBlock('contenido', $context, $blocks);
        // line 133
        echo "        </main>
         <footer class=\"text-muted text-center text-small footer \">
            <p class=\"mb-1\">Cámara de Comercio de Santa Marta para el Magdalena &copy; ";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            ";
        // line 136
        $this->displayBlock('piecera', $context, $blocks);
        // line 137
        echo "        </footer> 

        <div class = \"loader no-print\" style = \"position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999; background-color: rgba(0,0,0,0.7);\" >
            <table align = \"center\" style = \"width: 100%; height: 100%;\">
                <td align = \"center\" valign = \"middle\" class = \"animated infinite flash pulse\" >
                    <img src = \"https://si.sicam32.net/plantillas/default/images/Logo-Blanco.png\" alt = \"\" style = \"max-width: 210px;\"/>
                </td>
            </table>
        </div>



        <script src=\"js/vendor/jquery-3.4.1.min.js\"></script>        
        <script src=\"js/vendor/jquery-ui.min.js\"></script>
        <!--<script src=\"js/vendor/jquery.mobile-1.4.5.min.js\"></script>-->
        <script src=\"js/vendor/popper.min.js\" ></script>
        <script src=\"js/vendor/bootstrap.min.js\" ></script>        
        <script src=\"js/vendor/sweetalert2.min.js\" ></script>
        <script src=\"js/vendor/wow.min.js\"></script>

        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>
        <script src=\"dropzone-5.7.0/dist/dropzone.js\"></script>

      
    
        ";
        // line 163
        $this->displayBlock('js', $context, $blocks);
        echo " 
    

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-ZBTLK22S7Q\"></script>
        <script type=\"text/javascript\" >
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-ZBTLK22S7Q');
        </script>

        <script type=\"text/javascript\">
            new WOW().init();
        </script>

    </body>
</html>";
    }

    // line 39
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 85
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 120
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 124
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 132
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 136
    public function block_piecera($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 163
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 163,  321 => 136,  315 => 132,  309 => 124,  303 => 120,  297 => 85,  291 => 39,  265 => 163,  237 => 137,  235 => 136,  231 => 135,  227 => 133,  225 => 132,  216 => 125,  214 => 124,  209 => 121,  207 => 120,  171 => 86,  169 => 85,  139 => 58,  135 => 57,  131 => 56,  127 => 55,  120 => 51,  116 => 50,  112 => 49,  108 => 48,  99 => 42,  95 => 41,  91 => 40,  84 => 39,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<!-- <!-- <html lang=\"es\"> <!--<![endif]-->
<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"apple-touch-icon\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"favicon/apple-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"favicon/apple-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"favicon/apple-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"favicon/apple-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"favicon/apple-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"favicon/apple-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"favicon/apple-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"favicon/apple-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-icon-180x180.png\">

        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"favicon/favicon-96x96.png\">        
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"favicon/android-icon-192x192.png\">

        <link rel=\"manifest\" href=\"manifest.json\">

        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"msapplication-TileImage\" content=\"favicon/ms-icon-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link rel=\"mask-icon\" href=\"favicon.s  vg\" color=\"#5bbad5\">
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <!-- Primary Meta Tags -->
        <title>{% block title %}{% endblock %}{{Config.APP_TITULO}} - {{Config.APP_URL}}</title>
        <meta name=\"title\" content=\"{{Config.APP_TITULO}}\">
        <meta name=\"description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta name=\"application-name\" content=\"{{nombreAplicacion}}\">
        <meta name=\"robots\" content=\"index,follow\"><!-- All Search Engines -->
        <meta name=\"googlebot\" content=\"index,follow\"><!-- Google Specific -->

        <!-- Open Graph / Facebook -->
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:url\" content=\"{{Config.APP_URL}}\">
        <meta property=\"og:title\" content=\"{{Config.APP_TITULO}}\">
        <meta property=\"og:description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta property=\"og:image\" content=\"{{Config.APP_URL}}/favicon.png\">

        <!-- Twitter -->
        <meta property=\"twitter:card\" content=\"summary_large_image\">
        <meta property=\"twitter:url\" content=\"{{Config.APP_URL}}\">
        <meta property=\"twitter:title\" content=\"{{Config.APP_TITULO}}\">
        <meta property=\"twitter:description\" content=\"{{Config.APP_DESCRIPCION}}\">
        <meta property=\"twitter:image\" content=\"{{Config.APP_URL}}/favicon.png\">}

        <!--meta-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">

        <link rel=\"stylesheet\" href=\"css/jquery-ui.min.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
       <!--  <link rel=\"stylesheet\" href=\"css/bootstrap-theme.min.css\">  --> 

        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome-all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome/all.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/fuente-ccsm.css\">


      <!--   <link rel=\"stylesheet\" href=\"css/animate.css\">  -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
        <script src=\"https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js\"></script>
        <script src=\"https://kit.fontawesome.com/f062c2af32.js\" crossorigin=\"anonymous\"></script>       
 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" /> <!--animacion de -->
        <link rel=\"stylesheet\" href=\"css/sweetalert2.min.css\">
        <link rel=\"stylesheet\" href=\"css/magic/magic.min.css\">
        <link rel=\"stylesheet\" href=\"dropzone-5.7.0/dist/basic.css\">
        <link rel=\"stylesheet\" href=\"dropzone-5.7.0/dist/dropzone.css\">
        

        {% block css %}{% endblock %}

        <link rel=\"stylesheet\" href=\"css/main.css\"  media=\"screen\" >
        <link rel=\"stylesheet\" href=\"css/print.css\"  media=\"print\" >
       <!--  <script type=\"text/javascript\">
            var _apisicam = _apisicam || {};
            _apisicam.clavePublica = 'UH2NeOFONF+fFIvrdE/+CvuuQbX4iQ+6rxcx0h71gdaSDNV0vn5ZWq9ngOBeDsHS';
            _apisicam.clavePrivada = 'p+NcgxIqwqg7Khl4BvOmN08RQtSM68OMpC5uFZC+mYE=';
            window.apisicam || (function (d) {
                var s, c, o = apisicam = function () {
                    o._.push(arguments)
                };
                o._ = [];
                s = d.getElementsByTagName('script')[0];
                c = d.createElement('script');
                c.type = 'text/javascript';
                c.charset = 'utf-8';
                c.async = true;
                c.src = 'https://cliente.api.sicam32.net/javascript/index.php?' + _apisicam.clavePublica + ':' + _apisicam.clavePrivada;
                s.parentNode.insertBefore(c, s);
            })(document);
        </script> -->

        <style>
            footer{
                position:absolute;
                bottom:0;
                left:0;
            }
        </style>
    </head>
    <body  class=\"bg-light\" >

        <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
            <a class=\"navbar-brand\" href=\"/\">
                {% block logo %}{% endblock %}
            </a>
            <div class=\"collapse navbar-collapse\" id=\"navbarsAplicacionCCSM\">
                <ul class=\"navbar-nav mr-auto\">
                    {% block menu %}{% endblock %}
                </ul>
            </div>
        </nav>

        

        <main role=\"main\">
            {% block contenido %}{% endblock %}
        </main>
         <footer class=\"text-muted text-center text-small footer \">
            <p class=\"mb-1\">Cámara de Comercio de Santa Marta para el Magdalena &copy; {{ \"now\"|date(\"Y\") }}</p>
            {% block piecera %}{% endblock %}
        </footer> 

        <div class = \"loader no-print\" style = \"position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 99999; background-color: rgba(0,0,0,0.7);\" >
            <table align = \"center\" style = \"width: 100%; height: 100%;\">
                <td align = \"center\" valign = \"middle\" class = \"animated infinite flash pulse\" >
                    <img src = \"https://si.sicam32.net/plantillas/default/images/Logo-Blanco.png\" alt = \"\" style = \"max-width: 210px;\"/>
                </td>
            </table>
        </div>



        <script src=\"js/vendor/jquery-3.4.1.min.js\"></script>        
        <script src=\"js/vendor/jquery-ui.min.js\"></script>
        <!--<script src=\"js/vendor/jquery.mobile-1.4.5.min.js\"></script>-->
        <script src=\"js/vendor/popper.min.js\" ></script>
        <script src=\"js/vendor/bootstrap.min.js\" ></script>        
        <script src=\"js/vendor/sweetalert2.min.js\" ></script>
        <script src=\"js/vendor/wow.min.js\"></script>

        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>
        <script src=\"dropzone-5.7.0/dist/dropzone.js\"></script>

      
    
        {% block js%}{% endblock %} 
    

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-ZBTLK22S7Q\"></script>
        <script type=\"text/javascript\" >
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-ZBTLK22S7Q');
        </script>

        <script type=\"text/javascript\">
            new WOW().init();
        </script>

    </body>
</html>", "base.html.php", "C:\\laragon\\www\\DocumentoPDF-Dropzone\\DocumentoPDF\\plantilla\\base.html.php");
    }
}
