<?php
	require_once '../includes/database.php';
	session_start();

			$uid = $_SESSION["userid"];

			$pdo = Database::connect();
			$sql = "SELECT `recipe_id` FROM `recipe` INNER JOIN `recipe_step` ON `recipe`.`id` = `recipe_step`.`recipe_id` WHERE `recipe`.`uid` = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($uid));
			$data = $q->fetchAll(PDO::FETCH_ASSOC);
	        Database::disconnect();

	        foreach ($data as $recipe_id => $value) {
	        	foreach ($value as $rid){
	        		echo $rid;

	        		$pdo = Database::connect();
					$sql = "SELECT * FROM `recipe` WHERE `uid` = ? ";
					$q = $pdo->prepare($sql);
					$q->execute(array($rid));
					$data2 = $q->fetch(PDO::FETCH_ASSOC);
			        Database::disconnect();
 
			        print_r($data2);
	        	}
	        }
	        

?>
 