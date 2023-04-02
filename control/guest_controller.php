<?php
    include_once('base_controller.php');
    class guestController extends baseController {
        //display home page UI for guest
        function home_page() {
            $this->render("view/html/UI_guest/home_page");
        }
        //get discount infor
        function getdiscount() {
            $this->render("view/html/UI_guest/discount");
        }
        //get menu list
        function menu() {
            include("model/product_db.php");
            //get menu list according to type
            if (isset($_GET['type'])) {
                $data = array('type' => "starter",
                              'productList' => getProductList($_GET['type']));
                $this->render("view/html/UI_guest/starter");
            }
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
    }
?>