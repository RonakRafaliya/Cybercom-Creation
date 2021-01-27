<?php 

//array

// $food = array('pasta','panipuri','bhel','pizza');
// $food[4] = 'Dabeli'; // add value in array.
// $length = count($food);  

// for($i = 0;$i<$length;$i++)
// {
//     echo nl2br("$food[$i] \r\n"); //every element on new line.
// }

//Associative array.

//used this array store some information in perticular elements.
// $food = array('pasta'=>300,'panipuri'=>200,'bhel'=>500,'pizza'=>150);

// echo $food['pizza']; //print info store in a this ele.
// print_r($food);

//multi-dim. array.

// +Healthy
// salad
// vegetable
// pasta

// +unhealthy
// panipuri
// Ice cream


$food = array('healthy'=>
                        array('salad','vegetable','pasta'),
                'unhealthy'=>
                        array('panipuri','Ice cream'));
// print_r ($food['healthy']); //print an associative array.
// echo $food['unhealthy'][0]; //print an perticular ele.


//for each statement.

// foreach ($food as $ele /*(array ele.)*/ => $item/*(inner array ele.)*/)
// {
//     echo nl2br("<strong>$ele</strong> \r\n");
//     //@print_r ("$item <br>");   //here @ is used for ignore notice while execute this state.
//     foreach($item as $i)
//     {
//         echo nl2br("$i \r\n");
//     }
// }

// include and require function.


//require_once 'include.php';
// if(defined('include.php')){   //same work line require_once.
//     require 'include.php';
// }

// require 'include.php';  //no excutation of this line.


// echo 'Refer 1st line of this php file.';

//when we use include it will give warning when the file is not found and script exectation is continue.
//when we use require it will give a fatal error when the file is not found and script executation stop.


//require_once(); //same work as require function.but the diff is that it will check first if this file already exist then it will only embadded once.
//include_once();//same as require_once function.


//string length.

// $string = 'Ronak Rafaliya';


// $length = count($string); //count is user for gatting number of elements in array object.
// $len  = strlen($string);  //gatting number of characters in a string.
// echo $length."\n";
// echo $len;

// $srt_lower = strtolower($string); //to lower case.
// echo $srt_lower.'<br>';
// $str_upper = strtoupper($string); //to uppercase.
// echo $str_upper.'<br>';

// $string = 'Ronak';

// if(isset($_GET['username']) && !empty($_GET['username'])){ //isset is checks whether a variable is set, which means it has to be declares and is not NULL.
//     $username = $_GET['username'];  //_GET is used to get vakue from form using GET method.

//     if(strtolower($string) == 'ronak'){
//         echo 'You are in.';
//     }
// }

    //string position.
    //strpos(string,what word,offset(where to start))

    // $of = 0;
    // $string = 'This is a php tutorial, php is easy.';
    // $find= 'is';

    //echo strpos($string, $find).'<br>';
    //echo stripos($string, $find, 11)

    // while ($string_position = stripos($string, $find, $of)){
    //     echo $find. ' found at '.$string_position.'<br>';
    //     $of = $string_position + 2;
    // } //for every position found at is.
 
    //replace substring.

    //substr_replace(string,replacement,start,length)


    $string = 'this part don\'t search. this part search.';
    //$string_new = substr_replace($string , 'ronak', 29 ,4);
    //echo $string_new;

    //string replace with some word

    //str_replace(looking for,what you replace);
    $find = array('part','this');
    $replace = array('area','that');

    $string_new = str_replace($find,$replace,$string);
    echo $string_new;


?>
<!-- 
<form action="thirdfile.php" method="GET">
    Name: <input type="text" name="username"><br><br>
    <input type="submit" value="Submit">
</form> -->