<!DOCTYPE html>
<html >
<head>
    <title>Job Match - Edit Personal Info</title>
    <link rel="stylesheet" href="../../../asets/tether/tether.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../asets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../asets/theme/css/style.css">
    <link rel="stylesheet" href="../../css/things.css">
    <link rel="stylesheet" href="../../../asets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

<form method="post" action="personal.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Personal Infomation</h1>
        <p>Tell is a little bit about yourself.</p>
        <hr>
	
		<label for="title"><b>Title</b></label>
        <select id="title" name="usr_ttle" required>
            <option value="Ms">Ms</option>
            <option value="Mrs">Mrs</option>
            <option value="Mr">Mr</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
            <option value=""></option>
        </select>
		
		<label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" id="name" name="usr_nme" required>
        
		<label for="surname"><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" id="surname" name="usr_srnme" required>

        <label for="country"><b>Country</b></label>
        <select id="country" name="usr_cntry" required>
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

        <label for="dob"><b>Date of Birth</b></label>
        <input type="date" placeholder="Enter Date of Birth" id="dob" name="usr_dob" required>

        <label for="id_num"><b>Identity Number</b></label>
        <input type="text" placeholder="Enter Id number" id="id_num" name="usr_id" required>

        <label for="marital_sta"><b>Marital Status</b></label>
        <select id="marital_sta" name="usr_ms" required>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Dating">Dating</option>
            <option value="It is complicated">It's complicated</option>
        </select>

        <label for="gender"><b>Gender</b></label>
        <select id="gender" name="usr_gndr" required>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Do not want to say">Don't want to say</option>
        </select>

        <label for="race"><b>Race</b></label>
        <select id="race" name="usr_race" required>
            <option value="Black">Black</option>
            <option value="Indian">Indian</option>
            <option value="Coloured">Coloured</option>
            <option value="Asian">Asian</option>
            <option value="White">White</option>
        </select>

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City" id="city" name="usr_city" required>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Update Personal Info</button>
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