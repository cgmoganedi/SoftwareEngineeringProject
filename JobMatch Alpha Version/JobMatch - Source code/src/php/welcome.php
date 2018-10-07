<?php
//get page data:
//include_once 'connection.php';
//include_once 'things.php';
//session_start();
////personal info
//$name = Query('Name','users',$_SESSION['UserID'],$conn);
//$title = Query('Title','personal_info',$_SESSION['UserID'],$conn);
//$surname = Query('Surname','personal_info',$_SESSION['UserID'],$conn);
//$country = Query('Country','personal_info',$_SESSION['UserID'],$conn);
//$dob = Query('Date_of_Birth','personal_info',$_SESSION['UserID'],$conn);
//$idnum = Query('Id_Num','personal_info',$_SESSION['UserID'],$conn);
//$email = Query('Email','personal_info',$_SESSION['UserID'],$conn);
//$marital = Query('Marital_Status','personal_info',$_SESSION['UserID'],$conn);
//$gender = Query('Gender','personal_info',$_SESSION['UserID'],$conn);
//$race = Query('Race','personal_info',$_SESSION['UserID'],$conn);
//$city = Query('City','personal_info',$_SESSION['UserID'],$conn);
////accedemic info
//$inst = Query('Institution','academic_info',$_SESSION['UserID'],$conn);
//$qualnme = Query('Qualification_Description','academic_info',$_SESSION['UserID'],$conn);
//$qualfld = Query('Qualification_Field','academic_info',$_SESSION['UserID'],$conn);
//$acdmic_strtdte = Query('Start_Date','academic_info',$_SESSION['UserID'],$conn);
//$compdte = Query('Completion_Date','academic_info',$_SESSION['UserID'],$conn);
//$acdmic_avrg = Query('Academic_Average','academic_info',$_SESSION['UserID'],$conn);
//$grad_scl = Query('Grade_Scale','academic_info',$_SESSION['UserID'],$conn);
////experience
//$org_nme = Query('Organisation','professional_experience',$_SESSION['UserID'],$conn);
//$org_cntry = Query('Country','professional_experience',$_SESSION['UserID'],$conn);
//$org_pos = Query('Position','professional_experience',$_SESSION['UserID'],$conn);
//$org_strtdte = Query('Start_Date','professional_experience',$_SESSION['UserID'],$conn);
//$org_enddte = Query('End_Date','professional_experience',$_SESSION['UserID'],$conn);
//$org_involvement = Query('Type_of_Involvement','professional_experience',$_SESSION['UserID'],$conn);
////biography
//$usr_bio = Query('User_Bio','user_biographies',$_SESSION['UserID'],$conn);
////interests
//$usr_intrst = Query('Interest','user_interests',$_SESSION['UserID'],$conn);
//$usr_clbs = Query('Clubs_Societies','user_interests',$_SESSION['UserID'],$conn);
////achievements
//$ach_nme = Query('Achievement_name','user_achievements',$_SESSION['UserID'],$conn);
//$ach_desc = Query('Achievement_Description','user_achievements',$_SESSION['UserID'],$conn);
//$ach_yr = Query('Year_Obtained','user_achievements',$_SESSION['UserID'],$conn);
////skills
//$usr_skill = Query('Skill','user_skills',$_SESSION['UserID'],$conn);
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

<h2>Academic Info</h2>
<div>
    <p>Institution</p>
    <p><?php echo $inst?></p>
    <p>Qualification Description</p>
    <p><?php echo $qualnme?></p>
    <p>Qualification Field</p>
    <p><?php echo $qualfld?></p>
    <p>Start_Date</p>
    <p><?php echo $acdmic_strtdte?></p>
    <p>Completion_Date</p>
    <p><?php echo $compdte?></p>
    <p>Academic_Average</p>
    <p><?php echo $acdmic_avrg?></p>
    <p>Grade_Scale</p>
    <p><?php echo $grad_scl?></p>
</div>
<form action="../html/academic_info.html">
    <input type="submit" value="Edit Academic Info" />
</form>

<h2>Professional experience</h2>
<div>
    <p>Organisation</p>
    <p><?php echo $org_nme?></p>
    <p>Country</p>
    <p><?php echo $org_cntry?></p>
    <p>Position</p>
    <p><?php echo $org_pos?></p>
    <p>Start_Date</p>
    <p><?php echo $org_strtdte?></p>
    <p>End_Date</p>
    <p><?php echo $org_enddte?></p>
    <p>Type_of_Involvement</p>
    <p><?php echo $org_involvement?></p>

</div>
<form action="../html/professional_experience.html">
    <input type="submit" value="Add XP" />
</form>

<h2>Biography</h2>
<div>
    <p>Your Biography</p>
    <p><?php echo $usr_bio?></p>

</div>
<form action="../html/biography.html">
    <input type="submit" value="Edit Biography" />
</form>

<h2>Interests</h2>
<div>
    <p>Interest</p>
    <p><?php echo $usr_intrst?></p>

    <p>Clubs_Societies</p>
    <p><?php echo $usr_clbs?></p>

</div>
<form action="../html/interests.html">
    <input type="submit" value="Change Interests?" />
</form>

<h2>Skills</h2>
<div>
    <p>Skill</p>
    <p><?php echo $usr_skill?></p>

</div>
<form action="../html/skills.html">
    <input type="submit" value="Add a Super Power" />
</form>

</body>
</html>
