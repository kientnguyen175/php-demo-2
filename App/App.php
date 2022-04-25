<?php
    class App
    {
        public $controller;
        public $action;

        public function __construct()
        {
            $this->controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'post';
            $this->action = isset($_GET['action']) ? $_GET['action'] : 'index';
        }

        public function run()
        {
            $controller_name = ucfirst($this->controller) . "Controller";
            $action = $this->action;

            require_once ROOT . "/App/Controllers/Controller.php";
            require_once ROOT . "/App/Models/Database.php";
            require_once ROOT . "/App/Controllers/$controller_name.php";

            $controller = new $controller_name();
            $controller->$action();
        }
    }
