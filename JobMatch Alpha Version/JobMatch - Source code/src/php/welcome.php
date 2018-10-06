<?php
//get page data:
include_once 'connection.php';
include_once 'things.php';
session_start();
$name = Query('Name','users',$_SESSION['UserID'],$conn);
$title = Query('Title','personal_info',$_SESSION['UserID'],$conn);
$surname = Query('Surname','personal_info',$_SESSION['UserID'],$conn);
$country = Query('Country','personal_info',$_SESSION['UserID'],$conn);
$dob = Query('Date_of_Birth','personal_info',$_SESSION['UserID'],$conn);
$idnum = Query('Id_Num','personal_info',$_SESSION['UserID'],$conn);
$email = Query('Email','personal_info',$_SESSION['UserID'],$conn);
$marital = Query('Marital_Status','personal_info',$_SESSION['UserID'],$conn);
$gender = Query('Gender','personal_info',$_SESSION['UserID'],$conn);
$race = Query('Race','personal_info',$_SESSION['UserID'],$conn);
$city = Query('City','personal_info',$_SESSION['UserID'],$conn);
?>

<!DOCTYPE html>
<html>
<body>

<h1>Welcome, <?php echo $name;?></h1>

<h2>Personal Info</h2>

<div>
    <p>Title</p>
    <p><?php echo $title?></p>
    <p>Name</p>
    <p><?php echo $name?></p>
    <p>Surname</p>
    <p><?php echo $surname?></p>
    <p>Country</p>
    <p><?php echo $country?></p>
    <p>Date of Birth</p>
    <p><?php echo $dob?></p>
    <p>Identity Number</p>
    <p><?php echo $idnum?></p>
    <p>Email</p>
    <p><?php echo $email?></p>
    <p>Marital Status</p>
    <p><?php echo $marital?></p>
    <p>Gender</p>
    <p><?php echo $gender?></p>
    <p>Race</p>
    <p><?php echo $race?></p>
    <p>City</p>
    <p><?php echo $city?></p>
</div>

<form action="../html/personal_info.html">
    <input type="submit" value="Edit Personal Info" />
</form>

</body>
</html>
