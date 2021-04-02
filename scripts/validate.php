<?php 

/*Only verify/validate form when it is submitted program name: form.php */

if(isset($_POST[submit])){
 
 $error='';                         //initialize $error to blank

  if(trim($veh_no ==' ')){
      $error.="Please Select Bus No<br />";
  }

 // if(!eregi("^[a-zA-Z]{2}[a-zA-Z0-9]{0,6}[0-9]{3}$", $bus_no)) {
 //       $error="Please enter the busno in APNNZNNNN format!";
 //       }

  if(trim($a_date ==' ')){
      $error.=" please enter the accident date <br />";
  }
      else {

  if(trim($a_dri_name ==' ')){
      $error.=" please enter the accident driver name <br />";

        }
    }
  if($error==' '){//Hmmmm no text is in $error so do something else, the page has verified and the email was valid
  // so uncomment the line below to send the user to your own success page or wherever (swap yourpage.php with your files location).
  echo "script type=\"text/javascript\">window.location=\yourpage.php\"<script>";  
  }
    else{
       echo "<span style=color:red>$error</span>";
    }                
}
?>
