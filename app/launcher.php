<?php
//cargamos librerias
/* require_once 'libraries/Core.php';
require_once 'libraries/Base.php';
require_once 'libraries/Controller.php';*/

require_once 'config/consts.php';
require_once 'helpers/something.php';

spl_autoload_register(function($classname){
    require_once 'libraries/' . $classname . '.php';

});