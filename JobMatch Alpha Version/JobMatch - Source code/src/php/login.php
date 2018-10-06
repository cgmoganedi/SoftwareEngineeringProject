<?php
include_once 'connection.php';

$usr_email = $_POST['usr_eml'];
$usr_password = $_POST['usr_pswd'];

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users where Email = '$usr_email' AND Password = '$usr_password'";
$result = $conn->query($sql);

if ($result->num_rows == 1)
{
    while($row = $result->fetch_assoc())
    {
        $output[] = $row;
        session_start();
        $_SESSION['UserID'] = $output[0]['ID'];
        header('Location: /JobMatch/src/php/welcome.php');
    }
}
else
{
    echo "0 results";
}
$conn->close();
