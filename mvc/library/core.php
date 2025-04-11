<?php
//Coeur des functions

function safe($param)
{
    return addslashes($param);
}

//fonction qui va recuperer un style de base pour la page
function render($file, $data = null)
{
    if (is_array($data)) {
        extract($data);
    }

    $layout_file = VIEW_DIR . "/layouts/layout.php"; //Dossier views selon le dossier config
    ob_start();
    include_once(VIEW_DIR . "/" . $file);
    $content = ob_get_clean();
    include_once($layout_file);
}
