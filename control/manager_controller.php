<?php
    include_once('base_controller.php');
    class managerController extends baseController {

        //home page for manager
        function home_page_manager() {
            //check session
            //if exist session, go to home page UI for manager
            //if not, display error and exit
            session_start();
            if (!isset($_SESSION['phone'])) {
                echo "error";
                exit;
            }
            else
            $this->render('view/html/UI_manager/manager');
        }
        
        //login form
        function login() {

            //if user has filled login form
            if (isset($_POST['phone']) && isset($_POST['password'])) {
                
                include_once('model/employee_db.php');
                
                //check login infomation
                $checkLoginManager = checkLogin($_POST['phone'], $_POST['password']);

                //if login infomation is admin => go to admin home page
                if ($checkLoginManager=='admin') {
                    session_start();
                    $_SESSION['phone'] = $_POST['phone'];
                    header('Location: index.php?controller=manager&action=home_page_manager');
                }
                //if login infomation is employee => go to home page for employee
                else if ($checkLoginManager=='employee'){
                    session_start();
                    $_SESSION['phone'] = $_POST['phone'];
                    header('Location: index.php?controller=employee&action=home_page_employee');
                }
                //if login information is not correct => go to login employee page
                else {
                    $data = array('loginErr' => $checkLoginManager);
                    $this->render('view/html/UI_guest/login', $data);
                }
            }
            else {
                $data = array('loginErr' => 'first');
                $this->render('view/html/UI_guest/login_manager', $data);
            }
        }

        //get employee data and render manage employee UI
        function manage_employee() {
            include_once('model/employee_db.php');
            $employeeList = getEmployeeList();
            $data = array ("employeeList" => $employeeList);
            
            $this->render('view/html/UI_manager/manage_employee', $data);
        }

        //delete employee
        function delete_employee() {
            include_once('model/employee_db.php');
            deleteEmployee($_GET['employeeID']);
            header("Location: index.php?controller=manager&action=manage_employee");
        }

        //logout
        function logout() {
            session_start();
            session_destroy();
            header("Location: index.php?controller=guest&action=home_page");
        }
    }
?>