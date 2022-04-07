<?php
include 'conn.php';
$id = $_POST['deleteproduct_id'];
$sql = "DELETE FROM product WHERE id=$id";

// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";