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

//check if data already exists:
$sql = "SELECT * FROM user_skills where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE user_skills SET Skill = '.$usr_skill.' WHERE user_skills.ID = '.$ID";

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
    $sql = "INSERT INTO user_skills (ID,Skill) VALUES ('$ID','$usr_skill')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





