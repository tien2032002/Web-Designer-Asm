<?php
    function get_all_contact() {
        include('model\db.php');
        $contact = mysqli_query($con, "SELECT * FROM contact WHERE platform!='map'");
        $contactArray = array();
        while($row = $contact->fetch_object()) {
            $contactArray[] = $row;
        }
        return $contactArray;
    }

    function get_map() {
        include('model\db.php');
        $map = mysqli_query($con, "SELECT * FROM contact WHERE platform='map'");
        return $map->fetch_object();
    }
?>