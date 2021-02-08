<?php

require 'connect.php';
session_start();

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = MD5($password);

    // echo $username.'<br>';
    // echo $password_hash.'<br>';

    if (!empty($username) && !empty($password)){
        $query = "SELECT `id` FROM `employee` WHERE `username`='".mysqli_real_escape_string($conn,$username)."' AND `password`='".mysqli_real_escape_string($conn,$password_hash)."'";
        if($query_run = @mysqli_query($conn,$query)){
            $query_num_rows = mysqli_num_rows($query_run);
            //echo $query_num_rows;
            if($query_num_rows == 0){
                echo 'Invalid details..';
            }
            elseif($query_num_rows == 1){
                while($row=mysqli_fetch_assoc($query_run)){
                    $user_id=$row['id'];
                    $_SESSION['user_id']=$user_id;
                    $_SESSION['username']=$username;
                    $_SESSION['password']=$password_hash;
                    // if($_POST['checkbox'] == true){
                    //     $cookiename ='username';
                    //     $cookiepassword ='password';
                    //     setcookie($cookiename,$username,time()+(60),"/");
                    //     setcookie($cookiepassword,$password_hash,time()+(60),"/");
                    //     echo 'set.';    
                    // }
                    // echo "<br>".$_SESSION['username'];
                    // echo "<br>".$user_id."<br><br>";
                    header('Location: index.php');
                }
            }
        }
        // if(isset($_COOKIE[$cookiename])){
        //     echo 'set.';
        // }
        // else{
        //     echo 'cookie expired';
        //     //header("Location: index.php");
        // }
    }else{
        echo 'Please Enter username\password';
    }
}



?>

<form action="<?php echo $current_file; ?>" method="POST">
    Username : <input type="text" name="username" value="<?php echo $username;?>"><br><br>
    Password : <input type="password" name="password" value="<?php echo $password;?>"><br><br>
    <!-- <input type="checkbox" name="checkbox" value="1"> Remember Me<br><br> -->
    <input type="submit" value="LOG IN"><br><br>
    <a href="register.php">Register Now</a>
</form>