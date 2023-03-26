<?php
    //this function will return login's error code aaaa
    //error code:
    //missingUserName
    //missingPassword
    //missingBoth
    //userNameErr: cannot found any userName match
    //passwordErr: wrong password of that userName
    //good: found userName and password in database
    function checkLogin($phone, $password) {
        require('model/db.php');
        if ($phone == '' && $password == '') return 'missingBoth';
        if ($phone == '') return 'missingPhone';
        if ($password == '') return 'missingPassword';
        //search for email in database
        $searchPhone = "SELECT * FROM employees WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        if (mysqli_num_rows($resultPhone) == 0) return "phoneErr";
        $phoneObj = mysqli_fetch_object($resultPhone);
        if ($phoneObj->password != $password) return "passwordErr";
        session_start();
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['name'] = $phoneObj->name;
        $_SESSION['is_admin'] = $phoneObj->is_admin;
        return "good";
    }


    function addEmployee() {
        //add employee to database
        require('db.php');
    }

    function deleteEmployee($employeeID) {
        //delete employee from database
        require('db.php');
        $deleteEmp = "DELETE FROM employees WHERE id=$employeeID";
        mysqli_query($con, $deleteEmp);
    }

    function updateEmployee() {
        //update employee's information to database
        require_once('db.php');
    }

    function getEmployeeList() {
        require('model/db.php');
        $getList = "SELECT * FROM employees WHERE is_admin=0";
        $resultList = mysqli_query($con, $getList);
        $arrayList = array();
        while ($row = $resultList->fetch_object()) {
            $arrayList[]=json_encode($row);
        }
        return json_encode($arrayList);
    }
?>