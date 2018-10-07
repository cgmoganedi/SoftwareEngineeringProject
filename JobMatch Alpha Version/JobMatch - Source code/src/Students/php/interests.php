<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_intrst = $_POST['usr_intrst'];
$usr_clbs = $_POST['usr_clubs'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM user_interests where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE user_interests SET Interest = '$usr_intrst', Club_Societies = '$usr_clbs' WHERE user_interests.ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    $sql = "INSERT INTO user_interests (ID,Interest,Club_Societies) VALUES ('$ID','$usr_intrst','$usr_clbs')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





