<!-- check session, if dont have session, go to login page -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../view/html/UI_user/home_page.php");
exit;
 }
else header("Location: ../view/html/UI_user/home_page_user.php")
?>