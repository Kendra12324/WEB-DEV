<?php

class Controller {
    protected function loadModel($modelName) {
        $modelPath = __DIR__ . '/../app/models/' . $modelName . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $modelName();
        }
        throw new Exception("Model not found: " . $modelName);
    }

    protected function renderView($viewName, $data = []) {
        $viewPath = __DIR__ . '/../app/views/' . $viewName . '.php';
        if (file_exists($viewPath)) {
            extract($data);
            require_once $viewPath;
        } else {
            throw new Exception("View not found: " . $viewName);
        }
    }
}