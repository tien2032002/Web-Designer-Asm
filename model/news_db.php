<?php
    function save_news_db() {
        include("model\db.php");
        $target_dir    = "view/images/news/";
        $target_file   = $target_dir . $_FILES["thumnail"]['name'];
        move_uploaded_file($_FILES["thumnail"]["tmp_name"], $target_file);
        $title = $_POST['title'];
        $tag = $_POST['tag'];
        $content = $_POST['editor1'];
        mysqli_query($con, "INSERT INTO news (thumnail, title, tag, content)
                            VALUES ('$target_file', '$title', '$tag', '$content')");
    }

    function check_save_news(){
        $uploadErr = 'not update';
        if ($_FILES["thumnail"]['name'] != ''){
            //change thumnail
            //check if file upload is image or not
            $check = getimagesize($_FILES["thumnail"]["tmp_name"]);
            if($check == false) {
                $uploadErr = 'notImage';
            }

            else {
                $uploadErr = 'good';
            }
        }

        if ($_POST['title'] == '') $titleErr = 'invalid';
        else $titleErr = 'good';

        if ($_POST['tag'] == '') $tagErr = 'invalid';
        else $tagErr = 'good';

        if ($_POST['editor1'] == '') $contentErr = 'invalid';
        else $contentErr = 'good';

        $resultErr = array('uploadErr' => $uploadErr,
                           'titleErr' => $titleErr,
                           'tagErr' => $tagErr,
                           'contentErr' => $contentErr);

        return $resultErr;
    }

    function get_news() {
        //get all news
        include("model\db.php");
        $newsResult = mysqli_query($con, "SELECT * FROM news");
        $resultArray = array();
        while ($row = $newsResult->fetch_object()) {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function get_news_by_id($id) {
        include("model\db.php");
        $newsResult = mysqli_query($con, "SELECT * FROM news WHERE id=$id");
        return $newsResult->fetch_object();
    }

    function get_news_by_tag($tagId) {
        include("model\db.php");
        $newsResult = mysqli_query($con, "SELECT * FROM news WHERE tag=$tagId");
        $resultArray = array();
        while ($row = $newsResult->fetch_object()) {
            $resultArray[] = $row;
        }
        return $resultArray;
    }
?>