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

?>