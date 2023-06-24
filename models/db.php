<?php
//conectamos el servidor 

if(!defined("DB_TYPE")){
    define("DB_TYPE","mysql"); //definimos el motor de bd
}
if(!defined("DB_HOST")){
    define("DB_HOST","localhost"); //definimos el nombre del servidor
}
if(!defined("DB_NAME")){
    define("DB_NAME","campus"); // nombre de la base de datos
}
if(!defined("DB_USER")){
    define("DB_USER","campus"); //nombre del usuaruio phpmyadmin
}
if(!defined("DB_PASSWORD")){
    define("DB_PASSWORD","campus2023"); //contraseña del usuario phpmyadmin
}

?>