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
        require('model/db.php');
        if ($phone == '' && $password == '') return 'missingBoth';
        if ($phone == '') return 'missingPhone';
        if ($password == '') return 'missingPassword';
        //search for email in database
        $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        if (mysqli_num_rows($resultPhone) == 0) return "phoneErr";
        $phoneObj = mysqli_fetch_object($resultPhone);
        if ($phoneObj->password != $password) return "passwordErr";
        if(!isset($_SESSION)) session_start();
        $_SESSION['role'] = 'user';
        $_SESSION['id'] = $phoneObj->id;
        return "good";
    }

    function getCustomerByPhone($phone) {
        require('model/db.php');
        $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        return json_encode(mysqli_fetch_object($resultPhone));
        
    }

    function getCustomerAvatar($id){
        $customer = getCustomerById($id);
        return array('name' => $customer->name,
                     'avatar' => $customer->image);
    }

    function getCustomerById($id) {
        require('model/db.php');
        $searchId = "SELECT * FROM customers WHERE id = '$id'";
        $resultId = mysqli_query($con, $searchId);
        if (mysqli_num_rows($resultId) == 0) return 'invalid id';
        return json_encode(mysqli_fetch_object($resultId));
    }

    function getName($phone) {
        require('model/db.php');
        $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        if (mysqli_num_rows($resultPhone) == 0) return "Undefinded";
        $phoneObj = mysqli_fetch_object($resultPhone);
        return $phoneObj->name;
    }

    function checkSignUp($firstName, $lastName,$phone, $email, $password, $password2) {
        //check first name
        if (strlen($firstName) < 2 || strlen($firstName) > 30) $firstNameErr = 'length';
        else $firstNameErr = 'good';

        //check last name
        if (strlen($lastName) < 2 || strlen($lastName) > 30) $lastNameErr = 'length';
        else $lastNameErr = 'good'; 

        //check phone

        include('model/db.php');

        if (strlen($phone) == 0) $phoneErr='missing';
        else {
            $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
            $resultPhone = mysqli_query($con, $searchPhone);
            if (mysqli_num_rows($resultPhone) != 0) $phoneErr = 'hasUsed';
            else $phoneErr = 'good';
        }

        //check email
        if (strlen($email) == 0) $emailErr='missing';
        else {
            $searchEmail = "SELECT * FROM customers WHERE email = '$email'";
            $resultEmail = mysqli_query($con, $searchEmail);
            if (mysqli_num_rows($resultEmail) != 0) $emailErr = 'hasUsed';
            else $emailErr = 'good';
        }

        //check password
        if (strlen($password) < 8 || strlen($password) > 16) $passwordErr = 'length';
        else $passwordErr = 'good';

        //check password 2
        if ($password != $password2) $password2Err = 'matching';
        else $password2Err = 'good';

        $errArr = array('firstNameErr' => $firstNameErr,
                        'lastNameErr' => $lastNameErr,
                        'phoneErr' => $phoneErr,
                        'emailErr' => $emailErr,
                        'passwordErr' => $passwordErr,
                        'password2Err' => $password2Err);
        return $errArr;
    }

    function addCustomer($firstName, $lastName,$phone, $email, $password) {
        //add customer to database
        require("model/db.php");
        $fullName = $firstName . ' ' . $lastName;
        $addInfo = "INSERT INTO customers (name, password, email, phone)
                    Value ('$fullName', '$password', '$email', '$phone')";
        $result = mysqli_query($con, $addInfo);
    }

    function updateInfo($address, $gender, $birthday) {
        //update customer's information
        require_once("../model/db.php");
    }

    function get_all_customer_id(){
        require('model/db.php');
        $customerId = mysqli_query($con, "SELECT id from customers");
        $resultArray = array();
        while($row = $customerId->fetch_object()){
            $resultArray[] = $row->id;
        }
        return $resultArray;
    }

    function changeInfor($checkErr){
        include('model\db.php');
        $curID = $_GET['id'];
        extract($checkErr);
        if ($uploadErr == 'good') {
            $target_dir    = "view/images/user/";
            $target_file   = $target_dir . 'user' . $_GET['id'] . '.jpg';
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
        }

        if ($nameErr == 'good'){
            $name = $_POST['name'];
            mysqli_query($con, "UPDATE customers
                        SET name='$name'
                        WHERE id=$curID");
        }

        if ($addressErr == 'good'){
            $address = $_POST['address'];
            mysqli_query($con, "UPDATE customers
                        SET address='$address'
                        WHERE id=$curID");
        }

        if ($phoneErr == 'good'){
            $phone = $_POST['phone'];
            mysqli_query($con, "UPDATE customers
                        SET phone='$phone'
                        WHERE id=$curID");
        }

        if ($emailErr == 'good'){
            $email = $_POST['email'];
            mysqli_query($con, "UPDATE customers
                        SET email='$email'
                        WHERE id=$curID");
        }

        if ($passwordErr == 'good'){
            $password = $_POST['newPassword'];
            mysqli_query($con, "UPDATE customers
                        SET password='$password'
                        WHERE id=$curID");
        }

        $gender = $_POST['gender'];
        mysqli_query($con, "UPDATE customers
                            SET gender='$gender'
                            WHERE id=$curID");

    }

    function checkChangeInfo() {
        $userObj = json_decode(getCustomerById($_SESSION['id']));
        $uploadErr = 'not update';
        if ($_FILES["avatar"]['name'] != ''){
            var_dump($_FILES["avatar"]);
            //change avatar
            //check if file upload is image or not
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if($check == false) {
                $uploadErr = 'notImage';
            }

            else {
                $uploadErr = 'good';
            }
        }

        //check name
        if ($userObj->name == $_POST['name']) $nameErr = 'not change';
        else if (strlen($_POST['name']) < 2 || strlen($_POST['name']) > 30) $nameErr = 'length';
        else $nameErr = 'good';

        if ($userObj->address == $_POST['address']) $addressErr = 'not change';
        else if (strlen($_POST['address']) < 2 || strlen($_POST['address']) > 30) $addressErr = 'length';
        else $addressErr = 'good';

        include('model/db.php');

        if ($userObj->phone == $_POST['phone']) $phoneErr = 'not change';
        else if (strlen($_POST['phone']) < 8 || strlen($_POST['phone']) > 16) $phoneErr='length';
        else {
            $phone = $_POST['phone'];
            $searchPhone = "SELECT * FROM customers WHERE phone = '$phone'";
            $resultPhone = mysqli_query($con, $searchPhone);
            if (mysqli_num_rows($resultPhone) != 0) $phoneErr = 'hasUsed';
            else $phoneErr = 'good';
        }

        //check email
        if ($userObj->email == $_POST['email']) $emailErr = 'not change';
        else if (strlen($_POST['email']) == 0) $emailErr='missing';
        else {
            $email = $_POST['email'];
            $searchEmail = "SELECT * FROM customers WHERE email = '$email'";
            $resultEmail = mysqli_query($con, $searchEmail);
            if (mysqli_num_rows($resultEmail) != 0) $emailErr = 'hasUsed';
            else $emailErr = 'good';
        }
        $passwordErr = 'not update';
        if(strlen($_POST['oldPassword']) != 0) {
            $userObj = json_decode($_SESSION['userObj']);
            if ($userObj->password != $_POST['oldPassword']) $passwordErr = 'wrong old password';
            else {
                if ($_POST['newPassword'] != $_POST['newPassword2']) $passwordErr = 'wrong confirm password';
                else $passwordErr = 'good';
            }
        }
        $resultErr = array('uploadErr' => $uploadErr,
                           'nameErr' => $nameErr,
                           'addressErr' => $addressErr,
                           'phoneErr' => $phoneErr,
                           'emailErr' => $emailErr,
                           'passwordErr' => $passwordErr);     
        return $resultErr;          
    }
    
?>