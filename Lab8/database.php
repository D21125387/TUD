<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=lab8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
    $conn->exec(login());
    echo "<br>";
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

function login(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['fname'];
    $surname = $_POST['sname'];
    $age = $_POST['age'];
    $sql = "insert into user(username, password, firstname, surname, age) values (
                                                                      '".$username."',
                                                                      '".$password."',
                                                                      '".$firstname."',
                                                                      '".$surname."',
                                                                      ".$age."
)";

    echo $sql;
    return $sql;
}