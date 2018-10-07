<?php
include_once 'connection.php';

$login_email = $_POST['login_eml'];
$login_password = $_POST['login_pswd'];

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$student_sql = "SELECT * FROM users where Email = '$login_email' AND Password = '$login_password'";
$company_sql = "SELECT * FROM companies where Email = '$login_email' AND Password = '$login_password'";
$student_result = $conn->query($student_sql);
$company_result = $conn->query($company_sql);

if ($student_result->num_rows == 1)
{
    while($row = $student_result->fetch_assoc())
    {
        $output[] = $row;
        session_start();
        $_SESSION['UserID'] = $output[0]['ID'];
        header('Location: /JobMatch/src/Students/php/student-home.php');
    }
}
elseif($company_result->num_rows == 1)
{
    while($row = $company_result->fetch_assoc())
    {
        $output[] = $row;
        session_start();
        $_SESSION['UserID'] = $output[0]['ID'];
        header('Location: /JobMatch/src/Companies/php/company-home.php');
    }
}
else
{
    echo "Wrong email or password";
}
$conn->close();
