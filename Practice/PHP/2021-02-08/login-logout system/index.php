<?php

require 'connect.php';
require 'core.php';

if(loggedin()){
    echo 'You\'re logged in '.$_SESSION['username'].'<br><br><a href="logout.php">Log out</a> ';
}else{
    include 'login.php';
}






?>
