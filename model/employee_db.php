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
        $searchPhone = "SELECT * FROM employees WHERE phone = '$phone'";
        $resultPhone = mysqli_query($con, $searchPhone);
        if (mysqli_num_rows($resultPhone) == 0) return "phoneErr";
        $phoneObj = mysqli_fetch_object($resultPhone);
        if ($phoneObj->password != $password) return "passwordErr";
        //login success
        if (!isset($_SESSION)) session_start();
        if ($phoneObj->is_admin == 0) $_SESSION['role'] = 'employee';
        else $_SESSION['role'] = 'manager';
        $_SESSION['id'] = $phoneObj->id;
        return 'good';
    }
    
    function getEmpByID($id) {
        require('model/db.php');
        $searchEmp = "SELECT * FROM employees WHERE id='$id'";
        $resultEmp = mysqli_query($con, $searchEmp);
        if (mysqli_num_rows($resultEmp) == 0) return "invalid id";
        else return json_encode($resultEmp->fetch_object());
    }

    function getEmpByPhone($phone) {
        require('model/db.php');
        $searchEmp = "SELECT * FROM employees WHERE phone='$phone'";
        $resultEmp = mysqli_query($con, $searchEmp);
        if (mysqli_num_rows($resultEmp) == 0) return "invalid phone";
        else return json_encode($resultEmp->fetch_object());
    }

    function getEmpByEmail($email) {
        require('model/db.php');
        $searchEmp = "SELECT * FROM employees WHERE email='$email'";
        $resultEmp = mysqli_query($con, $searchEmp);
        if (mysqli_num_rows($resultEmp) == 0) return "invalid email";
        else return json_encode($resultEmp->fetch_object());
    }

    function addEmployee($id, $name, $cmnd, $email, $phone, $password, $address, $gender) {
        //add employee to database
        require('db.php');
        echo $phone;
        $addEmp = "INSERT INTO employees (id, name, cmnd, email, phone, password, address, gender)
                   VALUE ('$id', '$name', '$cmnd', '$email', '$phone', '$password', '$address', '$gender')";
        mysqli_query($con, $addEmp);
    }

    function deleteEmployee($employeeID) {
        //delete employee from database
        require('db.php');
        $deleteEmp = "DELETE FROM employees WHERE id=$employeeID";
        mysqli_query($con, $deleteEmp);
    }

    function updateEmployee($curID, $id, $name, $cmnd, $email, $phone, $password, $address, $gender) {
        require('db.php');
        //update employee's information to database
        if (getEmpByID($curID) == 'invalid id') return "fail";
        $curEmp = json_decode(getEmpByID($curID));
        if ($curEmp->id != $id) mysqli_query($con, "UPDATE employees
                                                    SET id='$id'
                                                    WHERE id=$curID");
        if ($curEmp->name != $name) mysqli_query($con, "UPDATE employees
                                                    SET name='$name'
                                                    WHERE id=$curID");
        if ($curEmp->cmnd != $cmnd) mysqli_query($con, "UPDATE employees
                                                    SET cmnd='$cmnd'
                                                    WHERE id=$curID");
        if ($curEmp->email != $email) mysqli_query($con, "UPDATE employees
                                                    SET email='$email'
                                                    WHERE id=$curID");
        if ($curEmp->phone != $phone) mysqli_query($con, "UPDATE employees
                                                    SET phone='$phone'
                                                    WHERE id=$curID");
        if ($curEmp->password != $password) mysqli_query($con, "UPDATE employees
                                                    SET password='$password'
                                                    WHERE id=$curID"); 
        if ($curEmp->address != $address) mysqli_query($con, "UPDATE employees
                                                    SET address='$address'
                                                    WHERE id=$curID"); 
        if ($curEmp->gender != $gender) mysqli_query($con, "UPDATE employees
                                                    SET gender='$gender'
                                                    WHERE id=$curID");                                            
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

    function checkAddEmployee($id, $name, $cmnd, $email, $phone, $password, $address, $gender) {
        //this function will check information of add employee form is valid or not
        require('model/db.php');
        //check id

        if (getEmpByID($id) != "invalid id") $idErr = "duplicate";
        else if (strlen($id) == 0) $idErr = "missing";
        else $idErr = "good";

        //check name
        if (strlen($name) < 8) $nameErr = "invalid";
        else $nameErr = "good";

        //check cmnd
        if (strlen($cmnd) == 0) $cmndErr = "invalid";
        else $cmndErr = "good";

        //check phone
        if (getEmpByPhone($phone) != "invalid phone") $phoneErr = "duplicate";
        else if (strlen($phone) < 8) $phoneErr = 'invalid';
        else $phoneErr = "good";

        //check password
        if (strlen($password) < 8) $passwordErr = 'invalid';
        else $passwordErr = "good";
        
        //check email
        if (getEmpByEmail($email) != "invalid email") $emailErr = "duplicate";
        else if (strlen($email) < 8) $emailErr = "invalid";
        else $emailErr = "good";
        
        //check cmnd
        if (strlen($address) == 0) $addressErr = "invalid";
        else $addressErr = "good";

        //check cmnd
        if (strlen($gender) == 0) $genderErr = "invalid";
        else $genderErr = "good";

        if ($idErr == "good" && $nameErr == "good" &&  $cmndErr == "good" &&  $phoneErr == "good" && $passwordErr == "good" &&  $emailErr == "good" &&  $addressErr == "good" && $genderErr == "good") $checkAll = 1;
        else $checkAll = 0;

        $errResult = array ("idErrAdd" => $idErr,
                            "nameErrAdd" => $nameErr,
                            "cmndErrAdd" => $cmndErr,
                            "phoneErrAdd" => $phoneErr,
                            "passwordErrAdd" => $passwordErr,
                            "emailErrAdd" => $emailErr,
                            "addressErrAdd" => $addressErr,
                            "genderErrAdd" => $genderErr,
                            );
        $result = array ("errResultAdd" => json_encode($errResult),
                         "checkAll" => $checkAll);
        return $result;
    }

    function checkUpdateEmployee($curID, $id, $name, $cmnd, $email, $phone, $password, $address, $gender) {
        //this function will check information of update employee form is valid or not
        require('model/db.php');

        //get current employee
        $curEmp = json_decode(getEmpByID($curID));

        //check id

        if ($curID != $id && getEmpByID($id) != "invalid id") $idErr = "duplicate";
        else if (strlen($id) == 0) $idErr = "missing";
        else $idErr = "good";

        //check name
        if (strlen($name) < 8) $nameErr = "invalid";
        else $nameErr = "good";

        //check cmnd
        if (strlen($cmnd) == 0) $cmndErr = "invalid";
        else $cmndErr = "good";

        //check phone
        if ($phone != $curEmp->phone && getEmpByPhone($phone) != "invalid phone") $phoneErr = "duplicate";
        else if (strlen($phone) < 8) $phoneErr = 'invalid';
        else $phoneErr = "good";

        //check password
        if (strlen($password) < 8) $passwordErr = 'invalid';
        else $passwordErr = "good";
        
        //check email
        if ($email != $curEmp->email && getEmpByEmail($email) != "invalid email") $emailErr = "duplicate";
        else if (strlen($email) < 8) $emailErr = "invalid";
        else $emailErr = "good";
        
        //check cmnd
        if (strlen($address) == 0) $addressErr = "invalid";
        else $addressErr = "good";

        //check cmnd
        if (strlen($gender) == 0) $genderErr = "invalid";
        else $genderErr = "good";

        if ($idErr == "good" && $nameErr == "good" &&  $cmndErr == "good" &&  $phoneErr == "good" && $passwordErr == "good" &&  $emailErr == "good" &&  $addressErr == "good" && $genderErr == "good") $checkAll = 1;
        else $checkAll = 0;

        $errResult = array ("idErrUpd" => $idErr,
                            "nameErrUpd" => $nameErr,
                            "cmndErrUpd" => $cmndErr,
                            "phoneErrUpd" => $phoneErr,
                            "passwordErrUpd" => $passwordErr,
                            "emailErrUpd" => $emailErr,
                            "addressErrUpd" => $addressErr,
                            "genderErrUpd" => $genderErr,
                            );
        $result = array ("errResultUpd" => json_encode($errResult),
                         "checkAll" => $checkAll);
        return $result;
    }
?>