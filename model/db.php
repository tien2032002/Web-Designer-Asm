<!-- database -->
<?php
    $servername = "localhost";
    $username_db = "tuan";
    $password_db = "123";
    $dbName = "database";

    $con = new mysqli($servername, $username_db, $password_db, $dbName = "database");

    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
?>