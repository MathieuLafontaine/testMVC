<?php
define('MODEL_DIR', 'models');
define('VIEW_DIR', 'views');
define('CONNEX_DIR', 'library/connection.php');
//Nous donnons un chemin absolut afin que le dossier puisque toujours retourner a bon dossie plutot qu'un erreur message

$config = array(
    'default_controller' => 'base',
    'default_function' => 'index', //Si nous trouvons pas un fonction, la f8unction par default est index

);
