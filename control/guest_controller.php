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
            session_start();
            if (!isset($_SESSION['userObj'])) {
                $data = array ('productList' => getProductList($_GET['type']),
                           'type' => $_GET['type']);
                $this->render('view\html\UI_guest\dish_list', $data);
            }
            else header('Location: index.php?controller=user&action=dish_list&type='.$_GET['type']);

        }

        function dish_detail() {
            include("model\product_db.php");
            session_start();
            
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
            session_start();
            if (!isset($_SESSION['userObj'])) {
                $data = array('menuList' => getMenuList());
                $this->render('view\html\UI_guest\menu', $data);
            }
            else header('index.php?controller=user&action=menu');
        }
    }
?>