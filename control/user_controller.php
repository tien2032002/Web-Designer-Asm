<?php
    include_once('base_controller.php');
    class userController extends baseController {

        //home page for guest (not login yet)
        function home_page() {
            $this->render('view/html/UI_user/home_page');
        }
        
        //login form
        function login() {
            //if user has filled login form
            if (isset($_POST['phone']) && isset($_POST['password'])) {
                
                include_once('model/customer_db.php');
                
                //check login infomation
                $checkLogin = checkLogin($_POST['phone'], $_POST['password']);

                //if login infomation not correct, redirect to login page with error code
                if ($checkLogin!='good') {
                    $data = array('loginErr' => $checkLogin);
                    $this->render('view/html/UI_guest/login', $data);
                }
                //login infomation correct => go to home page for user
                else {
                    header('Location: index.php?controller=user&action=home_page_user');
                }
            }
            else {
                $data = array('loginErr' => 'first');
                echo "dp";
                $this->render('view/html/UI_guest/login', $data);
            }
        }

        //register form

        function signup() {
            include_once('model/customer_db.php');
            if (isset($_POST['firstName']) && isset($_POST['lastName']) &&
                isset($_POST['phone']) && isset($_POST['email']) &&
                isset($_POST['password']) && isset($_POST['password2'])){      
                    $errArr = checkSignUp($_POST['firstName'], $_POST['lastName'],
                                $_POST['phone'], $_POST['email'], 
                                $_POST['password'], $_POST['password2']);
                    extract($errArr);
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

                    else $this->render('view/html/UI_guest/signup', $errArr);
            }
            else {
                $errArr = array('firstNameErr' => 'first',
                'lastNameErr' => 'first',
                'phoneErr' => 'first',
                'emailErr' => 'first',
                'passwordErr' => 'first',
                'password2Err' => 'first');
                $this->render('view/html/UI_guest/signup', $errArr);
            }
        }

        function home_page_user() {
            session_start();
            if (isset($_SESSION['phone'])) {
                include("model/customer_db.php");
                $data = array("userObj" => getCustomerByPhone($_SESSION['phone']));
                $this->render("view/html/UI_user/home_page_user", $data);
            }
            else {
                echo "error";
                exit;
            }
        }

        function logout() {
            session_start();
            session_destroy();
            header("Location: index.php?controller=guest&action=home_page");
        }

    }
?>