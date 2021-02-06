<?php

//default syntaxt of try and catch
// function divide($num1,$num2)
// {
//     if($num2 == 0)
//     {
//         throw new Exception ('can\'t divide by zero.');
//     }
//     else
//     {
//         return $num1 / $num2;
//     }
// }
// try
// {
//     // it will check this function and return exception.
//     divide(10,0);
//     echo "Result is this.";
// }
// catch(Exception $e)
// {
//     //exception is caught here.
//     echo 'Message: '.$e->getMessage();
// }

//custom exception create with the help of class.

// $mysql_host = 'localhost';
// $mysql_user = 'roo';
// $mysql_pass = '';
// $mysql_db = 'a_database';

// class ServerException extends Exception{
//     public function showSpec(){
//         return 'Error thown on line '.$this->getLine().' in '.$this->getFile(); //custom error massage.
//     }
// }
// class DatabaseException extends Exception{
//     public function showSpec(){
//         return 'Error thown on line '.$this->getLine().' in '.$this->getFile(); //custom error massage.
//     }
// }
// try
// {
//     $conn = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
//     if (!$conn)
//     {
//         throw new ServerException();
//     }
//     elseif(!@mysqli_select_db($conn,$mysql_db))
//     {
//         throw new DatabaseException ();
//     }
//     else
//     {
//         echo 'CONNECTED....';
//     }
// }
// catch (ServerException $ex)
// {
//     echo $ex->showSpec();
// }
// catch(DatabaseException $ex)
// {
//     echo $ex->showSpec();
// }


// OOP IN PHP.............
 
// class Bankaccount
// {
//     public $balance = 0;
//     public function __construct()
//     // {
//     //     echo 'with the help of super keyword.';
//     // }

//     public function displaybalance()
//     {
//         return 'Balance: '.$this->balance;
//     }
//     public function withdraw($amount)
//     {
//         if($this->balance < $amount)
//         {
//             echo 'No enough Money.';
//             die ();
//         }
//         else
//         {
//             return $this->balance -= $amount;
//         }
//     }
//     public function deposite($amount)
//     {
//         $this->balance += $amount;
//     }

// }

// class savingAccount extends Bankaccount
// {
    // public function __construct()
    // {
    //     parent::__construct(); // with the help of this you cann call the parant class constructor.
    // }
// }

//$saving = new savingAccount;

// $ronak = new Bankaccount;
// $ravi = new Bankaccount; // ypu can create multiple object of same class.
// $ronak->deposite(500);
// $ronak->withdraw(250);
// echo $ronak->displaybalance(); 

// $ronak->deposite(500);
// $ravi->deposite(600);

// $ronak->withdraw(250);
// $ravi->withdraw(150);

// echo 'Ronak Balance is '.$ronak->displaybalance().'<br>';
// echo 'Ravi Balance is '.$ravi->displaybalance().'<br>';



// const keyword

// class circle
// {
//     const pi=3.141;

//     public function Area($radius)
//     {
//         return self::pi * ($radius*$radius); //self is used for point to the static variable in the class.
//     }
// }

// $circle = new circle;
// echo $circle->Area(100);


// class constructor..

// class Example
// {
//     public function __construct()  //constructor 
//     {
//         $this->saysomething();
//         echo ' Ronak';
//     }
//     public function saysomething()
//     {
//         echo 'something';
//     }
// }
// $ex = new Example;



// Connecting to a database OOP Way.


class DatabaseConnect
{
    public function __construct($mysql_host, $mysql_user, $mysql_pass)
    {
        if(!@$this->connect($mysql_host,$mysql_user,$mysql_pass))
        {
            echo 'connection faild..';
        }
        else if($this->connect($mysql_host,$mysql_user,$mysql_pass))
        {
            echo 'connected to '.$mysql_host;
        }
    }
    public function connect($mysql_host, $mysql_user, $mysql_pass)
    {
        if(!mysqli_connect($mysql_host, $mysql_user, $mysql_pass))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

$connection = new DatabaseConnect('localhost','root','');



























?>