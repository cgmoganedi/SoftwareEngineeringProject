<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_skill = $_POST['usr_skill'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO user_skills (ID,Skill) VALUES ('$ID','$usr_skill')";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location: /JobMatch/src/student-home.php');
    exit();
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

