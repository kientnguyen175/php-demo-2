<?php
    class Controller
    {
        public function loadModel($model)
        {
            $model_name = ucfirst($model) . "Model";
            require_once ROOT . "/App/Models/$model_name.php";
            $model = new $model_name();
            return $model;
        }

        public function loadView($data)
        {
            $screen = $data['screen'];
            extract($data);
            require_once ROOT . "/App/Views/$screen.php";
        }
    }
