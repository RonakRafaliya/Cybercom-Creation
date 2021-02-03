function disablebutton()
{
    document.getElementById('submit').style.visibility = "hidden";

    // document.getElementById('submit').disabled = true;
    // document.getElementById("submit").style.backgroundColor = 'green';
}


function validation()
{
	var username=document.getElementById('fname').value;
	if (username=="") 
	{
		document.getElementById('span_fname').innerHTML= "* Please fill this field";
		return false;
	}
	if ((username.length <=2 )||(username.length>20))
	{
		document.getElementById('span_fname').innerHTML= "* Username length must be between 2 to 20";
		return false;

	}
	if (!isNaN(username))
	{
	 	document.getElementById('span_fname').innerHTML ="* only characters are allowed";
        return false;
	}

	var lusername=document.getElementById('lname').value;
	if (lusername=="") 
	{
		document.getElementById('span_lname').innerHTML= "* Please fill this field";
		return false;
	}
	if ((lusername.length <=2 )||(lusername.length >20))
	{
		document.getElementById('span_lname').innerHTML= "* Username length must be between 2 to 20";
		return false;

	}
	if (!isNaN(lusername))
	{
	 	document.getElementById('span_lname').innerHTML ="* only characters are allowed";
        return false;
	}

    // var month=document.getElementById('Month').value;
    // var day=document.getElementById('Day').value;
    // var year=document.getElementById('Year').value;
    // if(month == "none")
    // {
    // 	document.getElementById('span_bod').innerHTML = " * select a month";
    // 	return false;
    // }

	// if(day == "none")
	// {
    // 	document.getElementById('span_bod').innerHTML =" * select a day";
    // 	return false;
    // }
	// if(year == "none")
	// {
    // 	document.getElementById('span_bod').innerHTML =" * select a year";
    // 	return false;
    // }

    var gender=document.myform.gen.value;
    if(gender=="")
    {
        document.getElementById('span_gender').innerHTML ="* Please Check gender";
        return false;
    }

    var con=document.getElementById('country').value;
    if (con=="none") 
    {
    	document.getElementById('span_country').innerHTML = "* Please enter country";
    	return false;
    }

    var x=document.myform.email.value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
    {  
        document.getElementById('span_email').innerHTML= "* Enter valid email address";
        return false;  
    }  

    var phone =document.myform.phone.value;
    if (phone=="")
    {
        document.getElementById('span_phone').innerHTML ="* Enter phone Number";
        return false;
    }
    if (isNaN(phone)) 
    {
        document.getElementById('span_phone').innerHTML ="* characters are not allowed";
        return false;
    }
    var password=document.myform.pass.value;
    if (password=="") 
    {
        document.getElementById('span_pass').innerHTML = "* Enter Password";
        return false;
    }
    if ((password.length <=2 )||(password.length>10))
    {
        document.getElementById('span_pass').innerHTML="* Password length between 2 to 10 number ";
        return false;
    }
    // if (isNaN(password)) 
    // {
    //     document.getElementById('span_pass').innerHTML ="<b>Enter Number </b>* characters are not allowed*";
    //     return false;
    // }

    var confirm_pass=document.myform.cpass.value;
    if (confirm_pass=="") 
    {
        document.getElementById('span_cpass').innerHTML = "* Re-enter Same Password**";
        return false;
    }
    // if (isNaN(confirm_pass)) 
    // {
    //     document.getElementById('span_cpass').innerHTML =" <b>Enter Number </b>* characters are not allowed*";
    //     return false;
    // }
    if (password==confirm_pass) 
    {
        return true;
    }
    else
    {
        alert("password and confirm password must be same");
        return false;
    }    
}
function myfun(){
    window.location.href ="taskform3.php";
    alert("form is reset...");
}

function activateButton(element) 
{
    if(element.checked) 
    {
        document.getElementById('submit').style.visibility = "";
        // document.getElementById("submit").disabled = false;
        // document.getElementById("submit").style.backgroundColor = 'blue';
    }
    else  
    {
        document.getElementById('submit').style.visibility = "hidden";
        // document.getElementById("submit").disabled = true;
        // document.getElementById("submit").style.backgroundColor = 'green';
    }
}
