<?php
//require_once 'librerias/Controlador.php';
//require_once 'librerias/config.php';
//require_once 'librerias/Core.php';
//require_once 'librerias/Database.php';

///Autoload php

spl_autoload_register(function($nombreClase){
	require_once 'librerias/' .$nombreClase. '.php';

});