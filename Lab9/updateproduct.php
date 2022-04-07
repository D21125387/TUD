<?php
include 'conn.php';
$prod_id = $_POST['updateproduct_id'];
$prod_name = $_POST['updateproduct_pname'];
$prod_desc = $_POST['updateproduct_description'];
$prod_price = $_POST['updateproduct_price'];
$prod_stock = $_POST['updateproduct_stock'];

$prepare = array();

if(empty($prod_id)){
    exit("Product ID Empty");
}

if(!empty($prod_name)){
    array_push($prepare, "pname='$prod_name'");
}

if(!empty($prod_desc)){
    array_push($prepare, "description='$prod_desc'");
}

if(!empty($prod_price)){
    array_push($prepare, "price='$prod_price'");
}

if(!empty($prod_stock)){
    array_push($prepare, "stock='$prod_stock'");
}

$prepared = implode(",", $prepare);

$sql = "UPDATE product SET $prepared WHERE id = $prod_id";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();

// echo a message to say the UPDATE succeeded

if($stmt->rowCount() == 0){
    echo "Failed to update, please check your entry again";
} else {
    echo $stmt->rowCount() . " records UPDATED successfully";
}
