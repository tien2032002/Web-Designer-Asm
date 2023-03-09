<?php
//this function will return login's error code
//error code:
//missingUserName
//missingPassword
//missingBoth
//userNameErr: cannot found any userName match
//passwordErr: wrong password of that userName
//good: found userName and password in database
    function checkLogin($userName, $password) {
        require("../model/db.php");
        if ($userName == '' && $password == '') return 'missingBoth';
        if ($userName == '') return 'missingUserName';
        if ($password == '') return 'missingPassword';
        //search for username in database
        $searchUserName = "SELECT * FROM customers WHERE name = '$userName'";
        $resultUserName = mysqli_query($con, $searchUserName);
        if (mysqli_num_rows($resultUserName) == 0) return "userNameErr";
        $userNameObj = mysqli_fetch_object($resultUserName);
        if ($userNameObj->password != $password) return "passwordErr";
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