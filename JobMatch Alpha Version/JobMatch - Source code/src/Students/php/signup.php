<?php

include_once 'connection.php';

$usr_email = $_POST['usr_eml'];
$usr_password = $_POST['usr_pswd'];
$usr_nme = $_POST['usr_nme'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if there's a duplicate
$sql = "SELECT * FROM users where Email = '$usr_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "Email is already used";
    exit();
}
else
{
    $sql = "INSERT INTO users (Email, Password, Name) VALUES ('$usr_email','$usr_password','$usr_nme')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/html/login.html');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}