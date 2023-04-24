<?php
    function checkReserve($name, $phone, $email, $date, $time, $quantity) {
        include('model\db.php');
        if (strlen($name) < 2) $nameErr = 'invalid';
        else $nameErr = 'good';

        if (strlen($phone) < 8) $phoneErr = 'invalid';
        else $phoneErr = 'good';

        if (strlen($email) < 8) $emailErr = 'invalid';
        else $emailErr = 'good';

        $errList = array('nameErr' => $nameErr,
                         'phoneErr' => $phoneErr,
                         'emailErr' => $emailErr);

        return $errList;
    }

    function reserve_table($name, $phone, $email, $date, $time, $quantity) {
        include('model\db.php');
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
            $id = $_SESSION['id'];
            $addTable = "INSERT INTO tables (customer_name, customer_phone, customer_email, reservation_date, time, number_of_guests, status, customer_id)
                     VALUE ('$name', $phone, '$email', '$date', '$time', $quantity, 'not confirm', $id)";
        } 
        else
            $addTable = "INSERT INTO tables (customer_name, customer_phone, customer_email, reservation_date, time, number_of_guests, status)
                         VALUE ('$name', $phone, '$email', '$date', '$time', $quantity, 'not confirm')";
        mysqli_query($con, $addTable);
    }

    function get_unconfirm_table_list() {
        include('model\db.php');
        $unconfirmTable = mysqli_query($con, "SELECT * FROM tables WHERE status='not confirm'");
        $tableArray = array();
        while ($tableObj = $unconfirmTable->fetch_object()){
            $tableArray[] = $tableObj;
        }
        return $tableArray;
    }

    function get_inuse_table_number() {
        include('model\db.php');
        $inuseTable = mysqli_query($con, "SELECT * FROM tables WHERE status='in use'");
        $tableArray = array();
        while ($tableObj = $inuseTable->fetch_object()){
            $tableArray[] = (int)$tableObj->table_number;
        }
        return $tableArray;
    }

    function get_bill($tableId) {
        include('model\db.php');
        include_once('model\product_db.php');
        $bill = mysqli_query($con, "SELECT * FROM bills WHERE table_id=$tableId AND status='request'");
        $billArray = array();
        while($product = $bill->fetch_object()) {
            $product->productObj = json_decode(getProductById($product->product_id));
            $billArray[] = $product;
        }
        return $billArray;
    }

    function get_inuse_table_list() {
        include('model\db.php');
        $inuseTable = mysqli_query($con, "SELECT * FROM tables WHERE status='in use'");
        $tableArray = array();
        while ($tableObj = $inuseTable->fetch_object()){
            $tableArray[] = $tableObj;
        }
        return $tableArray;
    }

    function confirm($id, $table) {
        include('model\db.php');
        mysqli_query($con, "UPDATE tables
                            SET status='in use',
                                table_number=$table
                            WHERE id=$id");
    }

    function add_table_employee($date, $quantity, $time, $table) {
        include('model\db.php');
        mysqli_query($con, "INSERT INTO tables (table_number, reservation_date, time, number_of_guests, status)
                            VALUE ($table, '$date', '$time', $quantity, 'in use')");
    }

    function get_table_id($customer_id){
        include('model\db.php');
        $customer_table = mysqli_query($con, "SELECT * FROM tables WHERE customer_id=$customer_id AND status='in use'");
        if (mysqli_num_rows($customer_table) == 0) return 'invalid';
        else return $customer_table->fetch_object()->id;
    }

    function check_confirm_table($customer_id){
        include('model\db.php');
        $customer_table = mysqli_query($con, "SELECT * FROM tables WHERE customer_id=$customer_id AND status='in use'");
        if (mysqli_num_rows($customer_table) == 0) return FALSE;
        return TRUE;
    }

    function pay($tableId) {
        include('model\db.php');
        mysqli_query($con, "UPDATE tables 
                            SET status='paid'
                            WHERE id=$tableId");
    }
?>