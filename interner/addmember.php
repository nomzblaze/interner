<?php
$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$state=$_POST['state'];
$city=$_POST['city'];
$jobspecs=$_POST['jobspecs'];
$duration=$_POST['duration'];
$school=$_POST['school'];
$location=$_POST['location'];
$course=$_POST['course'];
$gpa=$_POST['gpa'];
$scale=$_POST['scale'];

$con=mysql_connect("localhost","root",'')or die("cannot connect to database");
$db=mysql_select_db("interner",$con) or die("cannot select database");

?>