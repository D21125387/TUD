<?php
include 'conn.php';

$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";
// use exec() because no results are returned
$conn->exec($sql);

$sql = "CREATE TABLE product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pname VARCHAR(30) NOT NULL,
description VARCHAR(30) NOT NULL,
price DOUBLE NOT NULL,
stock INT(6) NOT NULL
)";

$conn->exec($sql);