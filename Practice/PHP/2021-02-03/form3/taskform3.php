
<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="form3.js"></script>
    <link rel="stylesheet" type="text/css" href="form3.css">
    
</head>
<body onload="disablebutton()">
	<div class="bg">
		<div class="or">Sign Up</div><br>
		<form action="form3DB.php" method="POST" name="myform" onsubmit="return validation()" onreset="myfun()">
			<label>First Name</label>
            <input type="text" name="fname" id="fname" onchange="validatename(this.id)" placeholder="Enter First Name">
            <span class="span_color" id="span_fname" width></span><br><br>

			<label>Last Name</label>
			<input type="text" name="lname" id="lname" onchange="validatelname(this.id)" placeholder="Enter Last Name">
            <span class="span_color" id="span_lname"></span><br><br>
            
            <label>Date Of Birth</label>
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
            <span class="span_color" id="span_gender"></span><br><br>
            
            <label>Country</label>
			<select name="country" id="country">
				<option value="India">India</option>
				<option value="Canada">Canada</option>
				<option value="Switzerland">Switzerland</option>
			</select><span id="span_country"></span><br><br>

			<label>E-mail</label>
			<input type="email" name="email" placeholder="Enter E-mail ">
			<span class="span_color" id="span_email"></span><br><br>


			<label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Phone Number">
            <span class="span_color" id="span_phone"></span><br><br>


			<label>Password</label>
            <input type="password" name="pass" placeholder="Password">
            <span class="span_color" id="span_pass"></span>
			<br><br>

			<div><label>Confirm Password</label>
                <input type="password" name="cpass" placeholder="Conform Password">
                <span class="span_color" id="span_cpass"></span>
            </div>

			<br>
			<div class="lable_width">
                <input type="checkbox" name="agree" id="terms" onchange="activateButton(this)">I Agree to the Terms of use
                <span id="span_agee"></span>
                <h5>YOU MUST AGREE TERMS AND CONDITION!!</h5>
            </div>	
			<div class="or-btn" style="height: 40px;">
				<input type="submit" name="submit" id="submit" value="submit">
				<input type="reset" name=" reset" value="reset">
			</div>	
		</form>
	</div>
</body>
</html> 