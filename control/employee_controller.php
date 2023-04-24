<?php
    include_once('base_controller.php');
    class employeeController extends baseController {

        //display home page UI for employee
        function home_page_employee() {
            $this->render("view/html/UI_employee/UI_employee");
        }
        function logout() {
            session_start();
            session_destroy();
            header('Location: index.php');
        }

        function confirm_table_tab(){
            include("model/table_db.php");
            $data = array("unconfirmTableList" => get_unconfirm_table_list(),
                          'inUsetableList' => get_inuse_table_number());
            $this->render('view\html\UI_employee\component\confirm_table_tab', $data);
        }

        function confirm_table() {
            include("model/table_db.php");
            confirm($_GET['id'], $_POST['table']);
            header("Location: /home_page_employee");
        }

        function confirm_order_tab() {
            include("model/table_db.php");
            $inuseTableList = get_inuse_table_list();
            foreach($inuseTableList as $table) {
                $table->bill = get_bill($table->id);
            }
            $data = array('inuseTableList' => $inuseTableList,
                          'inuseTableNumber' => get_inuse_table_number());
            $this->render('view\html\UI_employee\component\confirm_order_tab', $data);
        }

        function add_table() {
            include("model/table_db.php");
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            if($_POST['date'] == '') $_POST['date'] = date("Y-m-d");
            if ($_POST['quantity'] == '') $_POST['quantity'] = 4;
            if ($_POST['time'] == '') $_POST['time'] = date("h:i:s");
            add_table_employee($_POST['date'], $_POST['quantity'], $_POST['time'], $_POST['table']);
            header("Location: home_page_employee");
        }

        function payment() {
            include_once("model\order_db.php");
            include_once("model/table_db.php");
            pay($_GET['tableId']);
            pay_bill($_GET['tableId']);
            header("Location: home_page_employee");
        }

        function cancel_bill(){
            include('model\order_db.php');
            cancel_bill_db($_GET['billId']);
            header("Location: confirm_order_tab");
        }
    }
?>