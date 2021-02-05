<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

if(mysqli_select_db($conn,'form_two'))
{
	//echo "Database Selected!";
}
else{
	//echo "Database Not Selected!";
}

if(isset($_POST['agree']))
{	
	if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['MaritalStatus']) &&isset($_POST['Day']) && isset($_POST['Month']) && isset($_POST['Year']))
	{
		if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['game']) && !empty($_POST['gender']) && !empty($_POST['MaritalStatus']) && !empty($_POST['Day']) && !empty($_POST['Month']) && !empty($_POST['Year']))
		{
			$name=$_POST['name'];
			$password=$_POST['password'];
			$address=$_POST['address'];
			$Day=$_POST['Day'];
			$Month=$_POST['Month'];
			$Year=$_POST['Year'];
			$MaritalStatus=$_POST['MaritalStatus'];
			$game=$_POST['game'];
			$gender=$_POST['gender'];
				
			echo "<strong>Welcome,</strong> ".$name."!!!!<br>";
			echo "<strong>password:</strong> ".$password."<br>";
			echo "<strong>address:</strong> ".$address."<br>";
			echo "<strong>gender:</strong> ".$gender."<br>";
			echo "<strong>Date of Birth:</strong> ".$Day." ".$Month." ".$Year."<br>";
			echo "<strong>Select Game :</strong> ";
            $array=implode(',',$game);
            echo $array.'<br>';
			echo "<strong>Marital Status :</strong> ".$MaritalStatus.'<br>';

			$qry="INSERT into user_form(first_name,password,gender,address,dob,game,status) VALUES ('$name','$password','$gender','$address','$Day.$Month.$Year','$array','$MaritalStatus')";
            echo $qry.'<br>';
            $rs = mysqli_query($conn,$qry);
			if($rs)
			{
				echo "Insert Success!";
			}
			else
			{
				echo "Insert Error!";
			}
		}
		else
		{
			$name="";
			$password="";
			$address="";
			$Day="";
			$Month="";
			$Year="";
			$MaritalStatus="";
			$game="";
			$gender="";
		}
	}
	else
	{
		$name="";
		$password="";
		$address="";
		$Day="";
		$Month="";
		$Year="";
		$MaritalStatus="";
		$game="";
		$gender="";
	}
}
else
{
    echo "please check terms and condition";
	$name="";
	$password="";
	$address="";
	$Day="";
	$Month="";
	$Year="";
	$MaritalStatus="";
	$game="";
	$gender="";
}
?>