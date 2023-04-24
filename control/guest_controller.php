<?php
    include_once('base_controller.php');
    class guestController extends baseController {
        //display home page UI for guest
        function home_page() {
            $this->render("view/html/UI_guest/UI_home_page");
        }

        //display login UI for guest
        function login() {
            $this->render("view\html\UI_guest\UI_login");
        }

        //display login UI for manager
        function login_manager() {
            $this->render("view\html\UI_guest\UI_login_QTV");
        }

        //display signup UI
        function signup() {
            $this->render('view\html\UI_guest\UI_signup');
        }

        function dish_list() {
            include("model\product_db.php");
            if (!isset($_SESSION)) session_start();
            if (!isset($_SESSION['userObj'])) {
                $data = array ('productList' => getProductList($_GET['type']),
                           'type' => $_GET['type']);
                $this->render('view\html\UI_guest\dish_list', $data);
            }
            else header('Location: index.php?controller=user&action=dish_list&type='.$_GET['type']);

        }

        function dish_detail() {
            include("model\product_db.php");
            if (!isset($_SESSION)) session_start();
            
            if (!isset($_SESSION['userObj'])) {
                $getProductObj = getProductById($_GET['id']);
                if ($getProductObj == 'invalid id') echo 'wrong id';
                else {
                    $data = array('productObj' => $getProductObj,
                                'relatedProduct' => get3RandomProduct(json_decode($getProductObj)->type, $_GET['id']));
                    $this->render('view\html\UI_guest\dish_detail', $data);
                }
            }
            else header('Location: index.php?controller=user&action=dish_detail&id='.$_GET['id']);
        }

        function menu() {
            include('model\product_db.php');
            if (!isset($_SESSION)) session_start();
            if (!isset($_SESSION['userObj'])) {
                $data = array('menuList' => getMenuList());
                $this->render('view\html\UI_guest\menu', $data);
            }
            else header('index.php?controller=user&action=menu');
        }

        function news() {
            $this->render('view\html\UI_guest\news');
        }

        function reserve() {
            include_once('model\table_db.php');
            if ($_POST['date'] == '') $_POST['date'] = date("Y-m-d");
            if ($_POST['quantity'] == '') $_POST['quantity'] = 4;
            $errList = checkReserve($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['date'], $_POST['time'], $_POST['quantity']);

            if($errList['nameErr'] == 'good' && $errList['emailErr'] == 'good' && $errList['phoneErr'] == 'good') {
                reserve_table($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['date'], $_POST['time'], $_POST['quantity']);
                header('Location: /home_page');
            }
            else {
                $this->render('view\html\UI_guest\UI_home_page', $errList);
            }
        }

    }
?>