<?php
	session_start();

	@require_once "connect.php";

	$conn = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($conn->connect_errno!=0)
	{
		echo "Error".$conn->connect_errno . "Description: ".$conn->connect_error;
		echo "SHIT";
	}
	else 
	{
		
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		
		
		
	echo "haslo: ".$pass."<br />"."<br />";
	echo "login: ".$login."<br />"."<br />";
	
	
		$login_query = "SELECT * FROM users WHERE login = '$login' AND password = '$pass'";
		#$login_query2="SELECT * FROM `users` WHERE `login` LIKE '$login' AND `$pass` LIKE 'dupadupa'";
		if ($result = @$conn->query($login_query)) #query succeeded
		{
			  $users_count = $result->num_rows;
			  if ($users_count >0) #someone found to  be logged in
			  {
				  echo "user and pass matching!";
				  
				  $row = $result->fetch_assoc();
				  $_SESSION['user'] = $row['login'];
				  $_SESSION['email'] = $row['email'];
				  $_SESSION['premium_expire'] = $row['premiumexpire'];
				  
				  header("location: gra.php");
				  
				  
				  }
			  else	#noone was foun, cannot log in
			  {
				  echo "user and pass NOT MATCHING!";
			  }
		}
		else #query failed
		{
			echo "query failed";
		}
		#echo "works";
		
		$conn->close();
	}
	
	

?>