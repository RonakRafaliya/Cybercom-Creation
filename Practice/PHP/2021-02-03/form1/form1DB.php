<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //$dbname="form_one";

    // Create connection
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
    if(!mysqli_select_db($conn,'form_one'))
    {
        echo "Database Not Selected!";
    }
    else
    {
        echo "Database  Selected!<br>";
    }

    if( isset($_POST['name']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['file']))
    {
        if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['age']) && !empty($_POST['game']) && !empty($_POST['gender']) && !empty($_POST['file']))
        {
            $name=$_POST['name'];
            $password=$_POST['password'];
            $address=$_POST['address'];
            $age=$_POST['age'];
            $game=$_POST['game'];
            $gender=$_POST['gender'];
            $file=$_POST['file'];
                
            echo "<strong>Welcome,</strong> ".$name." !!!!<br>";
            echo "<strong>password:</strong> ".$password."<br>";
            echo "<strong>address:</strong> ".$address."<br>";
            echo "<strong>age:</strong> ".$age."<br>";
            echo "<strong>gender: </strong> ".$gender."<br>";
            echo "<strong>Select Game :</strong> ";
            $array=implode(',',$game);
            echo $array.'<br>';
            
            $sql= "INSERT into student (name,password,address,games,gender,age) VALUES ('$name',MD5('$password'),'$address','$array','$gender','$age')";
            //echo $sql;
            
            if(!mysqli_query($conn,$sql))
            {
                echo "Insert Error!";
            }
            else
            {
                echo "Insert Sucessful!";
            }
        }
        else
        {
            $name="";
            $password="";
            $address="";
            $age="";
            $game="";
            $gender="";
            $file="";
        }
    }
    else
    {
        $name="";
        $password="";
        $address="";
        $age="";
        $game="";
        $gender="";
        $file="";
    }
    header("refresh:5; url=taskform1.php");
?>
