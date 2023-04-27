<?php
    function add_response($name, $email, $message) {
        include('model\db.php');
        mysqli_query($con, "INSERT INTO response (name, mail, message)
                            VALUES ('$name', '$email', '$message')");
    }

    function get_all_response() {
        include('model\db.php');
        $responseArray = array();
        $responseList = mysqli_query($con, "SELECT * FROM response");
        while($row = $responseList->fetch_object()){
            $responseArray[] = $row;
        }
        return $responseArray;
    }
?>