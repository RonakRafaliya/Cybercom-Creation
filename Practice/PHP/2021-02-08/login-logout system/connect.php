<?php

$myslq_host = 'localhost';
$mysql_user = 'root';
$musql_pass = '';

$mysql_db = 'user_info';

$conn = @mysqli_connect($myslq_host, $mysql_user, $musql_pass);

if(!$conn || !@mysqli_select_db($conn,$mysql_db)){
    echo 'Something Went Wrong....';
    die ();
}


?>
