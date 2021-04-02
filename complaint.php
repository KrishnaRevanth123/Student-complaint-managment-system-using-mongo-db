<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mangodb-Project</title>
</head>
<body border="0" bgcolor="corel-blue">
<p align="center" ><img src="images/VITAP1.jpg " width="1100"  height="150" /></p>

<?php
$adate=date('d/m/Y');
?>
<center>
<button><a href="report.php" align="right" type="button" name="home" >EXISTING COMPLAINTS</a></button>
</center>

<H2  align="center"><font color="white"> <b>COMPLAINT FORM</b></font></H2>

 <form   name="form1" method="POST" action="insert.php" onreset="alert('The form is reset')">

  <table align="center" id="ihtable" name="ihtable"  width="800" border="2">  

<tr><td><b><font color="white" face="arial" >Date</td><td colspan=2><input name="doe" id="doe" type="text" value='<?php echo $adate;?>'/></td></tr>
<tr><td><b><font color="white" face="arial" >Name of the Student</td><td colspan=2 ><input  name="name" id="name" type="text" autocomplete="off" /></td></tr>
<tr><td><b><font color="white" face="arial" >Registration No</td><td colspan=2><input name="reg_no" id="reg_no" type="text" autocomplete="off" /></td></tr>
<tr>
		 <td><b><font color="white" face="arial" >Nature of complaint</td>
              		<td colspan=2 width="200"><SELECT name="noc" >
                            <option></option>
                            <option>TRANSPORT</option>
                            <option>HOSTEL</option>
                            <OPTION>ACADEMIC</option>
                            <option>OTHERS</option>
                		 </SELECT></td>
</tr>
<tr>
    <td><b><font color="white" face="arial">Gist of the Complaint</td>
    <td colspan="2"><textarea name="gist" cols="80" onKeyDown="limitText(this.form.accigist,this.form.countdown,1000 ; onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,1000);" width="50" maxlength="1000"/></textarea></td>
</tr>
<!--
<tr><td><b><font color="white" face="arial">Action taken Report</td><td colspan="2"><textarea name="atr" cols="80" disabled /></textarea></td></tr>
-->
</table>
<center>
<b>
  <input  type="submit" name="submit" value="submit"/>
  <input name="reset" type="reset" value="reset" />
  <input   type="submit" name="logout" value="logout" <a href="index.php"></a>
</b>
  </center>
<p align="center"><font color="white" face="arial" >
Designed & powered by VIT-AP</font></p>
</form>
</body>
</html>
