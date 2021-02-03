<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //$dbname="form_one";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        echo "Connected successfully <br>";
    }
    //echo mysqli_select_db($conn,'form_one');
    if(!mysqli_select_db($conn,'form_three'))
    {
        echo "Database Not Selected!";
    }
    else
    {
        echo "Database  Selected!<br>";
    }

    if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['Month']) && isset($_POST['Day']) && isset($_POST['Year']) && isset($_POST['gen']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass']) && isset($_POST['cpass']))
    {
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['Month']) && !empty($_POST['Day']) && !empty($_POST['Year']) && !empty($_POST['gen']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['pass']) && !empty($_POST['cpass']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $month=$_POST['Month'];
            $day=$_POST['Day'];
            $year=$_POST['Year'];
            $gender=$_POST['gen'];
            $contry=$_POST['country'];
            $email=$_POST['email'];
            $phon=$_POST['phone'];
            $password=$_POST['pass'];
                
            echo "<strong>Welcome,</strong> ".$fname." !!!!<br>";
            echo "<strong>Last Name:</strong> ".$lname." <br>";
            echo "<strong>Date of Birth:</strong> $day $month $year <br>";
            echo "<strong>gender: </strong> ".$gender."<br>";
            echo "<strong>Country: </strong> ".$contry."<br>";
            echo "<strong>Email id: </strong> ".$email."<br>";
            echo "<strong>Phone Number: </strong> ".$phon."<br>";
            echo "<strong>password:</strong> ".MD5($password)."<br>";
            
            
            $sql= "INSERT into employee (Firstname,Lastname,Gender,Email,Phonenu,Password) VALUES ('$fname','$lname','$gender','$email','$phon',MD5('$password'))";
            //echo $sql;
            
            if(!mysqli_query($conn,$sql))
            {
                echo "Insert Error In data Entry!";
            }
            else
            {
                echo "<strong>Data Insert Sucessfully..!!!</strong>";
            }
        }
        else
        {
            $fname="";
            $lname="";
            $month="";
            $day="";
            $year="";
            $gender="";
            $contry="";
            $email="";
            $phon="";
            $password="";
        }
    }
    else
    {
        $fname="";
        $lname="";
        $month="";
        $day="";
        $year="";
        $gender="";
        $contry="";
        $email="";
        $phon="";
        $password="";
    }
    header("refresh:4; url=taskform3.php");
?>
