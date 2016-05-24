<?php
	require_once '../includes/database.php';

			$pdo = Database::connect();
			$sql = "SELECT * FROM `recipe` INNER JOIN `recipe_step` ON `recipe`.`id` = `recipe_step`.`recipe_id` WHERE `recipe`.`uid` = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array(1));
			$data = $q->fetchAll(PDO::FETCH_ASSOC);
	        Database::disconnect();

	        print_r($data);
?>
 