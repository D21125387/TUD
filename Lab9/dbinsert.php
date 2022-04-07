<?php
include 'conn.php';

$sql = "INSERT INTO user (username, password, firstname, lastname) VALUES ('johndoe', '1234', 'John', 'Doe')";
$conn->query($sql);

$sql = "INSERT INTO product (pname, description, price, stock) VALUES ('iPhone 13 Pro Max', 'Apple Phone', 1200, 100)";
$conn->query($sql);

