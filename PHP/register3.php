<?php
	require 'connection3.php';
	$name=$_POST['name'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
/*
	if($connection)
	{
		echo"Connection established"."<br>";
	}
	else{
		echo"error:".mysqli_error($connection)."<br>";
		}
*/
	$query="CREATE TABLE login(name VARCHAR(25) NOT NULL, company VARCHAR(8) NOT NULL, phone VARCHAR(8) NOT NULL, email VARCHAR(8) NOT NULL, message VARCHAR(8) NOT NULL);";
/*	if(mysqli_query($connection,$query))
	{
		echo "Table created"."<br>";
	}else{
		echo"Error:".mysqli_error($connection)."<br>";
		}
*/
	$query1="INSERT INTO login VALUES('$name','$company', '$phone','$email','$msg');";
	if(mysqli_query($connection,$query1))
	{
		echo ""."<br>";
	}else{
		echo"1Error:".mysqli_error($connection)."<br>";
		}

/*
	$query3="SELECT * FROM login;";
	$check=mysqli_query($connection,$query3);
	if(mysqli_num_rows($check))
	{
		while($row=mysqli_fetch_assoc($check))
			echo $row['emailId']." ".$row['password']."<br>";
	}
	else{
		echo "No records"."<br>";
		}
*/

require "contact.php";
