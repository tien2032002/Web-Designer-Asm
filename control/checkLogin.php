<?php
//this function will return login's error code
//error code:
//missingUserName
//missingPassword
//missingBoth
//userNameErr: cannot found any userName match
//passwordErr: wrong password of that userName
//good: found userName and password in database

    function checkLogin($phone, $password) {
        require_once('../../../model/db.php');
        if ($phone == '' && $password == '') return 'missingBoth';
        if ($phone == '') return 'missingPhone';
        if ($password == '') return 'missingPassword';
        //search for email in database
        $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        if (mysqli_num_rows($resultPhone) == 0) return "phoneErr";
        $phoneObj = mysqli_fetch_object($resultPhone);
        if ($phoneObj->password != $password) return "passwordErr";
        return "good";
        // if (!isset($_POST["username"]) || !isset($_POST["password"])) echo "enter username & password";
        // else  {
        //     require("../control/control.php");
        //     $result = login($_POST["username"], $_POST["password"]);
        //     if ($result == 1) header ("Location: ../view/trangchu.html");
        //     else echo "fail to login";
        //     // $username = $_POST["username"];
        //     // $password = $_POST["password"];
        //     // $username = stripslashes($username);
        //     // $username = mysqli_real_escape_string($con,$username);
        //     // $password = stripslashes($password);
        //     // $password = mysqli_real_escape_string($con,$password);
    
        //     // $query = "SELECT * FROM customers WHERE username == $username AND password == $password";
        //     // $result = mysqli_query($con, $query);
        //     // if (mysqli_num_rows($result) == true) header ("Location: ../view/trangchu.html");
        //     // else echo "fail to login";
        // }
    }
    
?>