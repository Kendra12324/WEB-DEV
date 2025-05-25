<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'product';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controllerObj = new $controllerName();
        if (method_exists($controllerObj, 'handle')) {
            $controllerObj->handle($action);
        } else {
            http_response_code(404);
            echo "Handle method not found in controller!";
        }
    } else {
        http_response_code(500);
        echo "Controller class '{$controllerName}' not found!";
    }
} else {
    http_response_code(404);
    echo "Controller file '{$controllerFile}' not found!";
}
?>