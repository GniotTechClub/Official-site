<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=techclub", $username, $password);
    $dbh->setAttribute(PDO::ATTR_PERSISTENT,true);
    /*** echo a message saying we have connected ***/
    //for cheching the database
    //echo 'Connected to database';.

}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$email_message="";

if((isset($_REQUEST['name']) && !empty($_REQUEST['name'])) && (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) && (isset($_REQUEST['message']) && !empty($_REQUEST['message'])))
{
	$name=ucwords($_REQUEST['name']);
	$email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	
	
//echo "insert into `contact-us`(name,email,phone,message) values('$name','$email','$phone','$message')";	
$sql = "insert into `contact-us`(name,email,message) values('$name','$email','$message')";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
if($stmt)
{
	    $to="gniottechclub@gniot.net.in";
		$subject="Contact Us";
		$headers = "From: " . strip_tags($email) . "\r\n";
    	$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
   		$headers .= "MIME-Version: 1.0\r\n";
   		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$email_message.="Hello"."\n"."\n";
		$email_message.="Contact Details"."\n";
		$email_message.="Name :"."     ".$name."\n";
		$email_message.="Email :"."     ".$email."\n";
		$email_message.="Message :"."     ".$message."\n";
		$email_message.="Regards"."\n"."\n";
		$email_message.=" Guest Name :"."     ".$name."\n";
		//echo $email_message;
		if(mail($to,$subject,$email_message,$headers))
		{
		
		echo "Thank you for contact me! ";
		}
	} 
		echo "Thank you for contact Us! ";
 }

?>