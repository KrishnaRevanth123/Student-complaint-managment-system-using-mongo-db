function checkForm()
{
   var  cbusno,cadate,cdriname,cdrino;
   with(window.document.form1)
   {
          cbusno    = vehno;
          cadate    = adate;
          cdriname  = driname;
	  cdrino    = drino      
   }

   if(trim(cbusno.value) == '')
   {
      alert('Please select accident vehicle No');
      cbusno.focus();
      return false;
   }


if(trim(cadate.value) == '')
   {
      alert('Please enter accident date & time');
      cadate.focus();
      return false;
   }


    if(trim(cdriname.value) == '')
   {
      alert('Please enter accident Driver name');
      cdriname.focus();
      return false;
   }

var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.";
var checkStr = cdriname.value;
var allValid = true;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
}
if (!allValid)
{
alert("Please enter only Alphabet characters in the \"Driver Name\" field.");
cdriname.focus();
return false;
}
   if(trim(cdrino.value) == '')
   {
      alert('Please enter accident Driver Number');
      cdrino.focus();
      return false;
   }

var checkOK = "C0123456789";
var checkStr = cdrino.value;
var allValid = true;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
}
if (!allValid)
{
alert("Please enter only numeric characters in the \"Driver No\" field.");
cdrino.focus();
return false;
}

   if(trim(cdrino.value).length < 6 )
   {
      alert('Please enter 6 digit valid Driver Number');
           cdrino.focus();
           return false;
   }
   else
   {
      
          cbusno.value     = trim(cbusno.value);
          cadate.value     = trim(cadate.value);
	  cdriname.value   = trim(cdriname.value);
	  cdrino.value     = trim(cdrino.value);
           return true;
   }
}

function trim(str)
{
   return str.replace(/^\s+|\s+$/g,'');
}
function isBusno(str)
{
   var regex = /^[a-zA-Z]{2}[a-zA-Z0-9]{0,6}[0-9]{3}$/i;
       return regex.test(str);
}
