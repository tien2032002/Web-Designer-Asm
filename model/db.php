<!-- database -->
<?php
    $servername = "localhost";

    $username_db = "minhle106";
    $password_db = "123456";
    $dbName = "restaurant";

    $con = new mysqli($servername, $username_db, $password_db, $dbName, 3308);

    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
?>