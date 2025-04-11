<?php

//connection au serveur sql
$connex = mysqli_connect('localhost', 'root', 'TravailPratique2!', 'tp2', '3306');

if (mysqli_connect_error()) {
    echo "Échec de la connection " . mysqli_connect_error();
    exit();
}

mysqli_set_charset($connex, "utf8");
