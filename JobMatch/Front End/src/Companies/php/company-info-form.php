<?php
    include_once 'connection.php';
    include_once 'company_info_data.php'
?>

<!DOCTYPE html>
<html >
<head>
    <title>Job Match - Register Company</title>
    <link rel="stylesheet" href="../../../asets/tether/tether.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../asets/theme/css/style.css">
    <link rel="stylesheet" href="../../css/things.css">
    <link rel="stylesheet" href="../../../asets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<form method="post" action="company-info.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Company Info</h1>
        <p>Fill in for Company Details.</p>
        <hr>

        <label for="comp_name"><b>Company Name</b></label>
        <input type="text" value = '<?php echo $name?>'  id = "comp_name" name="comp_name" required>

        <label for="comp_phone"><b>Company Phone Number</b></label>
        <input type="text" value = '<?php echo $num?>' id="comp_phone" name="comp_phone" required>

        <label for="comp_cntry"><b>Company Country</b></label>
        <select id="comp_cntry" name="comp_cntry" required>
            <option value="Ghana">Ghana</option>
            <option value="Ethopia">Ethopia</option>
            <option value="Ivory Coast">Ivory Coast</option>
            <option value="DRC">DRC</option>
            <option value="Zimbabwe">Zimbabwe</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Mozambique">Mozambique</option>
            <option value="South Afrika">South Afrika</option>
            <option value="Other">Other</option>
        </select>

        <label for="comp_prvnce"><b>Company Province</b></label>
        <input type="text" placeholder="Enter Province" id="comp_prvnce" name="comp_prvnce" required>

        <label for="comp_city"><b>Company City</b></label>
        <input type="text" value = '<?php echo $city?>' id="comp_city" name="comp_city" required>

        <label for="comp_wbste"><b>Company Website</b></label>
        <input type="text" value = '<?php echo $website?>' id="comp_wbste" name="comp_wbste" required>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Update Company Info.</button>
        </div>
    </div>
</form>

<script src="../../../asets/web/assets/jquery/jquery.min.js"></script>
<script src="../../../asets/popper/popper.min.js"></script>
<script src="../../../asets/tether/tether.min.js"></script>
<script src="../../../asets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../asets/smoothscroll/smooth-scroll.js"></script>
<script src="../../../asets/theme/js/script.js"></script>


</body>
</html>