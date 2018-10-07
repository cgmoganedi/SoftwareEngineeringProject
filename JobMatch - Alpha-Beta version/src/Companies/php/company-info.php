<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$comp_name = $_POST['comp_name'];
$comp_phone = $_POST['comp_phone'];
$comp_cntry = $_POST['comp_cntry'];
$comp_province = $_POST['comp_prvnce'];
$comp_city = $_POST['comp_city'];
$comp_website = $_POST['comp_website'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM company_info where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE company_info SET  Company_Name = '$comp_name', Company_Number= '$comp_phone', Company_Country = '$comp_cntry', Company_Province = '$comp_province', Company_City = '$comp_city', Company_Website = '$comp_website' WHERE company_info.ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/Companies/php/company-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    $sql = "INSERT INTO company_info (ID,Company_Name,Company_Number,Company_Country,Company_Province,Company_City,Company_Website) VALUES ('$ID','$comp_name','$comp_phone','$comp_cntry','$comp_province','$comp_city','$comp_website')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/Companies/php/company-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





