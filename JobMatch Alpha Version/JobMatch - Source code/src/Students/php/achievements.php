<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_achievement = $_POST['achievement'];
$usr_achievement_desc = $_POST['achievement_desc'];
$usr_achievement_yr = $_POST['achievement_yr'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM user_achievements where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE user_achievements SET Achievement_name = '$usr_achievement', Achievement_Description = '$usr_achievement_desc', Year_Obtained = '$usr_achievement_yr' WHERE user_achievements.ID = '$ID'";

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
    $sql = "INSERT INTO user_achievements (ID,Achievement_name,Achievement_Description) VALUES ('$ID','$usr_achievement','$usr_achievement_desc','$usr_achievement_yr')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





