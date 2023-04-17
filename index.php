<?php
    require('model/db.php');

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
          $action = $_GET['action'];
        } else {
          $action = 'index';
        }
      } else {
        $controller = 'guest';
        $action = 'home_page';
      }
      require_once('route.php');
?>