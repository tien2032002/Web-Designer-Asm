<?php
    include_once('base_controller.php');
    class managerController extends baseController {

        //home page for manager
        function home_page_manager() {
            //check session
            //if exist session, go to home page UI for manager
            //if not, display error and exit
            if (!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'manager') {
                $this->render('view\html\UI_manager\UI_manager');
            }
            else
                header("Location: /error");
        }

        
        //login form
        function login() {

            //if user has filled login form
            if (isset($_POST['phone']) && isset($_POST['password'])) {
                
                include_once('model/employee_db.php');
                
                //check login infomation
                $checkLoginManager = checkLogin($_POST['phone'], $_POST['password']);

                if ($checkLoginManager == 'good') {
                    if ($_SESSION['role'] == 'employee') header("Location: /home_page_employee");
                    else if ($_SESSION['role'] == 'manager') header("Location: /home_page_manager");
                }
                //if login information is not correct => go to login employee page
                else {
                    $data = array('loginErr' => $checkLoginManager);
                    $this->render('view\html\UI_guest\UI_login_QTV', $data);
                }
            }
            else {
                $data = array('loginErr' => 'first');
                $this->render('view/html/UI_guest/UI_login_QTV', $data);
            }
        }

        //get employee data and render manage employee UI
        function manage_employee() {
            include_once('model/employee_db.php');
            $employeeList = getEmployeeList();
            $data = array ("employeeList" => $employeeList);
            $this->render('view/html/UI_manager/manage_employee', $data);
        }

        function add_employee() {
            include_once("model/employee_db.php");
            if(!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role']=='manager'){
                $result = checkAddEmployee($_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                extract($result);
                $employeeList = getEmployeeList();
                $data = array("errResultAdd" => $errResultAdd,
                              "employeeList" => $employeeList);
                if ($checkAll == 1) {
                    echo "good";
                    addEmployee($_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                    header("Location: /manage_employee");
                }
                else $this->render('view\html\UI_manager\manage_employee', $data);
            }
            else header("Location: /error");
        }

        //update employee information
        function update_employee() {
            include_once("model/employee_db.php");
            if (!isset($_SESSION)) session_start();
            if (isset($_SESSION['role']) && $_SESSION['role']=='manager'){
                $result = checkUpdateEmployee($_GET['ID'], $_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                extract($result);
                $employeeList = getEmployeeList();
                $data = array("errResultUpd" => $errResultUpd,
                              "employeeList" => $employeeList,
                              "curID" => $_GET['ID']);
                if ($checkAll == 1) {
                    echo "good";
                    updateEmployee($_GET['ID'], $_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                    header("Location: /manage_employee");
                }
                else $this->render('view\html\UI_manager\manage_employee', $data);
            }
            else header('Location: /error');
        }

        //delete employee
        function delete_employee() {
            include_once('model/employee_db.php');
            deleteEmployee($_GET['employeeID']);
            header("Location: /manage_employee");
        }

        //logout
        function logout() {
            session_start();
            session_destroy();
            header("Location: /home_page");
        }
    }
?>