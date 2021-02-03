
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form 1</title>
    <script src="validatation.js"></script>
    <link rel="stylesheet" href="form1.css">
</head>
<body>
    <form action="form1DB.php" method="POST" name="myform" onsubmit="return validate()" onreset="myfun()">
        <table border="1" cellspacing="0">
            <caption>User form</caption>
            <tr>
                <td><label for="name">Enter Name:</label></td>
                <td class="data">
                    <input type="text" name="name" id="name" onchange="validatename(this.id)">
                    <span class="warn" id="req_name"></span>
                </td>
            </tr>
            <tr>
                <td><label for="password">Enter Password:</label></td>
                <td class="data">
                    <input type="password" name="password" id="password" onchange="validatepassword(this.id)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <span class="warn" id="req_pass"></span>
                </td>
            </tr>
            <tr>
                <td><label for="address">Enter Address:</label></td>
                <td class="data"> 
                    <textarea name="address" id="address" onchange="validateadd(this.id)" cols="20" rows="5"></textarea>
                    <span class="warn" id="req_add"></span>
                </td>
            </tr>
            <tr>
                <td><label for="game">Select Game:</label></td>
                <td class="data">
                    <input type="checkbox" name="game[]" id="game" onchange="validategame(this.id)" value="Hockey"><label>Hockey</label><br>
                    <input type="checkbox" name="game[]" id="game" onchange="validategame(this.id)" value="Football"><label>Football</label><br>                        
                    <input type="checkbox" name="game[]" id="game" onchange="validategame(this.id)" value="Badminton"><label>Badminton</label><br>                        
                    <input type="checkbox" name="game[]" id="game" onchange="validategame(this.id)" value="Cricket"><label>Cricket</label><br>                    
                    <input type="checkbox" name="game[]" id="game" onchange="validategame(this.id)" value="Vollyball"><label>Vollyball</label>
                    <span class="warn" id="req_game"></span>
                </td>
            </tr>
            <tr>
                <td><label for="gender"> Gender:</label></td>
                <td class="data">
                    <input type="radio" name="gender" id="gender" onchange="validategender(this.id)" value="Male">Male 
                    <input type="radio" name="gender" id="gender" onchange="validategender(this.id)"value="Female">Female
                    <span class="warn" id="req_gender"></span>
                </td>
            </tr>
            <tr>
                <td><label for="age">Select Age:</label></td>
                <td class="data">
                    <select name="age">
                        <option value="none" selected disabled hidden>Select</option>
                        <option value="0-20">0-20</option>
                        <option value="21-40">21-40</option>
                        <option value="41-60">41-60 </option>
                    </select>
                    <span class="warn" id="req_age"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="file" id="file" name="file"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="reset" name="reset" value="Reset" >
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr> 
        </table>
    </form>
</body>

</html>
