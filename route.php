<?php
    //list of controllers and action
    $controllers = array('guest' => ['home_page', 'login', 'signup', 'menu', 'getDiscount', 'login_manager'],
                         'user' => ['home_page_user', 'signup', 'login', 'logout'],
                         'manager' => ['home_page_manager', 'manage_employee', 'login', 'logout', 'delete_employee', 'edit_employee'],
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