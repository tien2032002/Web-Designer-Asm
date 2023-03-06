<!-- database -->
<?php
    $servername = "localhost";
    $username = "tien2032002";
    $password = "King@203";
    $dbName = "database";

    $con = mysqli_connect($servername, $username, $password, $dbName);

    global $con;

    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
?>