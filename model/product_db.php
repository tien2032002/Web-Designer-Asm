<?php
    function addProduct() {
        //add product to database
        require_once('db.php');
    }

    function deleteProduct() {
        //delete product to database
        require_once('db.php');
    }

    function updateProduct() {
        //update product's information to database
        require_once('db.php');
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

    function getReview($customerID, $productID) {
        require('model/db.php');
        $reviewResult = mysqli_query($con, "SELECT * FROM feedback WHERE product_id='$productID' AND customer_id='$customerID' ");
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
        $getFeedback = "SELECT * FROM feedback WHERE product_id=$productID limit 5 offset $offset";
        $feedbackResult = mysqli_query($con, $getFeedback);
        $commentArray = array();
        while($row = $feedbackResult->fetch_object()) {
            $userObj = json_decode(getCustomerById($_SESSION['id']));
            $commentObj = array();
            $commentObj['name'] = $userObj->name;
            $commentObj['avatar'] = $userObj->image;
            $commentObj['star'] = $row->stars;
            $commentObj['comment'] = $row->comment;
            $commentArray[] = $commentObj;
        }
        return $commentArray;
    }

    function getFavouriteProductList($type) {
        
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
?>