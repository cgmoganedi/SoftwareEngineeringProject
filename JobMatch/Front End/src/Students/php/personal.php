<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_ttle = $_POST['usr_ttle'];
$usr_srnme = $_POST['usr_srnme'];
$usr_nme = $_POST['usr_nme'];
$usr_cntry = $_POST['usr_cntry'];
$usr_dob = $_POST['usr_dob'];
$usr_id = $_POST['usr_id'];
$usr_marital_sta = $_POST['ms'];
$usr_gndr = $_POST['usr_gndr'];
$usr_race = $_POST['usr_race'];
$usr_city = $_POST['usr_city'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM personal_info where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $usr_eml = Query('Email','users',$ID,$conn);
    $sql = "UPDATE personal_info SET Title = '$usr_ttle', Name = '$usr_nme', Surname = '$usr_srnme', Country = '$usr_cntry', Date_of_Birth = '$usr_dob', Id_Num = '$usr_id', Email = '$usr_eml', Marital_Status = '$usr_marital_sta', Gender = '$usr_gndr', Race = '$usr_race', City = '$usr_city' WHERE `personal_info`.`ID` = 6";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    $usr_eml = Query('Email','users',$ID,$conn);
    $sql = "INSERT INTO personal_info (ID,Title, Name, Surname, Country, Date_of_Birth, Id_Num, Email, Marital_Status, Gender, Race, City) VALUES ('$ID','$usr_ttle','$usr_nme','$usr_srnme','$usr_cntry','$usr_dob','$usr_id','$usr_eml','$usr_marital_sta','$usr_gndr','$usr_race','$usr_city')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/student-home.php');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





