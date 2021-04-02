<?php
require 'vendor/autoload.php';
$succss = "";
if(isset($_POST) and $_POST['submitForm'] == "Login" )
{
$usr_email = $_POST['usr_email'];
$usr_password = $_POST['usr_password'];
$error = array();

if(empty($usr_email) or !filter_var($usr_email,FILTER_SANITIZE_EMAIL))
{
$error[] = "Empty or invalid email address";
}
if(empty($usr_password)){
$error[] = "Enter your password";
}
if(count($error) == 0){

    $con = new MongoDB\Client("mongodb://localhost:27017");
    if($con){    
    $db = $con->test;
    
$users = $db->users;
$qry = array("user" => $usr_email,"password" => $usr_password);
$result = $users->findOne($qry);
if($result){
$success = "You are successully loggedIn";
    include('complaint.php');}
    }
} else {
        echo "<script type='text/javascript'>window.alert('Sorry, Enter correct Password')></script>";
        include ('index.php');}
    die("I");
}


?>