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

    function add_contact_db($platform, $icon, $link) {
        include('model\db.php');
        mysqli_query($con, "INSERT INTO contact (platform, icon, link)
                            VALUES ('$platform', '$icon', '$link')");
    }

    function delete_contact_db($platform){
        include('model\db.php');
        mysqli_query($con, "DELETE FROM contact WHERE platform='$platform'");
    }

    function update_contact_db($platform, $icon, $link){
        include('model\db.php');
        mysqli_query($con, "UPDATE contact
                            SET link='$link',
                                icon = '$icon' 
                            WHERE platform='$platform'");
    }
?>