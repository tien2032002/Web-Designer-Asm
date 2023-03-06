<?php
    require("../model/db.php");
    if (!isset($_POST["username"]) || !isset($_POST["password"])) echo "enter username & password";
    else  {
        require("../control/control.php");
        $result = login($_POST["username"], $_POST["password"]);
        if ($result == 1) header ("Location: ../view/trangchu.html");
        else echo "fail to login";
        // $username = $_POST["username"];
        // $password = $_POST["password"];
        // $username = stripslashes($username);
        // $username = mysqli_real_escape_string($con,$username);
        // $password = stripslashes($password);
        // $password = mysqli_real_escape_string($con,$password);

        // $query = "SELECT * FROM customers WHERE username == $username AND password == $password";
        // $result = mysqli_query($con, $query);
        // if (mysqli_num_rows($result) == true) header ("Location: ../view/trangchu.html");
        // else echo "fail to login";
    }
?>