<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_bio = $_POST['usr_bio'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM user_biographies where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE user_biographies SET User_Bio = '$usr_bio' WHERE user_biographies.ID = '$ID'";

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
    $sql = "INSERT INTO user_biographies (ID,User_Bio) VALUES ('$ID','$usr_bio')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





