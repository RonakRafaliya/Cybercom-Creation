<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Info Page</title>
    <link href="form2.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    
</head>
<body>
    <form action="info.php" method="GET">
        <div class="heading">
            <b>Personal information</b><br>
        </div>
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="finame" size="50" required><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="laname" size="50"><br>

        <label for="Dob">Date Of Birth:</label>
        <select style="margin-right: 10px;  width: 104px;" required>
            <option value="none" selected disabled hidden>Month</option>
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="mar">March</option>
        </select>
        <select style="margin-right: 10px; width: 104px;" required>
            <option value="none" selected disabled hidden>Day</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
        </select>
        <select style="width: 104px;" required>
            <option value="none" selected disabled hidden>Years</option>
            <option value="nine">2019</option>
            <option value="ten">2020</option>
            <option value="tone">2021</option>
        </select>
        <i class="fa fa-question-circle" aria-hidden="true"></i><br>

        <label for="gender">Gender:</label>
        <select style="width: 342px;" >
            <option value="none" selected disabled hidden>Chooes a Gender</option>
            <option value="male">Male</option>
            <option value="femlae">Female</option>
            <option value="oth">Other</option>
        </select>
        <i class="fa fa-question-circle" aria-hidden="true"></i><br>

        <div class="heading">
            <b>Account information</b><br>
        </div>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="emai" size="50" required><br>
        <h6>(Your email address will be your username)</h6>
        <label for="retype">Re-type Email:</label>
        <input type="email" id="reemail" class="reemai" size="50" required>

        <label for="pass">Password:</label>
        <input type="password" id="pass" class="passw" size="50" required>
        <h6>(min 8 characters, 1 number, case-sensitive)</h6>
        
        <label for="repass" >Re-type Password:</label>
        <input type="password" id="repass" class="repassw" size="50" required> <br>

        <label for="que">Security Question:</label>
        <select style="width: 342px;">
            <option value="none" selected disabled hidden>Choose security option</option>
            <option value="que1">Your pet name.</option>
            <option value="que2">Your favourite place to visit.</option>
        </select>
        <i class="fa fa-question-circle" aria-hidden="true"></i><br>

        <label for="ans">Security Answer:</label>
        <input type="text" id="ans" class="answ" size="50">
        <h6>(Not case-sensitive)</h6><br>

        <div class="heading">
            <b>Contact information</b><br>
        </div>

        <label for="address">Address:</label>
        <input type="text" id="address" class="add" size="50"><br>

        <label for="city">City:</label>
        <input type="text" id="city" class="city" size="50"><br>

        <label for="state">State:</label>
        <select style="width: 342px;">
            <option value="none" selected disabled hidden>Chooes a state</option>
            <option value="guj">Gujarat</option>
            <option value="pan">Panjab</option>
            <option value="hari">Hariyana</option>
        </select>
        
        <label for="zip">Zip code:</label>
        <input type="text" id="zip" class="zipc" maxlength="4" size="4">
        <input placeholder="Optional" maxlength="7" size="7"><br>

        <label for="phon">Phone:</label>
        <input type="number" id="phon" name="num" required>
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <select>
            <option value="mobile" selected>Mobile</option>
            <option value="phon">Phone</option>
        </select><br>
        <h6>No Spaces or dashes</h6><br>

        <input type="submit" id="submit" class="sub" name="btn_sb" value="Submit">
        <input type="reset" id="reset" class="res" value="Reset">
    </form>
</body>
</html>