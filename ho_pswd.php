<?php
session_start();
$pwd=$_POST['pwd'];
$pwd1='Admin@975';
if($pwd==$pwd1){
include('rgn_abho.php');}
else{
echo "<script type='text/javascript'>window.alert('Sorry, Enter correct Password')</script>";
include ('index.php');}
?>
