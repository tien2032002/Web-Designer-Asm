<!-- database -->
<?php
    $servername = "localhost";
    $username_db = "tien2032002";
    $password_db = "King@203";
    $dbName = "database";

    $con = mysqli_connect($servername, $username_db, $password_db, $dbName);

    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
?>