<?php
    //list of controllers and action
    $controllers = array('user' => ['home_page', 'home_page_user', 'login', 'signup', 'logout'],
                         'manager' => ['home', 'login', 'manage_employee'],
                         'employee');

    if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
        $controller = 'user';
        $action = 'error';
    }

    include_once('control/' . $controller . '_controller.php');
    $klass = $controller . 'Controller';
    $controller = new userController;
    $controller->$action();
?>