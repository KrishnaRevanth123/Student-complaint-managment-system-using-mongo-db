<?php
require 'vendor/autoload.php';
$usr_email=$_POST['usr_email'];
$usr_password=$_POST['usr_password'];
   $m = new MongoDB\Client("mongodb://localhost:27017");
   $db = $m->test;
  
   $collection = $db->users;
   $document = array( 
      "user" => "$usr_email", 
      "password" => "$usr_password", 
       );
	
   $collection->insertOne($document);
   //echo "Document inserted successfully";
   include('index.php');
?>