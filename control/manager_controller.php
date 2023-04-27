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
            $this->render('view\html\UI_manager\component\employee_tab', $data);
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
                $_SESSION['errResultAdd'] = $errResultAdd;
                if ($checkAll == 1) {
                    echo "good";
                    addEmployee($_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                    header("Location: /manage_employee");
                }
                else header("Location: home_page_manager");
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
                $_SESSION['errResultUpd'] = $errResultUpd;
                $_SESSION['curID'] = $_GET['ID'];
                if ($checkAll == 1) {
                    echo "good";
                    updateEmployee($_GET['ID'], $_POST['ID'], $_POST['name'], $_POST['CMND'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['address'], $_POST['gender']);
                    header("Location: /manage_employee");
                }
                else header("Location: home_page_manager");
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

        function add_news() {
            $this->render('view\html\UI_manager\component\respone_tab');
        }

        function save_news() {
            include("model/news_db.php");
            // var_dump([$_POST]);
            // var_dump($_FILES);
            //check news and return error
            $saveNewsErr = check_save_news();
            $_SESSION['saveNewsErr'] = $saveNewsErr;
            extract($saveNewsErr);
            if ($uploadErr == 'good' && $titleErr != 'invalid' && $tagErr != 'invalid' && $contentErr != 'invalid'){
                save_news_db();
            }
            header("Location: home_page_manager");

        }

        function manage_product() {
            include('model\product_db.php');
            $productList = get_all_product_object($_GET['page']);
            $data = array('productList' => $productList);
            $this->render('view\html\UI_manager\component\product_tab', $data);
        }

        function product_page() {
            include('model\product_db.php');
            $productList = get_all_product_object($_GET['page']);
            $data = array('productList' => $productList);
            $this->render('view\html\UI_manager\component\product_list', $data);
        }

        function update_product(){
            include('model\product_db.php');
            $errList = checkUpdProduct($_POST['name'], $_POST['type'], $_POST['description'], $_POST['price']);
            updateProduct($_GET['curID'], $_POST['name'], $_POST['type'], $_POST['description'], $_POST['price'], $errList);
            $_SESSION['updProductErr'] = $errList;
            $_SESSION['curID'] = $_GET['curID'];
            header("Location: home_page_manager");
        }

        function add_product() {
            include('model\product_db.php');
            $errList = checkAddProduct($_POST['name'], $_POST['type'], $_POST['description'], $_POST['price']);
            if ($errList['checkAll'] == 1) {
                addProduct($_POST['name'], $_POST['type'], $_POST['description'], $_POST['price']);
                header("Location: home_page_manager");
            }
            else {
                $_SESSION['addProductErr'] = $errList;
                header("Location: home_page_manager");
            }
        }

        function delete_product() {
            include('model\product_db.php');
            deleteProduct($_GET['id']);
            header("Location: home_page_manager");
        }

        function feedback_list(){
            include('model\product_db.php');
            include('model\customer_db.php');
            $feedbackList = get_all_feedback($_GET['page']);
            foreach($feedbackList as $feedback) {
                $customerObj = json_decode(getCustomerById($feedback->customer_id));
                $productObj = json_decode(getProductById($feedback->product_id));
                $feedback->avatar = $customerObj->image;
                $feedback->customer_name = $customerObj->name;
                $feedback->product_name = $productObj->name;
            }
            $data = array("feedbackList" => $feedbackList);
            $this->render("view/html/UI_manager/component/feedback_list", $data);
        }

        function feedback_tab() {
            include('model\product_db.php');
            $this->render("view/html/UI_manager/component/feedback_tab");
        }

        function del_feedback() {
            include('model\product_db.php');
            echo $_GET['id'];
            delete_feedback($_GET['id']);
        }

        function statistical_tab() {
            include('model\product_db.php');
            include('model\table_db.php');
            include('model\order_db.php');
            $allPaidTable = get_all_paid_table();
            foreach ($allPaidTable as $table) {
                $table->bills = get_paid_bill($table->id);
                foreach($table->bills as $bill) {
                    $bill->productObj = json_decode(getProductById($bill->product_id));
                }
            }
            $data = array("numberOfProducts" => count_product(),
                          "numberOfBill" => count_table_paid(),
                          "numberOfFeedback" => count_feedback(),
                          "revenue" => revenue(),
                          "allPaidTable" => $allPaidTable);
            
            $this->render('view\html\UI_manager\component\thong_ke_tab', $data);
        }
    }
?>