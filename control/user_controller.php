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

                    header('Location: /home_page_user');
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
                            if (!isset($_SESSION)) session_start();
                            //start session and save id & role
                            $_SESSION['role'] = 'user';
                            $_SESSION['id'] = getCustomerByPhone($_POST['phone'])->id;
                            header("Location: /home_page_user");
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
            if(!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                include("model/customer_db.php");
                $data = array("userObj" => getCustomerById($_SESSION['id']));
                $this->render("view/html/UI_user/UI_home_page_user", $data);
            }
            else {
                header('Location: /error');
                exit;
            }
        }

        function logout() {
            //logout, destroy session and go to home page for guest
            session_start();
            session_destroy();
            header("Location: /home_page");
        }

        //display profile user tab
        function profile_user_tab() {
            include_once('model\customer_db.php');
            if (!isset($_SESSION)) session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
                $data = array("userObj" => getCustomerById($_SESSION['id']));
                $this->render('view\html\UI_user\component\profile_user_tab', $data);
            }
            else header("Location: /error");
        }

         //display profile user
        function profile_user(){
            include('model\customer_db.php');
            if (!isset($_SESSION)) session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
                $data = array("userObj" => getCustomerById($_SESSION['id']));
                $this->render('view/html/UI_user/UI_profile_user', $data);
            }
            else header("Location: /error");
        }

        function dish_list() {
            include("model\product_db.php");
            if (!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                $data = array ('productList' => getProductList($_GET['type']),
                           'type' => $_GET['type']);
                $this->render('view\html\UI_user\dish_list', $data);
            }
            else header('/dish_list');
        }

        function dish_detail() {
            include("model\product_db.php");
            include('model\customer_db.php');
            if (!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                $getProductObj = getProductById($_GET['id']);
                if ($getProductObj == 'invalid id') echo header("Location: /error");
                else {
                    $data = array('productObj' => $getProductObj,
                                'relatedProduct' => get3RandomProduct(json_decode($getProductObj)->type, $_GET['id']),
                                'userObj' => getCustomerById($_SESSION['id']),
                                'userReview' => getReview($_SESSION['id'], $_GET['id']),
                                'star' => getStar($_GET['id']));
                    $this->render('view\html\UI_user\dish_detail', $data);
                }
            }
            else header('/dish_detail');
        }

        function menu() {
            include("model\product_db.php");
            include("model\customer_db.php");
            if (!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                $data = array('menuList' => getMenuList(),
                              'userObj' => getCustomerById($_SESSION['id']));
                $this->render('view\html\UI_user\menu_user', $data);
            }
            else header('/user/menu');
        }

        function change_info() {
            include('model\customer_db.php');
            if (!isset($_SESSION)) session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
                $changeErr = (checkChangeInfo());
                changeInfor($changeErr);
                $_SESSION['changeErr'] = $changeErr;
                $data = array("userObj" => getCustomerById($_SESSION['id']),
                              'changeErr' => $changeErr);
                $this->render('view/html/UI_user/UI_profile_user', $data);
            }
            else header("Location: /error");
        }

        function cart_dropdown() {
            $this->render('view\html\UI_user\component\cart_dropdown');
        }

        function addToCart() {
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                if (isset($_GET['productID'])) {
                    if (!isset($_COOKIE['cartArr'])) {
                        //if cookie dont have variable cartArr yet
                        //create a array
                        //and save product id & product quantity
                        //change that array to json and save to cookie
                        $cart = array();
                        if (!isset($_GET['productQuantity'])) $cart[(int)$_GET['productID']] = 1;
                        else $cart[(int)$_GET['productID']] = (int)$_GET['productQuantity'];
                        setcookie('cartArr', json_encode($cart), time() + (86400*7));

                    }
                    else {

                        //if exist cookie,
                        //add new element to array
                        //if product id already exist
                        //add product quantity
                        
                        $cart = json_decode($_COOKIE['cartArr'], true);
                        if (isset($_GET['productQuantity'])) $cart[$_GET['productID']] = (int)$_GET['productQuantity'];
                        else $cart[$_GET['productID']] = (int)$cart[$_GET['productID']] + 1;
                        setcookie('cartArr', json_encode($cart), time() + (86400*7));
                    }
                }
                header("Location: index.php?controller=user&action=cart_dropdown");
            }
            else header('Location: /error');
        }

        function view_cart() {
            include_once('model\customer_db.php');
            if (!isset($_SESSION)) session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
                $data = array("userObj" => getCustomerById($_SESSION['id']),
                              'active' => 'cart');
                $this->render('view\html\UI_user\UI_profile_user', $data);
            }
            else header("Location: /error");
        }

        function cart_tab() {
            $this->render('view\html\UI_user\component\cart_tab');
        }

        function rate() {
            include('model\product_db.php');
            $product = json_decode(getProductById($_GET['id']));
            if (getReview($_SESSION['id'], $_GET['id']) == 'notReviewed') addRating((int)$_GET['id'], (int)$_SESSION['id'], (int)$_POST['star'], $_POST['comment']);
            else  updateRating((int)$_GET['id'], (int)$_SESSION['id'], (int)$_POST['star'], $_POST['comment']);
            header("Location: dish-detail/".UrlNormal($product->name)."/".$product->id);
        }


        function comment() {
            include('model\product_db.php');
            $commentList = getFeedback($_GET['id'], $_GET['page']);
            $data = array('commentList' => $commentList);
            $this->render('view\html\UI_user\component\comment', $data);
        }

        function news() {
            $this->render('view\html\UI_guest\news');
        }
    }
?>