<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$maj_inst = $_POST['maj_inst'];
$maj_name = $_POST['maj_name'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO majors (ID,Major) VALUES ('$ID','$maj_name')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location: /JobMatch/src/Students/php/student-home.php');
    exit();
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



