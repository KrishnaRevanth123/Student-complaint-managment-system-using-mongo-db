<?php
require 'vendor/autoload.php';
$server = "mongodb://localhost:27017/complaints_db";

try{
  //$db = $m->mydb;
  // Connecting to server
  $m = new MongoDB\Client( $server );
}catch(MongoConnectionException $connectionException){
  print $connectionException;
  exit;
}

$data  = "<table width='1100' style='border:1px solid red; ";
    $data .= "border-collapse:collapse' border='1px'>";
    $data .= "<thead>";
    $data .= "<tr>";
    $data .= "<th>Id</th>";
    $data .= "<th>Date</th>";
    $data .= "<th>Name</th>";
    $data .= "<th>Registration_Number</th>";
    $data .= "<th>Nature_Of_Complaint</th>";
    $data .= "<th>Gist_Of_Complaint</th>";
    $data .= "<th>Action_Taken</th>";
    $data .= "<th>Edit</th>";
    $data .= "</tr>";
    $data .= "</thead>";
    $data .= "<tbody>";
 
    try{
      $db = $m->complaints_db;
      $collection = $db->complaint_records;
      $cursor = $collection->find();
      foreach($cursor as $document){
          $data .= "<tr>";
          ?>
          <form action="rgn_dataedit.php" method="get">
          
          <button><a href="rgn_dataedit.php?action=&_id=<?php echo $document['_id']; ?>"> <?php echo substr($document['_id'],20,4); ?></a></button>
          

          <?php
          $data .= "<td>" . $document["_id"] . "</td>";
          $data .= "<td>" . $document["Date"] . "</td>";
          $data .= "<td>" . $document["Name"] ."</td>";
          
          $data .= "<td>" . $document['Registration_Number'] ."</td>";
          $data .= "<td>" . $document["Nature_Of_Complaint"] ."</td>";
          $data .= "<td>" . $document["Gist_of_Complaint"] ."</td>";
          $data .= "<td>" . $document["Action_Taken"] ."</td>";
          $data .= "<td>" . substr($document['_id'],20,4) ."</td>";
          $data .= "</tr>";
      }
      $data .= "</tbody>";
      $data .= "</table>";
      echo $data;

    }catch(MongoException $mongoException){
      print $mongoException;
      exit;
  }
  ?>
<button><a href="index.php" align="center" type="button" name="home">HOME</a></button>
<input type="button" name="print" onclick="window.print()" value="Print">