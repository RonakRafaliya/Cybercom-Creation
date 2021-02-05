
<!DOCTYPE html>
<html>
<head>
	<title>TASK-2 USER FORM</title>
	<link rel="stylesheet" type="text/css" href="task.css">
<script type="text/javascript" src="script2.js"></script>
</head>
<body onload="disablebutton()">
<div class="box">
	<div class="inner-box">
		<fieldset>
			<legend align="center">USER FORM</legend>
			<form action="form2DB.php"  name="UserForm" method="post" onsubmit="return validation()">
				<table>
					<tr>
						<td><ul><li><label>Enter Name</label></li></ul>
						</td>
						<td><input type="text" name="name" id="name" pattern="[A-Za-z].{2,}" title="Please write your name more than 2 letter"><br><span id="span_name" class="red"></td>	
					</tr>						
					<tr>
						<td><ul><li><label>Enter Password</label></li></ul>
						</td>
							<td><input type="password" name="password" id="password" pattern="(?=.*[!@#$%^&*()_+]).{6,}" title="Must contain at least one special symbol and more than six characters"><br>
							<span id="span_password" class="red"></span>
						</td>
					</tr>		
					
					<tr>
						<td><ul><li><label>Gender</label></li></ul>
						</td>
						<td>
							<input type="radio" name="gender" value="Male" id="gender">Male
							<input type="radio" name="gender" value="Female" id="gender">Female <br>
							<span id="span_gender" class="red"> </span> 
						</td>
					</tr>

					<tr>
						<td><ul><li><label>Enter Address</label></li></ul>
						</td>
						<td><textarea cols="20" rows="2" name="address" id="address"></textarea><br><span id="span_address" class="red"> </td>
					</tr>

					<tr>
						<td><ul><li><label>D.O.B</label></li></ul>
						</td>
						<td>
							<select name="Month" id="Month">
							
							<option value="Jan">Jan</option>
							<option value="Feb">Feb</option>
							<option value="March">March</option>
							<option value="April">April</option>
						</select>
						<span id="span_Month" class="red"> 
						<select name="Day" id="Day">
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
						<span id="span_Day" class="red"> 
						<select name="Year" id="Year">
							
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
						</select>
						<span id="span_year" class="red"> 
						</td>
					</tr>

					<tr>
						<td><ul><li><label>Select Game</label></li></ul>
						</td>
						<td>
							<input type="checkbox" name="game[]" value="Hockey">Hockey
							<input type="checkbox" name="game[]" value="Football">Football	
							<input type="checkbox" name="game[]" value="Cricket">Cricket
							<input type="checkbox" name="game[]" value="Cricket">VolleyBall<br>
							<span id="span_selectgame" class="red"> </span> 
						</td>
					</tr>

					<tr>
						<td><ul><li><label>Marital Status</label></li></ul>
						</td>
						<td><input type="radio" name="MaritalStatus" id="MaritalStatus" value="Married">Married<input type="radio" id="MaritalStatus"name="MaritalStatus" value="Unmarried">Unmarried</td>
						<span id="span_maritalstatus" class="red"> </span> 
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="checkbox" name="agree" id="terms" onchange="activateButton(this)">I accept this agreement
							<span id="span_agee" class="red"></span>
						</td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" id="submit" value="Submit">&nbsp;<input type="reset" name="reset"></td></td>
					</tr>	

					
				</table>
			</form>
		</fieldset>
	</div>
</div>
</body>
</html>