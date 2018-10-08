<?php
include_once 'connection.php';
include_once 'things.php';
session_start();
$ID = $_SESSION['UserID'];
$usr_inst = $_POST['usr_inst'];
$usr_qualnme = $_POST['usr_qualname'];
$usr_qualfld = $_POST['usr_qualfld'];
$usr_strtdte = $_POST['usr_strtdte'];
$usr_compdte = $_POST['usr_compdte'];
$usr_acdmic_ave = $_POST['usr_acdmic_ave'];
$usr_grd_scl = $_POST['usr_grd_scle'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check if data already exists:
$sql = "SELECT * FROM academic_info where ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "UPDATE academic_info SET Institution = '$usr_inst', Qualification_Description = '$usr_qualnme', Qualification_Field = '$usr_qualfld', Start_Date  = '$usr_strtdte', Completion_Date = '$usr_compdte' , Academic_Average = '$usr_acdmic_ave', Grade_Scale = '$usr_grd_scl' WHERE academic_info.ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/Students/html/majors.html');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    $sql = "INSERT INTO academic_info (ID,Institution,Qualification_Description,Qualification_Field,Start_Date,Completion_Date,Academic_Average,Grade_Scale) VALUES ('$ID','$usr_inst','$usr_qualnme','$usr_qualfld','$usr_strtdte','$usr_compdte','$usr_acdmic_ave','$usr_grd_scl')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header('Location: /JobMatch/src/Students/html/majors.html');
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}





