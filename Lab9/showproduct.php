<?php
include 'conn.php';
$sql = 'SELECT * FROM product where pname like "%'.$_POST['showproduct_pname'].'%"';

$statement = $conn->query($sql);

// get all publishers
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<br>';
if ($products) {
    // show the publishers
    foreach ($products as $product) {
        echo $product['pname'] . ' | ' . $product['description'] . ' | ' . $product['price'] . ' | ' . $product['stock'] . ' | ' . '<br>';
    }
}