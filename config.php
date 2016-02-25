<?php
 $host='localhost';
 $user='root';
 $password='';
 $database='techclub';
 
 //to connect with database server
 $con=new mysqli($host,$user,$password,$database);
 if($con->connect_error)
 {
    die("Error in connection");
 }
?>