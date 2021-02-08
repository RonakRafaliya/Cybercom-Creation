<?php error_reporting(E_ALL ^ E_NOTICE);
require 'core.php';
require 'connect.php'; 

if(!loggedin()){
    if(isset($_POST['username']) && isset($_POST['password']) &&isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = MD5($password);
        $password_again = $_POST['password_again'];
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];

        if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
            if($password != $password_again){
                echo 'Password don\'t match...';
            }
            else{

                $query = "SELECT `username` FROM `employee` WHERE `username` = '$username'";
                $query_run = @mysqli_query($conn,$query);

                if(@mysqli_num_rows($query_run) == 1){
                    echo 'The username '.$username.' already exists <br><br>';
                    echo 'Login please..';
                    header('refresh:3; url=index.php');
                }
                else{
                    
                    $query = "INSERT  into `employee` VALUES ('','".mysqli_real_escape_string($conn,$username)."','".mysqli_real_escape_string($conn,$password_hash)."','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$surname)."')";
                    if($query_run = mysqli_query($conn, $query)){
                        echo 'registerd successfully.....';
                        header('refresh:3; url=index.php');
                        //header('Location: register_success.php');
                    }else{
                        echo 'We couldn\'t register at this time. Try again later.';
                    }

                }

            }
        }
        else{
            echo 'All field required...';
        }
    }
 ?>   
<h2>Register form.</h2>

<form action="register.php" method="POST">
    Username : <br><input type="text" name="username" value="<?php echo $username;?>"><br><br>
    Password : <br><input type="password" name="password"><br><br>
    Password again : <br><input type="password" name="password_again"><br><br>
    Firstname : <br><input type="text" name="firstname" value="<?php echo $firstname;?>"><br><br>
    Surname : <br><input type="text" name="surname" value="<?php echo $surname;?>"><br><br>
    <input type="submit" value="Register"><br><br>
</form>
<?php
}elseif (loggedin()){
    echo 'You\'re already registered please  logged in..';
}

?>