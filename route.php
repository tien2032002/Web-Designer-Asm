<?php
    //list of controllers and action
    $controllers = array('user' => ['home_page', 'home_page_user', 'login', 'signup', 'logout'],
                         'manager' => ['home_page_manager', 'login', 'manage_employee', 'logout', 'delete_employee', 'edit_employee'],
                         'employee');

    if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
        $controller = 'user';
        $action = 'error';
    }

    include_once('control/' . $controller . '_controller.php');
    $klass = $controller . 'Controller';
    $controller = new $klass;
    $controller->$action();
?>