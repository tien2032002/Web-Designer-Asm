<?php
    include_once('base_controller.php');
    class managerController extends baseController {

        //home page for guest (not login yet)
        function home_page_manager() {
            $this->render('view/html/UI_manager/manager');
        }
        
        //login form
        function login() {

            //if user has filled login form
            if (isset($_POST['phone']) && isset($_POST['password'])) {
                
                include_once('model/employee_db.php');
                
                //check login infomation
                $checkLoginManager = checkLogin($_POST['phone'], $_POST['password']);

                //if login infomation not correct, redirect to login page with error code
                if ($checkLoginManager!='good') {
                    $data = array('loginErr' => $checkLoginManager);
                    $this->render('view/html/UI_user/login', $data);
                }
                //login infomation correct => go to home page for user
                else {
                    if ($_SESSION['is_admin']) header('Location: index.php?controller=manager&action=home_page_manager');
                    else header('Location: index.php?controller=employee&action=home_page_employee');
                }
            }
            else {
                $data = array('loginErr' => 'first');
                $this->render('view/html/UI_manager/login_manager', $data);
            }
        }

        function manage_employee() {
            include_once('model/employee_db.php');
            $employeeList = getEmployeeList();
            $data = array ("employeeList" => $employeeList);
            
            $this->render('view/html/UI_manager/manage_employee', $data);
        }

        function delete_employee() {
            include_once('model/employee_db.php');
            deleteEmployee($_GET['employeeID']);
            header("Location: index.php?controller=manager&action=manage_employee");
        }

        function logout() {
            session_destroy();
            header("Location: index.php?controller=user&action=home_page");
        }
    }
?>