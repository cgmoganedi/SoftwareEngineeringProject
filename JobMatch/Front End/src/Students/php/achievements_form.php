<!DOCTYPE html>
<html >
<head>
    <title>Job Match - Achievements and Highlights</title>
    <link rel="stylesheet" href="../../../assets/tether/tether.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/theme/css/style.css">
    <link rel="stylesheet" href="../../css/things.css">
    <link rel="stylesheet" href="../../../assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<form method="post" action="achievements.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Achievements</h1>
        <p>What are your highlights?</p>
        <hr>

        <label for="achievement"><b>Achievement</b></label>
        <input type="text" placeholder="What was your achievement" id="achievement" name="achievement" required>

        <label for="achievement_desc"><b>Achievement Description</b></label>
        <input type="text" placeholder="What made it so special?" id="achievement_desc" name="achievement_desc" required>

        <label for="achievement_yr"><b>Year Obtained</b></label>
        <input type="number" placeholder="When was this special time?" id="achievement_yr" name="achievement_yr" required>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Update Achievements</button>
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