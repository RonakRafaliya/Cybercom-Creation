<?php
    //word censoring //Word censoring is hiding unacceptable words from the audience.
    // $find=array('Ronak','Ravi','Aryan');
    // $replace=array('R***K','R**I','A***N');
    
    // if (isset($_POST['userinput']) && !empty($_POST['userinput']) && !empty($_POST['find']) && !empty($_POST['replace'])){
    //     $userinput = $_POST['userinput'];
    //     $find = $_POST['find'];
    //     $replace = $_POST['replace'];
    //     echo nl2br("Old String is $userinput \r\n");
    //     $new_string = str_ireplace($find,$replace,$userinput);  //_ireplace is not a cas-sensitive. where _replace is a case-sensitive.
    //     echo nl2br("The replace string is $new_string \r\n");
    // }

    // $of=0;

    // if (isset($_POST['userinput']) && isset($_POST['find']) && isset($_POST['replace'])){
    //     $userinput = $_POST['userinput'];
    //     $find = $_POST['find'];
    //     $findlength = strlen($find);
    //     $replace = $_POST['replace'];

    //     while($string_position = strpos($userinput,$find,$of)){
    //         // echo $string_position.'<br>';
    //         $of = $string_position + $findlength;
    //         // echo $of.'<br>';
    //         $userinput = substr_replace($userinput,$replace,$string_position,$findlength);
    //         // echo $userinput.'<br>';
    //     }
    //     echo $userinput.'<br>';
    // }


    //TIMESTAMP......

    // echo time(); //print current time.
    
    // $time = time();
    // $time_now = date('d.M.Y @ h:i:s',$time);  //date function date(formate,timestamp)
    // $time_modified = date('d.M.Y @ h:i:s',$time-60); //modified like this.
    // $time_modified = date('d.M.Y @ h:i:s',strtotime('+1 year')); //its a string to time convert.
   
    // echo "the time now is $time_now <br> the modified time is $time_modified";

    //GENERATE RANDOM NUMBER.......... 
    //rand(lower.upper) function is used for generate random number. argu as a limit

    // $rand=rand();
    // $max=getrandmax(); //spcify the mximum int number.

    // echo $rand.'/'.$max;

    // if(isset($_POST['roll'])){
    //     $rand=rand(1,6);
    //     echo "Your number is $rand";

    // }


    //server script  name....

    // include 'include.php';
    // // $script = $_SERVER['SCRIPT_NAME']; //find the url of server.
    // // echo $script;
    // if (isset($_POST['submit'])){
    //     echo 'Process 1';
    // }


    //SERVER host name.......

    // require 'index.php'; 
    // echo '<img src="'.$images.'header.gif "/>';

    //HEADER TO FORCE PAGE REDIRECT.....

    // $redirect_page = 'http://google.com';
    // $redirect = true;

    // if($redirect==true){
    //     header('Location:'.$redirect_page); //redirect to the perticular page.
    // }

    // ob_start() and ob_end_clean() function used to create an output buffer.
    // ob_start(); //used at the sarrt of php code. //storing o/p in the internal buffer
    // ob_end_flush()/clean(); //used at the end of php code. /flush this buffer.


    //getting visitors IP address.


    // echo "<pre>"; //print server info.
    // print_r($_SERVER);
    
    $ip = $_SERVER['REMOTE_ADDR']; //find client ip address.
    $ip_block = array('::1','127.0.0.1');
    echo $ip.'<br>';

    foreach ($ip_block as $i){
        //echo $i.'<br>';
        if ($i == $ip){
            die("Ip is Dangerious");
        }
    }






?>


<!-- <hr>
<form action="fourthfile.php" method="POST">
    <textarea name="userinput" row="6" cols="30"></textarea><br><br>
    Search for: <br>
    <input type="text" name="find"><br>
    Replace with: <br>
    <input type="text" name="replace"> <br><br>
    <input type="submit" value="Submit">
</form> -->

<!-- Form for dice -->

<!-- <hr>
<form action="fourthfile.php" method="POST">
        <input type="submit" name="roll" value="Roll dice">
</form> -->