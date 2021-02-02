<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Task3
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form3.css">
</head>
<body>
	<div class="bg">
		<div class="or">Sign Up</div><br>
		<form action="" method="POST">
			<label>First Name</label>
		    <input type="text" name="fname" id="fname" placeholder="Enter First Name"><span id="span_fname"></span><br><br>

			<label>Last Name</label>
			<input type="text" name="lname" id="lname" placeholder="Enter Last Name"><span id="span_lname"></span><br><br>
            
            <label>Date Of Birth</label>&nbsp;
			<select name="Month" id="Month">
				<option value="none" selected disabled hidden>Month</option>
				<option value="Jan">Jan</option>
				<option value="Feb">Feb</option>
			    <option value="March">March</option>
				<option value="April">April</option>
            </select>
            <span id="span_Month"></span>
                        
            <select name="Day" id="Day">
                <option value="none" selected disabled hidden>Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
			<span id="span_Day" class="red"> </span>
            
            <select name="Year" id="Year">
                <option value="none" selected disabled hidden>Year</option>
				<option value="2021">2021</option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
			</select>
			<span id="span_year" class="red"> </span><br><br>

            <label>Gender </label>
            <input type="radio" name="gen" id="gen" value="male">Male
            <input type="radio" name="gen" id="gen" value="female">Female	
            <span id="span_gender"></span><br><br>
            
            <label>Country</label>
			<select name="country" id="country">
				<option value="India">India</option>
				<option value="Canada">Canada</option>
				<option value="Switzerland">Switzerland</option>
			</select><span id="span_country"></span><br><br>

			<label>E-mail</label>
			<input type="email" name="email" placeholder="Enter E-mail ">
			<span id="span_email"></span><br><br>


			<label>Phone</label>
			<input type="tel" name="phone"><span id="span_phone"></span><br><br>


			<label>Password</label>
			<input type="text" name="pass"><span id="span_pass"></span>
			<br><br>

			<div><label>Confirm Password</label>
                <input type="text" name="cpass">
                <span id="span_cpass"></span>
            </div>

			<br>
			<div class="lable_width">
                <input type="checkbox" name="agree">I Agree to the Terms of use
                <span id="span_agee"></span>
            </div>	
			<div class="or-btn" style="height: 40px;">
				<input type="submit" name="submit" value="submit">
				<input type="reset" name=" reset" value="reset">
			</div>	
		</form>
	</div>
</body>
</html>