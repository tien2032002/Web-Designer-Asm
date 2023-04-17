<?php
    include_once('base_controller.php');
    class userController extends baseController {

        //home page for guest (not login yet)
        function home_page() {
            $this->render('view/html/UI_user/UI_home_page');
        }
        
        //login form
        function login() {
            //if user has filled login form
            if (isset($_POST['phone']) && isset($_POST['password'])) {
                
                include_once('model/customer_db.php');
                
                //check login infomation, get login error
                $checkLogin = checkLogin($_POST['phone'], $_POST['password']);

                //if login infomation not correct, redirect to login page with error code
                if ($checkLogin!='good') {
                    $data = array('loginErr' => $checkLogin);
                    $this->render('view/html/UI_guest/UI_login', $data);
                }
                //login infomation correct => go to home page for user
                else {
                    header('Location: index.php?controller=user&action=home_page_user');
                }
            }
            else {
                //if not filled form yet
                $data = array('loginErr' => 'first');
                $this->render('view/html/UI_guest/UI_login', $data);
            }
        }

        //register form

        function signup() {
            //include model
            include_once('model/customer_db.php');
            if (isset($_POST['firstName']) && isset($_POST['lastName']) &&
                isset($_POST['phone']) && isset($_POST['email']) &&
                isset($_POST['password']) && isset($_POST['password2'])){     
                    //get error code 
                    $errArr = checkSignUp($_POST['firstName'], $_POST['lastName'],
                                $_POST['phone'], $_POST['email'], 
                                $_POST['password'], $_POST['password2']);
                    extract($errArr);
                    //if all information are good=> start session
                    //save user info and go to home page for user
                    if($firstNameErr == 'good' && $lastNameErr == 'good' &&
                       $phoneErr == 'good' && $emailErr == 'good' && 
                       $passwordErr == 'good' && $password2Err == 'good') {
                            addCustomer($_POST['firstName'], $_POST['lastName'],
                                        $_POST['phone'], $_POST['email'], 
                                        $_POST['password'], $_POST['password2']);
                            session_start();
                            $_SESSION['phone'] = $_POST['phone'];
                            header("Location: index.php?controller=user&action=home_page_user");
                       }
                       //if have error, go back to signup page and display warning
                    else $this->render('view/html/UI_guest/UI_signup', $errArr);
            }
            else {
                $errArr = array('firstNameErr' => 'first',
                'lastNameErr' => 'first',
                'phoneErr' => 'first',
                'emailErr' => 'first',
                'passwordErr' => 'first',
                'password2Err' => 'first');
                $this->render('view/html/UI_guest/UI_signup', $errArr);
            }
        }

        //display user home page
        function home_page_user() {
            //check session
            //if dont have session, display error and exit
            session_start();
            if (isset($_SESSION['userObj'])) {
                include("model/customer_db.php");
                $data = array("userObj" => $_SESSION['userObj']);
                $this->render("view/html/UI_user/UI_home_page_user", $data);
            }
            else {
                echo "error";
                exit;
            }
        }

        function logout() {
            //logout, destroy session and go to home page for guest
            session_start();
            session_destroy();
            header("Location: index.php?controller=guest&action=home_page");
        }

         //display profile user
        function profile_user(){
            session_start();
            if(isset($_SESSION['userObj'])){
                $data = array("userObj" => $_SESSION['userObj']);
                $this->render('view/html/UI_user/UI_profile_user', $data);
            }
            
        }

        function dish_list() {
            include("model\product_db.php");
            session_start();
            if (isset($_SESSION['userObj'])) {
                $data = array ('productList' => getProductList($_GET['type']),
                           'type' => $_GET['type']);
                $this->render('view\html\UI_user\dish_list', $data);
            }
            else header('index.php?controller=guest&action=dish_list');
        }

        function dish_detail() {
            include("model\product_db.php");
            session_start();
            if (isset($_SESSION['userObj'])) {
                $getProductObj = getProductById($_GET['id']);
                if ($getProductObj == 'invalid id') echo 'wrong id';
                else {
                    $data = array('productObj' => $getProductObj,
                                'relatedProduct' => get3RandomProduct(json_decode($getProductObj)->type, $_GET['id']));
                    $this->render('view\html\UI_user\dish_detail', $data);
                }
            }
        }

        function menu() {
            include("model\product_db.php");
            session_start();
            if (isset($_SESSION['userObj'])) {
                $data = array('menuList' => getMenuList());
                $this->render('view\html\UI_user\menu_user', $data);
            }
            else header('index.php?guest=user&action=menu');
        }

        function change_info() {
            include('model\customer_db.php');
            session_start();
            $changeErr = (checkChangeInfo());
            changeInfor($changeErr);
            $this->render('view\html\UI_user\UI_profile_user', $changeErr);
        }
    }
?>