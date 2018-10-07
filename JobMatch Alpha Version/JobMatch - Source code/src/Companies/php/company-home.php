<?php
//get page data:
include_once 'connection.php';
include_once 'things.php';
session_start();
//company info
$name = Query('Company_Name','company_info',$_SESSION['UserID'],$conn);
$email = Query('Company_Email','company_info',$_SESSION['UserID'],$conn);
$num = Query('Company_Number','company_info',$_SESSION['UserID'],$conn);
$province = Query('Company_Province','company_info',$_SESSION['UserID'],$conn);
$country = Query('Company_Country','company_info',$_SESSION['UserID'],$conn);
$city = Query('Company_City','company_info',$_SESSION['UserID'],$conn);
$website = Query('Company_Website','company_info',$_SESSION['UserID'],$conn);
//job postings
$job_ttle = Query('Job_Title','job_postings',$_SESSION['UserID'],$conn);
$job_desc = Query('Job_Description','job_postings',$_SESSION['UserID'],$conn);


?>

<!DOCTYPE html>
<html>
<body>

<h1>Welcome, <?php echo $name;?></h1>

<h2>Company Info</h2>

<div>
    <p>Company_Name</p>
    <p><?php echo $name?></p>

    <p>Company_Email</p>
    <p><?php echo $email?></p>

    <p>Company_Number</p>
    <p><?php echo $num?></p>

    <p>Company_Province</p>
    <p><?php echo $province?></p>

    <p>Company_Country</p>
    <p><?php echo $country?></p>

    <p>Company_City</p>
    <p><?php echo $city?></p>

    <p>Company_Website</p>
    <p><?php echo $website?></p>
</div>
<form action="../html/company-info.html">
    <input type="submit" value="Edit Company Info" />
</form>

<h2>Posted Jobs</h2>
<div>
    <p>Job_Title</p>
    <p><?php echo $job_ttle?></p>

    <p>Job_Description</p>
    <p><?php echo $job_desc?></p>


</div>
<form action="../html/post_job.html">
    <input type="submit" value="Post a new job" />
</form>


</body>
</html>
