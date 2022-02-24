<?php



session_start();
require_once "autoload.php";
// kat3yt l controller li mhtajino

$params = explode("/", $_GET['p']);
// var_dump($params);

if (!empty($params[0])) {

    // produit/create
    // ProduitController
    // $obj = new ProduitController()
    // $obj
    // http://localhost/brieffilms/mvc/auth/login
    //auth/login
    // AuthController
    //login


    //login =>views || add => Controller


    $route = $_GET["p"];
    $viewPath = "mvc/app/views/$route.php";

    $controller = ucfirst($params[0]) . "Controller";
    $controllerPath = "mvc/app/controllers/$controller.php";
    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        $obj = new $controller();
        if (!empty($params[1])) {
            $action = $params[1];
            if (method_exists($obj, $action)) {
                if (!empty($params[2])) {
                    $obj->$action($params);
                } else {
                    $obj->$action();
                }
            } else {
                echo "<h1>page not found :)  !</h1>";
            }
        }
    } else if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        echo '<h3>not found</h3>';
    }
} else {
    include "mvc/app/views/home.php";
}
