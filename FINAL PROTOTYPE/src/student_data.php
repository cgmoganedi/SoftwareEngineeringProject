<?php
//get page data:
include_once 'connection.php';
include_once 'things.php';
session_start();
//personal info
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
//accedemic info
$inst = Query('Institution','academic_info',$_SESSION['UserID'],$conn);
$qualnme = Query('Qualification_Description','academic_info',$_SESSION['UserID'],$conn);
$qualfld = Query('Qualification_Field','academic_info',$_SESSION['UserID'],$conn);
$acdmic_strtdte = Query('Start_Date','academic_info',$_SESSION['UserID'],$conn);
$compdte = Query('Completion_Date','academic_info',$_SESSION['UserID'],$conn);
$acdmic_avrg = Query('Academic_Average','academic_info',$_SESSION['UserID'],$conn);
$grad_scl = Query('Grade_Scale','academic_info',$_SESSION['UserID'],$conn);
//experience
$org_nme = Query('Organisation','professional_experience',$_SESSION['UserID'],$conn);
$org_cntry = Query('Country','professional_experience',$_SESSION['UserID'],$conn);
$org_pos = Query('Position','professional_experience',$_SESSION['UserID'],$conn);
$org_strtdte = Query('Start_Date','professional_experience',$_SESSION['UserID'],$conn);
$org_enddte = Query('End_Date','professional_experience',$_SESSION['UserID'],$conn);
$org_involvement = Query('Type_of_Involvement','professional_experience',$_SESSION['UserID'],$conn);
//biography
$usr_bio = Query('User_Bio','user_biographies',$_SESSION['UserID'],$conn);
//interests
$usr_intrst = Query('Interest','user_interests',$_SESSION['UserID'],$conn);
$usr_clbs = Query('Club_Societies','user_interests',$_SESSION['UserID'],$conn);
//achievements
$ach_nme = Query('Achievement_name','user_achievements',$_SESSION['UserID'],$conn);
$ach_desc = Query('Achievement_Description','user_achievements',$_SESSION['UserID'],$conn);
$ach_yr = Query('Year_Obtained','user_achievements',$_SESSION['UserID'],$conn);
//skills
$usr_skill = Query('Skill','user_skills',$_SESSION['UserID'],$conn);