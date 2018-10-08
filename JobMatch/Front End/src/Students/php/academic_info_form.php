<!DOCTYPE html>
<html >
<head>
    <title>Job Match - Edit Academic Info</title>
    <link rel="stylesheet" href="../../../assets/tether/tether.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/theme/css/style.css">
    <link rel="stylesheet" href="../../css/things.css">
    <link rel="stylesheet" href="../../../assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<form method="post" action="academic_info.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Academic Infomation</h1>
        <p>What have you been studying?</p>
        <hr>

        <label for="inst"><b>Institution</b></label>
        <input type="text" placeholder="Enter Institution Name" id="inst" name="usr_inst" required>

        <label for="qualname"><b>Qualification Name</b></label>
        <input type="text" placeholder="Enter Qualification Name" id="qualname" name="usr_qualname" required>

        <label for="qualfld"><b>Qualification Field</b></label>
        <input type="text" placeholder="Enter Qualification Field" id="qualfld" name="usr_qualfld" required>

        <label for="strtdte"><b>Start Date</b></label>
        <input type="date" placeholder="Enter Country" id="strtdte" name="usr_strtdte" required>

        <label for="compdte"><b>Completion Date</b></label>
        <input type="date" placeholder="Enter Completion Date" id="compdte" name="usr_compdte" required>

        <label for="acdmic_ave"><b>Latest Year Average</b></label>
        <input type="number" placeholder="Enter Lastest Year Average" id="acdmic_ave" name="usr_acdmic_ave" required>

        <label for="grd_scle"><b>Grade Scale</b></label>
        <input type="text" placeholder="Enter Grade Scale" id="grd_scle" name="usr_grd_scle" required>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Update Academic Info</button>
        </div>
    </div>
</form>

<script src="../../../assets/web/assets/jquery/jquery.min.js"></script>
<script src="../../../assets/popper/popper.min.js"></script>
<script src="../../../assets/tether/tether.min.js"></script>
<script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../assets/smoothscroll/smooth-scroll.js"></script>
<script src="../../../assets/theme/js/script.js"></script>


</body>
</html>