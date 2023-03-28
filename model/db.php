<!-- database -->
<?php
    $servername = "localhost";
<<<<<<< Updated upstream
    $username = "root";
    $password = "";
=======
    $username_db = "root";
    $password_db = "";
>>>>>>> Stashed changes
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