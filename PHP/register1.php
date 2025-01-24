<?php
	require 'connection1.php';
	$user=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['password'];
/*
	if($connection)
	{
		echo"Connection established"."<br>";
	}
	else{
		echo"error:".mysqli_error($connection)."<br>";
		}
*/
	$query="CREATE TABLE login(username VARCHAR(25) NOT NULL, email VARCHAR(25)NOT NULL, password CHAR(8) NOT NULL);";
/*	if(mysqli_query($connection,$query))
	{
		echo "Table created"."<br>";
	}else{
		echo"Error:".mysqli_error($connection)."<br>";
		}
*/
	$query1="INSERT INTO login VALUES('$user','$email','$pwd');";
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

require "success.html";
require "project4.php";
