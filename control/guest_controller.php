<?php
    include_once('base_controller.php');
    class guestController extends baseController {
        //display home page UI for guest
        function home_page() {
            $this->render("view/html/UI_guest/home_page");
        }

        //display login UI for guest
        function login() {
            $this->render("view\html\UI_guest\login");
        }

        //display login UI for manager
        function login_manager() {
            $this->render("view\html\UI_guest\login_manager");
        }

        //display signup UI
        function signup() {
            $this->render('view\html\UI_guest\signup');
        }

        function dish_list() {
            include("model\product_db.php");
            $data = array ('productList' => getProductList($_GET['type']),
                           'type' => $_GET['type']);
            $this->render('view\html\UI_guest\dish_list', $data);

        }
    }
?>