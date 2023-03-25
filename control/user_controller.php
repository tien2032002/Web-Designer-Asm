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
                    $this->render('view/html/UI_user/login', $data);
                }
                //login infomation correct => go to home page for user
                else {
                    header('Location: index.php?controller=user&action=home_page_user');
                }
            }
            else {
                $data = array('loginErr' => 'first');
                $this->render('view/html/UI_user/login', $data);
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
                            $_SESSION['name'] = $_POST['firstName']. ' ' .$_POST['lastName'];
                            header("Location: index.php?controller=user&action=home_page_user");
                       }

                    else $this->render('view/html/UI_user/signup', $errArr);
            }
            else {
                $errArr = array('firstNameErr' => 'first',
                'lastNameErr' => 'first',
                'phoneErr' => 'first',
                'emailErr' => 'first',
                'passwordErr' => 'first',
                'password2Err' => 'first');
                $this->render('view/html/UI_user/signup', $errArr);
            }
        }

        function home_page_user() {
            $this->render('view/html/UI_user/home_page_user');
        }

        function logout() {
            session_destroy();
            header("Location: index.php?controller=user&action=home_page");
        }
    }
?>