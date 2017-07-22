<?php
	session_start();
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);

	mysql_connect("localhost", "root", "") or die (mysql_error()); // connect to server
	mysql_select_db("volano") or die("Cannot connect to database"); //connect to database
	$query = mysql_query("SELECT * from users where email='$email'"); //query users table if there are matching rows equal to $email
	$exists = mysql_num_rows($query); // checks if email exists
	$table_email = "";
	$table_password = "";
	if($exists > 0) //if there are no returning rows or no existing email
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_email = $row['email']; //first email row is passed to $table_email, and so on until query finished
			$table_password = $row['password']; //first password row is passed to $table_password, and so on until query finished
		}
		if(($email == $table_email)  && ($password == $table_password)) //checks if there are any matching fields
		{
			if($password == $table_password){
				$_SESSION['user'] = $username; //set the username in a session
				header("location: index.php"); //redirects the user to the index page
			}
		}
		else
		{
			print '<script>alert("Incorrect Password!");</script>'; //prompts user
			print '<script>window.location.assign("signIn.php");</script>'; //redirects to signIn.php
		}
	}
	else{
		print '<script>alert("Incorrect Email!");</script>'; //prompts user
		print '<script>window.location.assign("signIn.php");</script>'; //redirects to signIn.php
	}
?>