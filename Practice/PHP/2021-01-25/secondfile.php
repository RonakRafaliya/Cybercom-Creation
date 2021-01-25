<?php
   // echo 'Ronak ';

    //die(); // the page break here and programme end.
    //exit(); // same work like die.

    //@mysqli_connect('localhost','ronak','') or die('could\'t connected..');
    //die function work here like a break statement.

    //echo 'Connected...';

    //expressionmatching...

    // $string = 'This is a srting.';

    // if (preg_match('/is/',$string)){ //preg_match is used for match a perticular string word in a one sentence.
    //     echo "$string contain is.";
    // }
    // else{
    //     echo "match found";
    // }

    //function creating.

    // $a = 'Ronak';

    // function MyName($a)  // function creation.
    // {
    //     # code...
    //     echo "My name is $a.";
    // }
    // MyName($a); //call funcition.
    
    // pass int number.
    // $a = 10; 
    // $b = 20;

    // function calculate($a,$b){
    //     $result = $a + $b;
    //     return $result;
    // }
    // calculate($a,$b);


    // pass string.

    // function displayDate($day, $date, $year){
    //     echo "$day $date $year.";
    // }
    // displayDate('Monday',14,1998);


    //function with retur value.
    
    //echo "The result is ",calculate(10,10) / calculate(5,5); //refer upper function.

    
    //global variable ad use in function.

    //$user_ip = $_SERVER['REMOTE_ADDR']; //method to get user ip address who currently viewing your website.
    //echo 'user ip address '.$user_ip;

    // function ip_add(){
    //     global $user_ip;
    //     echo "Your ip address is $user_ip.";
    // }
    // ip_add();


    // STRING PART 1.

    $string = 'This is an example string.';
    // $string_word_count = str_word_count($string);
    // $string_word_count1 = str_word_count($string,1);                  //return how many word.
    // $string_word_count2 = str_word_count($string,2);                  //return position number by letter
    // $string_word_count3 = str_word_count($string,1,"an");                //an is perticular word.
    // $string_word_count4 = str_word_count($string,2,"an");


    // echo $string_word_count;
    // print "<br>";
    // print_r ($string_word_count1);
    // print "<br>";
    // print_r ($string_word_count2);
    // print "<br>";
    // print_r ($string_word_count3);
    // print "<br>";
    // print_r ($string_word_count4);


    //PART 2.

    //$string_shuffled = str_shuffle($string); // shuffled the string.
    
    //$half = substr($string_shuffled , 0, 10); //we can divid the string in the perticular position.
    //echo $string_shuffled;
    //echo $half;

    // $string_reverse = strrev($string);
    // echo $string_reverse;


    // $string_one = 'This is my essay. I\'m going to be talking about php.';
    // $string_two = 'This is my essay. I will be talking about the subject php.';

    // similar_text($string_one,$string_two, $result); //it will give the smimilarity in between two string in percentage.
    // echo 'The similarity between is, '.$result;

    // $string_trim = trim($string); //it will remove the extra white space.
    // $string_length = strlen($string_trim); // it will give the length of the string.
    // echo $string_length."\n";


    // if ($string_length <=25){
    //     echo 'the string length is '.$string_length;
    // }
    // else{
    //     echo 'the length of the string is above length';
    // }

    $string_slashes = 'This is a <img src="image.jpg"> string';
    $string_addslashes = htmlentities(addslashes($string_slashes)); //add backslash in front of predefine characters.   //also one methtos is stripslash which is remove backslashes added by addslash.

    echo $string_addslashes;
?>