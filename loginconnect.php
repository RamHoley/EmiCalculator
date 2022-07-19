<?php

	$conn=mysqli_connect("localhost","root","","emicalculator")  or die("connection failed");

	 $username = $_POST['username'];
	 $password = $_POST['password'];
	
	
	$query = "SELECT * FROM customers WHERE username='$username' and password='$password'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);
	
	if($count>0)
	{
		echo "login sccessful";
		header("Location:emi.php");
        exit();
	}
	else{
		// echo "username or password incorrect";
		// echo "<script> alert('username or password is incorrect');
		// </script> ";
		//  header("Location:login.php");
		//  exit();
		echo "<script type='text/javaScript'>";
		echo "alert('username or password is wrong')";
		echo "</script>";
		
	}
	echo header("Location:login.php");
?>