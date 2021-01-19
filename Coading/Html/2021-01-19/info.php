<?php if (!isset($_GET['btn_sb']))
{
echo "direct url called";
header("location:form1.php");
exit();
}

echo "-:welcome to Info page:-<br><br>";
$fn=$_GET["finame"];
$ln=$_GET["laname"];
$email=$_GET["emai"];
$phone=$_GET["num"];




echo $fn." ".$ln."<br>";
echo "email: " .$email."<br>";
echo "phone: " .$phone."<br>";



?>