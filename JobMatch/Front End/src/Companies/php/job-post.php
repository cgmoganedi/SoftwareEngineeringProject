<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$job_ttle = $_POST['job_ttle'];
$job_desc = $_POST['job_desc'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO job_postings (ID,Job_Title,Job_Description) VALUES ('$ID','$job_ttle','$job_desc')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location: /JobMatch/src/Companies/php/company-home.php');
    exit();
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

