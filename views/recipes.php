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

	        // print_r($data);
	        $i = 0;

	        foreach ($data[$i] as $row) {

	        	echo $row;
	        	$i++;
	        	echo $i;
	        }
	        

?>
 