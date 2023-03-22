<?php
    function addCustomer($email, $password, $name, $phone) {
        //add customer to database
        require_once("../model/db.php");
        $addInfo = "INSERT INTO customers (name, password, email, phone)
                    Value ('$userName', '$password', '$email', '$phone')";
        $result = mysqli_query($con, $addInfo);
    }

    function updateInfo($address, $gender, $birthday) {
        //update customer's information
        require_once("../model/db.php");
    }

    function changeInfor(){
        //change customer's information
        require_once("../model/db.php");
    }
?>