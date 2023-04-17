<?php
    include_once('base_controller.php');
    class employeeController extends baseController {

        //display home page UI for employee
        function home_page_employee() {
            $this->render("view/html/UI_employee/UI_employee");
        }

    }
?>