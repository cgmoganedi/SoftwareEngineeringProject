<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_org = $_POST['usr_org'];
$usr_cntry = $_POST['cntry'];
$usr_pos = $_POST['usr_pos'];
$usr_strtdte = $_POST['strtdte'];
$usr_enddte = $_POST['enddte'];
$usr_involvement = $_POST['involvement'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM professional_experience where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE professional_experience SET Organisation = '$usr_org', Country = '$usr_cntry', Position = '$usr_pos', Start_Date = '$usr_strtdte', End_Date = '$usr_enddte', Type_of_Involvement = '$usr_involvement' WHERE professional_experience.ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/welcome.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    $sql = "INSERT INTO professional_experience (ID,Organisation,Country,Position,Start_Date,End_Date,Type_of_Involvement) VALUES ('$ID','$usr_org','$usr_cntry','$usr_pos','$usr_strtdte','$usr_enddte','$usr_involvement')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/php/welcome.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





