<?php

// include 'include.php';
// if (isset($_POST['submit'])){
//     echo 'Process 2';
// }

// $host = $_SERVER['HTTP_HOST'];
// $images = $host.'/images';

// session code refer (fifthfile.php.)
session_start();

// if(isset($_SESSION['username'])){
//     echo 'Welcome '.$_SESSION['username'];
// }else{
//     echo 'please log in..';
// }


//cookies code
echo $_COOKIE['username'];



?>