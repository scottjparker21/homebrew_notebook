<?php


			require_once 'includes/session.php';
			
			$pdo = Database::connect();
			$user = ($_POST["username"]);
			$pass = ($_POST["password"]);
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user,$pass));
	        $data = $q->fetch(PDO::FETCH_ASSOC);
	        
	        $username = $data['username'];
	        $name = $data['name'];
	        $id = $data['id'];
	        $password = $data['password'];
	        $permission = $data['permission'];
	        $email = $data['email'];

	        Database::disconnect(); 

	        
	        $_SESSION["userid"] = $id;
	        $_SESSION["name"] = $name;
	        $_SESSION["username"] = $username;
	        $_SESSION["permission"] = $permission;
	        $_SESSION["useremail"] = $email;

	        
		   	if ($user == $username && $pass == $password) {
		   		echo "Welcome " . $_SESSION["name"] . " you have been successfully logged in.";
		   		echo  " in auth" . $_SESSION["userid"];
		   		die();

		   	}
		   	else {
		   		echo "Username or Password were not valid. Please try again.";
		   	}

		    header("Location: index.php");		
?>
