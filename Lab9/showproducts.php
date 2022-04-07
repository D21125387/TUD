<?php
include 'conn.php';
$sql = 'SELECT * FROM product';

$statement = $conn->query($sql);

// get all publishers
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<br>';
if ($products) {
    // show the publishers
    foreach ($products as $product) {
        echo $product['id'] . ' | ' . $product['pname'] . ' | ' . $product['description'] . ' | ' . $product['price'] . ' | ' . $product['stock'] . '<br>';
    }
}