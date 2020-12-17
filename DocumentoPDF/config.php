<?php

//Archivo de Configuración y Variables Globales
session_start();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Bogota');

define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
define('DS', DIRECTORY_SEPARATOR);
if (!defined('DIR_BASE')) {
    define('DIR_BASE', __DIR__ . DIRECTORY_SEPARATOR);
}

require_once 'vendor/autoload.php';

class Config {

    public $APP_NOMBRE = "APP Example";
    public $APP_TITULO = "Titulo de la Aplicación - Llamado a la Acción";
    public $APP_DESCRIPCION = "Descripcion de la Aplicación - Información para Redes Sociales";
    public $URL_BASE = "https://aplicaciones.ccsm.org.co/base.tmpl/";
    public $DIR_BASE = __DIR__ . DIRECTORY_SEPARATOR;
    public $Mantenimiento = 0;

    function __construct() {
        spl_autoload_register(function ($className) {
            $path = $this->DIR_BASE . 'php/clases/';
            if (is_file($path . $className . '.clase.php')) {
                include $path . $className . '.clase.php';
            }
            $path = $this->DIR_BASE . 'php/controladores/';
            if (is_file($path . $className . '.control.php')) {
                include $path . $className . '.control.php';
            }
            $path = $this->DIR_BASE . 'php/modelos/';
            if (is_file($path . $className . '.modelo.php')) {
                include $path . $className . '.modelo.php';
            }
        });
    }

}

$Config = new Config();


