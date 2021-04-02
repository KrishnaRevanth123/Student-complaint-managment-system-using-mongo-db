
<?php
if(session_id()=='') session_start();
require 'vendor/autoload.php';
$id=$_POST['id'];
//echo $id;
//$id="ObjectId("$id1")";

$doe=$_POST['doe'];
$name=$_POST['name'];
$regno=$_POST['reg_no'];
$noc=$_POST['noc'];
$gist=$_POST['gist'];
$atr=(string)$_POST['atr'];
//echo $atr;   
   $m = new MongoDB\Client("mongodb://localhost:27017");
//   echo "Connection to database successfully";
   $db = $m->complaints_db;
   //echo "Database selected";
   $collection = $db->complaint_records;
  // echo "Collection selected succsessfully";
	
   $document = array( 
      "_id" => "$id",
      "Date" => "$doe", 
      "Name" => "$name", 
      "Registration_Number" =>"$regno",
      "Nature_Of_Complaint" => "$noc",
      "Gist_of_Complaint"=> "$gist",
      "Action_Taken" => "$atr"
   );
   $updateResult = $collection->updateOne(
      [ 'Registration_Number' => "$regno" ],
      [ '$set' => [ 'Action_Taken' => "$atr" ]]
  );
  //printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
  //printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
   //$collection->update(array("Action_Taken"=>"MongoDB"), 
     // array($set=>array("Action_Taken"=>"$atr")));
   //echo "Document updated successfully";
   
   //$collection->updat(array(eOne($document);
   //echo "Document inserted successfully";
   include "report1.php";   
?>
<br>
<br>
</form>
</body>
</html>
