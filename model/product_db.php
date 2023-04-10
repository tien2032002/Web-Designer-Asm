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

    function getFavouriteProductList($type) {
        
    }
?>