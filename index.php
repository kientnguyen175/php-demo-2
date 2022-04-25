<?php
    session_start();
    require_once 'config.php';
    require_once 'App/App.php';
    $app = new App();
    $app->run();
