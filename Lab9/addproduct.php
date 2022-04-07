<?php
include 'conn.php';

$sql = "INSERT INTO product (pname, description, price, stock)
VALUES (
'".$_POST['addproduct_pname']."',
'".$_POST['addproduct_description']."',
'".$_POST['addproduct_price']."',
'".$_POST['addproduct_stock']."')"
;
$conn->query($sql);

echo "Product Added";