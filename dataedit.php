<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangodb-Project</title>
</head>
<body border="0" bgcolor="corel-blue">
<p align="center" ><img src="images/VITAP1.jpg " width="1100"  height="150" /></p>

<?php
require 'vendor/autoload.php';
if(session_id()=='') session_start();
$adate=date('d/m/Y');
$id=$_GET['_id'];
$m = new MongoDB\Client("mongodb://localhost:27017");
//   echo "Connection to database successfully";
   $db = $m->complaints_db;
  // echo "Database mydb selected";
   $collection = $db->complaint_records;
   //$document = $collection->find($id);
   $cursor = $collection->find($id);
      foreach($cursor as $document){
          $Date=$document["Date"];
          $Name=$document["Name"];
          $reg_no=$document['Registration_Number'];
          $noc=$document["Nature_Of_Complaint"];
          $gist=$document["Gist_of_Complaint"];
          $atr=$document["Action_Taken"];
          }

?>
<H2  align="center"><font color="white"> <b>COMPLAINT FORM</b></font></H2>

<form   name="form1" method="POST" action="update.php" onreset="alert('The form is reset')">

 <table align="center" id="ihtable" name="ihtable"  width="800" border="2">  

<tr><td><b><font color="white" face="arial" >Date</td><td colspan=2><input name="doe" id="doe" type="text" value='<?php echo $Date;?>'/></td></tr>
<tr><td><b><font color="white" face="arial" >Name of the Student</td><td colspan=2 ><input  name="name" id="name" type="text" value='<?php echo $Name;?>'/></td></tr>

<tr><td><b><font color="white" face="arial" >Registration Number</td><td colspan=2 ><input  name="name" id="name" type="text" value='<?php echo $Name;?>'/></td></tr>

<tr><td><b><font color="white" face="arial" >Nature_Of_Complaint</td><td colspan=2><input name="noc" id="noc" type="text" value='<?php $noc;?>'/></td></tr>
<tr>
   <td><b><font color="white" face="arial">Gist of the Complaint</td><td colspan="2"><textarea name="gist" cols="80" onKeyDown="limitText(this.form.accigist,this.form.countdown,1000 ; onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,1000);" width="50" maxlength="1000" value='<?php echo $document['Gist_of_Complaint'];?>'/></textarea></td>
</tr>
<tr><td><b><font color="white" face="arial">Action taken Report</td><td colspan="2"><textarea name="atr" cols="80" /></textarea></td></tr>
</table>
<center>
<b>
 <input  type="submit" name="submit" value="submit"/>
 <input name="reset" type="reset" value="reset" />

</b>
 </center>
<p align="center"><font color="white" face="arial" >
Designed & powered by VIT-AP</font></p>
</form>
</body>
</html>
