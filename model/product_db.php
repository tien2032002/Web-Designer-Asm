<?php
    function addProduct($name, $type, $description, $price) {
        //add product to database
        include("model\db.php");
        $target_dir    = "view/images/";
        $target_file   = $target_dir . $_FILES["image"]['name'];
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        mysqli_query($con, "INSERT INTO products (name, type, description, image, price, rating)
                            VALUES ('$name', '$type', '$description', '$target_file', $price, 0)");
    }

    function checkAddProduct($name, $type, $description, $price) {
        if (strlen($name) == 0 ) $nameErr = 'missing';
        else $nameErr = "good";

        if (strlen($description) == 0 ) $descriptionErr = 'missing';
        else $descriptionErr = "good";

        if ($_FILES["image"]['name'] != ''){
            //change avatar
            //check if file upload is image or not
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check == false) {
                $uploadErr = 'notImage';
            }

            else {
                $uploadErr = 'good';
            }
        }
        else $uploadErr = "missing";

        if ($price <= 0 ) $priceErr = 'invalid';
        else $priceErr = "good";

        $checkAll = ($nameErr == "good" && $descriptionErr == "good" && $uploadErr == "good" && $priceErr == "good") ? 1 : 0;

        $errArray = array('nameErr' => $nameErr,
                          'descriptionErr' => $descriptionErr,
                          'uploadErr' => $uploadErr,
                          'priceErr' => $priceErr,
                          'checkAll' => $checkAll);
        return $errArray;
    }

    function deleteProduct($id) {
        //delete product to database
        include("model\db.php");
        mysqli_query($con, "DELETE FROM products WHERE id=$id");
    }

    function updateProduct($curID, $name, $type, $description, $price, $errList) {
        //update product's information to database
        include("model\db.php");
        if ($errList['nameErr'] == 'good') mysqli_query($con, "UPDATE products
                                                               SET name='$name'
                                                               WHERE id=$curID");
        
        if ($errList['descriptionErr'] == 'good') mysqli_query($con, "UPDATE products
                                                               SET description='$description'
                                                               WHERE id=$curID");

        if ($errList['priceErr'] == 'good') mysqli_query($con, "UPDATE products
                                                               SET price='$price'
                                                               WHERE id=$curID");

        if ($errList['uploadErr'] == 'good') {
            $target_dir    = "view/images/";
            $target_file   = $target_dir . $_FILES["image"]['name'];
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            mysqli_query($con, "UPDATE products
                                SET image='$target_file'
                                WHERE id=$curID");
        }
    }

    function checkUpdProduct($name, $type, $description, $price) {
        if (strlen($name) == 0 ) $nameErr = 'missing';
        else $nameErr = "good";

        if (strlen($description) == 0 ) $descriptionErr = 'missing';
        else $descriptionErr = "good";

        if ($_FILES["image"]['name'] != ''){
            //change avatar
            //check if file upload is image or not
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check == false) {
                $uploadErr = 'notImage';
            }

            else {
                $uploadErr = 'good';
            }
        }
        else $uploadErr = "not update";

        if ($price <= 0 ) $priceErr = 'invalid';
        else $priceErr = "good";

        $checkAll = ($nameErr == "good" && $descriptionErr == "good" && ($uploadErr == "good" || $uploadErr == 'not update') && $priceErr == "good") ? 1 : 0;

        $errArray = array('nameErr' => $nameErr,
                          'descriptionErr' => $descriptionErr,
                          'uploadErr' => $uploadErr,
                          'priceErr' => $priceErr,
                          'checkAll' => $checkAll);
        return $errArray;
    }

    function getProductList($type) {
        //get list of products with type
        require('model/db.php');
        $getList = "SELECT * FROM products WHERE type='$type'";
        $resultList = mysqli_query($con, $getList);
        $arrayList = array();
        while ($row = $resultList->fetch_object()) {
            $arrayList[]=json_encode($row);
        }
        return json_encode($arrayList);
    }

    function getTypeProduct() {
        require('model/db.php');
        $getList = "SELECT distinct type FROM products";
        $resultList = mysqli_query($con, $getList);
        $arrayList = array();
        while ($row = $resultList->fetch_array()) {
            $arrayList[]=$row[0];
        }
        return json_encode($arrayList);
    }

    function get3RandomProduct($type, $id) {
        require('model/db.php');
        $searchProduct = "SELECT * FROM products WHERE id!='$id' AND type='$type'";
        $resultProduct = mysqli_query($con, $searchProduct);
        $arrayList = array();
        while ($row = $resultProduct->fetch_object()) {
            $arrayList[]=json_encode($row);
        }
        $length = count($arrayList);
        if ($length < 3) return json_encode($arrayList);
        $firstIndex = rand(0, count($arrayList)-1);

        do  $secondIndex = rand(0, count($arrayList)-1);
        while ($secondIndex == $firstIndex);

        do  $thirdIndex = rand(0, count($arrayList)-1);
        while ($thirdIndex == $firstIndex || $thirdIndex == $secondIndex);

        $arrayResult[] = $arrayList[$firstIndex];
        $arrayResult[] = $arrayList[$secondIndex];
        $arrayResult[] = $arrayList[$thirdIndex];
        return json_encode($arrayResult);
    }

    function getProductById($id) {
        //get product by id
        require('model/db.php');
        $searchProduct = "SELECT * FROM products WHERE id='$id'";
        $resultProduct = mysqli_query($con, $searchProduct);
        if (mysqli_num_rows($resultProduct) == 0) return "invalid id";
        else return json_encode($resultProduct->fetch_object());
    }

    function getPopularProducts($type, $limit) {
        require('model/db.php');
        $popularProduct = "SELECT * FROM products WHERE type='$type' ORDER BY rating DESC LIMIT $limit";
        $popularProduct = mysqli_query($con, $popularProduct);
        $resultArray = array();
        while ($row = $popularProduct->fetch_object()) {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function getReview($customerID, $productID) {
        require('model/db.php');
        $reviewResult = mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND customer_id=$customerID ");
        if(mysqli_num_rows($reviewResult) == 0) return 'notReviewed';
        else return json_encode($reviewResult->fetch_object());
    }

    function getStar($productID){
        require('model/db.php');
        $productID = (int)$productID;
        $resultStar = array('total' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID")),
                            'one' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND stars=1")),
                            'two' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND stars=2")),
                            'three' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND stars=3")),
                            'four' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND stars=4")),
                            'five' => mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedback WHERE product_id=$productID AND stars=5")));
        return json_encode($resultStar);
    }

    function addRating($productID, $customerID, $stars, $comment){
        require('model/db.php');
        echo "INSERT INTO feedback(product_id, customer_id, stars, comment)
        VALUES ($productID, $customerID, $stars, $comment)";
        $addRating = mysqli_query($con, "INSERT INTO feedback(product_id, customer_id, stars, comment)
                                         VALUES ($productID, $customerID, $stars, '$comment')");
        return TRUE;
    }

    function get_all_product_id(){
        require('model/db.php');
        $productId = mysqli_query($con, "SELECT id from products");
        $resultArray = array();
        while($row = $productId->fetch_object()){
            $resultArray[] = $row->id;
        }
        return $resultArray;
    }

    function updateRating($productID, $customerID, $stars, $comment) {
        require('model/db.php');
        $addRating = mysqli_query($con, "UPDATE feedback
                                         SET stars=$stars, comment='$comment'
                                         WHERE product_id=$productID AND customer_id=$customerID");
        return TRUE;
    }

    function getFeedback($productID, $page){
        require('model/db.php');
        require('model\customer_db.php');
        $offset = ($page - 1) * 5;
        $getFeedback = "SELECT * FROM feedback WHERE product_id=$productID ORDER BY id DESC limit 5 offset $offset";
        $feedbackResult = mysqli_query($con, $getFeedback);
        $commentArray = array();
        while($row = $feedbackResult->fetch_object()) {
            $userObj = json_decode(getCustomerById($row->customer_id));
            $commentObj = array();
            $commentObj['name'] = $userObj->name;
            $commentObj['avatar'] = $userObj->image;
            $commentObj['star'] = $row->stars;
            $commentObj['comment'] = $row->comment;
            $commentArray[] = $commentObj;
        }
        return $commentArray;
    }

    function get_all_product_object($page) {
        $offset = ($page - 1) * 6;
        require('model/db.php');
        $productObject = mysqli_query($con, "SELECT * FROM products ORDER BY id DESC LIMIT 6 OFFSET $offset");
        $productList = array();
        while ($row = $productObject->fetch_object()) {
            $productList[] = $row;
        }
        return $productList;
    }

    function get3Dishes($type) {
        //this function will return 3 dishes arccording to type
        require('model/db.php');
        $searchProduct = "SELECT * FROM products WHERE type='$type' LIMIT 3";
        $resultProduct = mysqli_query($con, $searchProduct);
        $arrayList = array();
        while ($row = $resultProduct->fetch_object()) {
            $arrayList[]=json_encode($row);
        }
        return json_encode($arrayList);
    }

    function getMenuList() {
        //this function will return 3 dishes for each type
        //3 dishes for stater
        $starterList = get3Dishes('starter');
        //3 dishes for main
        $mainList = get3Dishes('main');
        //3 dishes for dessert
        $dessertList = get3Dishes('dessert');

        $arrayResult = array('starterList' => $starterList,
                             'mainList' => $mainList,
                             'dessertList' => $dessertList);
        return json_encode($arrayResult);
    }

    function search($key) {
        require('model/db.php');
        $key = trim($key);
        if ($key == '') return "not match";
        $searchQuerryName = "SELECT * FROM products WHERE name like '%$key%'";
        $keyWords = explode(' ', $key);
 
        // $searchQuerryType = "SELECT * FROM products WHERE type like '%$key%'";
        // $searchQuerryDesc = "SELECT * FROM products WHERE description like '%$key%'";
        foreach($keyWords as $keyWord) {
            $searchQuerryName .= " OR name LIKE '%" . $keyWord ."%'";
            // $searchQuerryType .= " OR name LIKE '%" . $keyWord ."%'";
            // $searchQuerryDesc .= " OR name LIKE '%" . $keyWord ."%'";
        }

        $searchQuerryName.=" ORDER BY (CASE WHEN name = '".$key."' THEN 1 WHEN name LIKE '%".$key."%' THEN 2 ELSE 3 END),name LIMIT 10";

        $searchQuerryName = mysqli_query($con, $searchQuerryName);
        // $searchQuerryType = mysqli_query($con, $searchQuerryType);
        // $searchQuerryDesc = mysqli_query($con, $searchQuerryDesc);

        $resultArray = array();

        while($result = $searchQuerryName->fetch_object()) {
            $resultArray[] = $result;
        }

        // while($result = $searchQuerryType->fetch_object()) {
        //     $resultArray[] = $result;
        // }

        // while($result = $searchQuerryDesc->fetch_object()) {
        //     $resultArray[] = $result;
        // }

        return $resultArray;
    }

    function get_all_feedback($page) {
        require('model/db.php');
        $offset = ($page - 1) * 5;
        $feedback = mysqli_query($con, "SELECT * FROM feedback ORDER BY id DESC LIMIT 5 OFFSET $offset");
        $feedbackList = array();
        while ($row = $feedback->fetch_object()){
            $feedbackList[] = $row;
        }
        return $feedbackList;
    }

    function delete_feedback($id) {
        require('model/db.php');
        mysqli_query($con, "DELETE FROM feedback WHERE id=$id");
    }

    function count_product() {
        require('model/db.php');
        $count = mysqli_query($con, "SELECT * FROM products");
        return mysqli_num_rows($count);
    }

    function count_feedback() {
        require('model/db.php');
        $count = mysqli_query($con, "SELECT * FROM feedback");
        return mysqli_num_rows($count);
    }

    function revenue() {
        require('model/db.php');
        $billList = mysqli_query($con, "SELECT * FROM bills WHERE status='paid'");
        $sum = 0;
        while($bill = $billList->fetch_object()) {
            $sum+=$bill->price;
        }
        return $sum;
    }

?>