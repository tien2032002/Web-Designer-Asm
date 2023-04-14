<?php
    include('make_url.php');
    //connect to database
    require('model/db.php');
    session_start();
    echo '<base href="/">';
    //link to controller and execute function according to action
    //define controller base on session
    //when login success, start a session
    //and save role to determine user's role
    //is customer or employee or manager
    
    //if cant define session variable roll
    //user will be guest
    if (!isset($_SESSION['role'])) {
      $controller = 'guest';
      //if have controller input, assign it to controller variable
      if (isset($_GET['controller'])) {
        $controller = $_GET['controller']; 
        if (isset($_GET['action'])) {
          $action = $_GET['action'];
        } else {
          $action = 'error';
        }
      }
      
      //default action of guest is home_page
      //if have action input, assign to action variable
      if (!isset($_GET['action'])) $action = 'home_page';
      else $action = $_GET['action'];
    }
    
    //if session variable role exist
    //assign it to controller variable
    //and corresponding to each role
    //we have default action
    else {
      switch ($_SESSION['role']) {
        case 'user':
          $controller = 'user';
          if (!isset($_GET['action'])) $action = 'home_page_user';
          else $action = $_GET['action'];
          break;

        case 'manager':
          $controller = 'manager';
          if (!isset($_GET['action'])) $action = 'home_page_manager';
          else $action = $_GET['action'];
          break;  

        case 'employee':
          $controller = 'employee';
          if (!isset($_GET['action'])) $action = 'home_page_employee';
          else $action = $_GET['action'];
          break;

        default:
          $controller = 'guest';
          $action = 'home_page';
          break;
      }
    }
      require_once('route.php');
?>