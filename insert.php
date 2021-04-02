
<?php
if(session_id()=='') session_start();

require 'vendor/autoload.php';
$doe=$_POST['doe'];
$name=$_POST['name'];
$regno=$_POST['reg_no'];
$noc=$_POST['noc'];
$gist=$_POST['gist'];
$atr="0";
   
   $m = new MongoDB\Client("mongodb://localhost:27017");
//   echo "Connection to database successfully";
   $db = $m->complaints_db;
//   echo "Database mydb selected";
   $collection = $db->complaint_records;
//   echo "Collection selected succsessfully";
	
   $document = array( 
      "Date" => "$doe", 
      "Name" => "$name", 
      "Registration_Number" =>"$regno",
      "Nature_Of_Complaint" => "$noc",
      "Gist_of_Complaint"=> "$gist",
      "Action_Taken" => "$atr"
   );
	
   $collection->insertOne($document);
//   echo "Document inserted successfully";
   include "index.php";   
?>

<p align="center"><font color="white" face="arial" >
Designed & powered by VIT,AMARAVATHI </font></p>
</form>
</body>
</html>
