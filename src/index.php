<?php

use App\Controller\BaseController;
require_once '../vendor/autoload.php';

if($_GET):
    $controller = $_GET['controller'];
    $metodo = $_GET['metodo'];

    $objClass = 'App\\Controller\\$controller';

    $obj = new $objClass();
    $obj->$metodo();

else:
    $start = new BaseController();
    $start->index();

endif;    