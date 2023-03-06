<?php
    function checkUserName($username) {
        
        require("../model/db.php");
        //check user has entered userName
        if ($username=='') return "missing";//return missing error
        else {
            //delete slash and escape
            $username = stripslashes($username);
            $username = mysqli_real_escape_string($con,$username);
            //check length
            if (strlen($username) < 8 || strlen($username) > 16) return "length";
            //check if user name has been used 
            // $query = "SELECT * FROM customers WHERE username == $username";
            // $result = mysqli_query($con, $query);
            // if (mysqli_num_rows($result) == true) return "hasUsed";
            return "good"; 
        }
    }

    function checkEmail($email) {
        require("../model/db.php");
        //check user has entered email
        if ($email=='') return "missing";//return missing error
        else {
            //delete slash and escape
            $email = stripslashes($email);
            $email = mysqli_real_escape_string($con,$email);
            //check invalid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return "invalid";
            //check if user name has been used 
            $query = "SELECT * FROM customers WHERE email == $email";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == true) return "hasUsed";
            return "good"; 
        }
    }

    function checkPassword($password) {
        require("../model/db.php");
        //check user has entered password
        if ($password=='') return "missing";//return missing error
        else {
            //check length
            if (strlen($password) < 8 || strlen($password) >16) return "length";

            return "good"; 
        }
    }

    function checkPhone($phone) {
        if ($phone == "") return "missing";
        if(!preg_match('/^[0-9]{10}+$/', $phone) || strlen($phone) < 8) return "invalid";
        return "good";
    } 
?>

