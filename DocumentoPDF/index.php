<?php
require_once 'config.php';
$loader = new \Twig\Loader\FilesystemLoader('plantilla');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'debug' => true
        ]
);
$twig->addExtension(new \Twig\Extension\DebugExtension());
//Por aqui podemos conectarnos a la API del SICAM para sacar la info de la aplicación.
$twig->addGlobal('Config', new Config());

//$filter = new \Twig\TwigFilter('Config', new Config());
//$twig->addFilter($filter);

echo $twig->render('estructura.tmpl');