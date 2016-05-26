	<?php 
		require_once '../includes/database.php';
		session_start();
	?>

	<div class="container">
		<div id="rid" ng-show="rid">{{ rid }}</div>
		<h1> Recipes by: <?php echo $_SESSION['username']; ?> </h1>

		<?php
			

					$uid = $_SESSION["userid"];

					$pdo = Database::connect();
					$sql = "SELECT `recipe_id` FROM `recipe` INNER JOIN `recipe_step` ON `recipe`.`id` = `recipe_step`.`recipe_id` WHERE `recipe`.`uid` = ?";
					$q = $pdo->prepare($sql);
					$q->execute(array($uid));
					$data = $q->fetchAll(PDO::FETCH_ASSOC);
			        Database::disconnect();

			        foreach ($data as $recipe_id => $value) {

			        	foreach ($value as $rid){
			        		// echo $rid;

			        		$pdo = Database::connect();
							$sql = "SELECT * FROM `recipe` WHERE `id` = ? ";
							$q = $pdo->prepare($sql);
							$q->execute(array($rid));
							$recipe = $q->fetch(PDO::FETCH_ASSOC);
					        
							$sql2 = "SELECT * FROM `results` WHERE `id` = ? ";
							$q2 = $pdo->prepare($sql2);
							$q2->execute(array($rid));
							$results = $q2->fetch(PDO::FETCH_ASSOC);
					        Database::disconnect();

					        print_r($results);
					        // echo "name= " . $data2['name'];
					        echo '<form ng-submit="viewRec()" enctype="multipart/form-data">';
					        echo '<center><div class="user-recipe col-lg-5 col-lg-offset-1">';
					        echo '<h1>' . $recipe['name'] . '</h1>';
					        echo '<h3>Style: ' . $recipe['style'] . '</h3>';
					        echo '<h3>Color: ' . $results['color'] . '</h3>';
					        echo '<input  name="rid" ng-init="viewRecipes.rid=' . "'" . $rid . "'" . '" ng-model="viewRecipes.rid">';
					        echo '<button id="send" type="submit" class="btn btn-success">View/Edit</button>';
					        echo '</form>';
					        echo '</div></center>';
			        	}
			        	
			        }
			        
		?>

	</div>	
		<form class="" ng-submit="viewRec()">
			<input type="text" name="maltType" ng-model="riewRecipes.rid">
			<button id="send" type="submit" class="btn btn-success">Save & Continue</button>
		</form>	




 