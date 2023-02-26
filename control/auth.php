<!-- check session, if dont have session, go to login page -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>