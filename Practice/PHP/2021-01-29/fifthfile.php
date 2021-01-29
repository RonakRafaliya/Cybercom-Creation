<?php error_reporting(E_ALL ^ E_NOTICE);

    // htmlentities() function convertd characters to html entities.
    // html_entity_decode() To convert HTML entities back to characters use this function.

    // SESSIONS.....
    
    // session store on the server.
    // session_start(); //start session.
    // $_SESSION['username'] = 'ronak'; //to store username into session. 
    //unset(here session value) use for unset perticular session value.
    //destory(); to destory all session.


    //COOKIES.......
    
    //used to identify the user.
    //setcookie(name, value, expire);
    // setcookie('username','ronak',time()+20);
    // setcookie('username','ronak',time()-20); //unset cookie..


    //FILE HANDLING...

    // w - writing file
    // r - reading file
    // a - append file (add file)
    
    // $handle = fopen('file.php','w'); //create file and with this
    // fwrite($handle,'Ronak'."\n");  //write content in a file.
    // fwrite($handle,'Rafaliya');
    // fclose($handle); //close the file
    
    // add value with the help of form.
    // reading file method.
    // if(isset($_POST['name'])){
    //     $name = $_POST['name'];
    //     if(!empty($name)){
    //         $handle = fopen('file.php','a'); //append data in every time when you enter in the form
    //         fwrite($handle,$name."\n");
    //         fclose($handle);

    //         echo 'Current name in file is :-';
    //         $count=1;
    //         $reading=file('file.php');
    //         $count_read = count($reading);
    //         echo $count_read;
    //         foreach($reading as $fname){
    //             echo trim($fname);
    //             if($count < $count_read){
    //                 echo ', ';
    //             }
    //             $count++;
    //         }
    //     }
    //     else{
    //         echo 'Please type any name';
    //     }
    // }


    // APPEND data end of the file. refer line no.39

    // Explode function is used to convert string into array with the perticular position.
    // Explode(where to split,string,limit);

    //Implode function returns a string from element of an array.


    
    
    // FILE HANDLING //
    // $dir = 'files';
    // if($handle = opendir($dir.'/')){     //opendir is used for open the directory.
    //     echo 'Looking inside \''.$dir.'\':<br>';
    // }

    // while($file=readdir($handle)){
    //     if($file != '.' && $file !='..'){
            
    //         if(readdir($handle) == 'first.txt'){
    //             $filename='first.txt';
    //             unlink($filename);
    //             echo 'file deleted...';
    //         }
    //         else{
    //             echo '<a href="'.$dir.'/'.$file.'">'.$file.'<br>';
    //         }
    //     } 
    // }


    // MD 5 FUNCTION  Used to calculates the MD5 hash of a string.
    // delete file with unlink(file name) function
    // rename file name with rename(old name,new namw);


    //file uoloading in php.

    $name = $_FILES['file']['name'];
    $extension = strtolower(substr($name, strpos($name,'.')+1));

    $size = $_FILES['file']['size'];
    $max_size = 2097152;

    $type = $_FILES['file']['type'];

    // $tmp_name = $_FILES['file']['tmp_name']; 

    //$error = $_FILES['file']['error'];
    
    
    // if(isset($name)){
    //     if(!empty($name)){
    //         if(($extension == 'jpg' || $extension == 'jpeg') && ($type='image/jpeg' || $type= 'image/jpg' )&& $size < $max_size){
    //             $location = 'files/';
    //             if(move_uploaded_file($tmp_name, $location.$name)){  //move_uploaded_file(from , to)
    //                 echo 'File uploaded...';
    //             }else{
    //                 echo 'file not uploaded...'
    //             }
    //         }else{
    //             echo 'File must be jpg/jpe and must be 2MB or less..';
    //         }
    //     }
    //     else{
    //         echo 'Please chooes file.';
    //     }
    // }

?>
<!-- 
<hr>
<form action="fifthfile.php" method="POST">
    <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form> -->

<form action="fifthfile.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <input type="submit" value="submit">
</form>