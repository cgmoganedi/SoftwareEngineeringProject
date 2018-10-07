<?php

include_once 'connection.php';

$comp_email = $_POST['comp_eml'];
$comp_password = $_POST['comp_pswd'];
$comp_name = $_POST['comp_nme'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if there's a duplicate
$sql = "SELECT * FROM companies where Email = '$comp_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "Email is already used";
    exit();
}
else
{
    $sql = "INSERT INTO companies (Email, Password, Name) VALUES ('$comp_email','$comp_password','$comp_name')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/Students/html/login.html');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}