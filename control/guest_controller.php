<?php
    include_once('base_controller.php');
    class guestController extends baseController {
        function home_page() {
            $this->render("view/html/UI_guest/home_page");
        }

        function getdiscount() {
            $this->render("view/html/UI_guest/discount");
        }

        function menu() {
            include("model/product_db.php");
            if (isset($_GET['type'])) {
                $data = array('type' => "starter",
                              'productList' => getProductList($_GET['type']));
                $this->render("view/html/UI_guest/starter");
            }
        }

        function login() {
            $this->render("view\html\UI_guest\login");
        }

        function login_manager() {
            $this->render("view\html\UI_guest\login_manager");
        }

        function signup() {
            $this->render('view\html\UI_guest\signup');
        }
    }
?>