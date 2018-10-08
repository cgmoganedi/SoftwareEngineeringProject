<?php
//get page data:
include_once 'connection.php';
include_once 'things.php';
session_start();
//company info
$name = Query('Name','companies',$_SESSION['UserID'],$conn);
$email = Query('Company_Email','company_info',$_SESSION['UserID'],$conn);
$num = Query('Company_Number','company_info',$_SESSION['UserID'],$conn);
$province = Query('Company_Province','company_info',$_SESSION['UserID'],$conn);
$country = Query('Company_Country','company_info',$_SESSION['UserID'],$conn);
$city = Query('Company_City','company_info',$_SESSION['UserID'],$conn);
$website = Query('Company_Website','company_info',$_SESSION['UserID'],$conn);
//job postings
$job_ttle = Query('Job_Title','job_postings',$_SESSION['UserID'],$conn);
$job_desc = Query('Job_Description','job_postings',$_SESSION['UserID'],$conn);

