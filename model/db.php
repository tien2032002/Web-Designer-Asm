<!-- database -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "database";

    $con = mysqli_connect($servername, $username, $password, $dbName);

    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    else {
        echo "Success!";
    }
    
?>