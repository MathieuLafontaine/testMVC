<?php

//Display des messages d'erreurs dans le code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Execution du code a partir de l'index

require_once('configuration/configuration.php');
require_once('library/core.php');

//quand il ne connait pas la valeur du controller, il va toujours retourner base ou appeler la function safe
$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
//quand nous n'avons pas de function, nous avons index par default
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];


$controller_file = "controllers/" . ucfirst($controller) . "Controller.php";

if (!file_exists($controller_file)) {
    trigger_error('Could not find this file');
    exit();
}

require_once($controller_file);

$controller_function = strtolower($controller) . "_controller_" . $function;

if (!function_exists($controller_function)) {
    trigger_error('Could not find this function');
    exit();
}

//Par methode post, nous devons appeler la ligne suivante
call_user_func($controller_function, $_REQUEST);
