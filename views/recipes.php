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
					// print_r($data);
			        

			        foreach ($data as $recipe_id => $value) {

			        	foreach ($value as $rid){
			        		// echo $rid;


							$sql3 = "SELECT `recipe_step`.`id` FROM `recipe_step` INNER JOIN `recipe` ON `recipe_step`.`recipe_id` = `recipe`.`id` WHERE `recipe_step`.`recipe_id` = ?";
							$q3 = $pdo->prepare($sql3);
							$q3->execute(array($rid));
							$rsid = $q3->fetchAll(PDO::FETCH_ASSOC);
							

							// foreach ($rsid[0] as $value) {
							//   foreach($value[0] as $rsi){
							  	
							//   }
							// }
							  
							
							




			        		//this returns the data from mash
			       			//$sql2 = "SELECT * FROM `mash` INNER JOIN `recipe_step` ON `mash`.`recipe_step_id` = `recipe_step`.`id` WHERE `mash`.`recipe_step_id` = ?";
							// $q2 = $pdo->prepare($sql2);
							// $q2->execute(array($uid2));
							// $mash = $q2->fetchAll(PDO::FETCH_ASSOC);
							// print_r($mash);

							$sql = "SELECT * FROM `recipe` WHERE `id` = ? ";
							$q = $pdo->prepare($sql);
							$q->execute(array($rid));
							$recipe = $q->fetch(PDO::FETCH_ASSOC);
					        
							$sql2 = "SELECT * FROM `results` WHERE `id` = ? ";
							$q2 = $pdo->prepare($sql2);
							$q2->execute(array($rid));
							$results = $q2->fetch(PDO::FETCH_ASSOC);

					        Database::disconnect();

					        // print_r($recipe);
					        // print_r($results);

					        // echo "name= " . $data2['name'];
					        echo '<form action="getrid.php" method="post">';
					        echo '<center><div class="user-recipe col-lg-5 col-lg-offset-1">';
					        echo '<h1>' . $recipe['name'] . '</h1>';
					        echo '<h3>Style: ' . $recipe['style'] . '</h3>';
					        echo '<h3>Color: ' . $results['color'] . '</h3>';
					        echo '<input type="hidden" name="rid" value="'.$ris.'">';
					        echo '<button id="send" type="submit" class="btn btn-success">Edit</button>';
					        echo '</form>';
					        echo '<form action="getview.php" method="post">';
					        echo '<input type="hidden" name="rid" value="'.$ris.'">';
					        echo '<button id="send" type="submit" class="btn btn-success">View</button>';
					        echo '</form>';
					        echo '</div></center>';
						  
			        	}
			        	
			        }
			        print_r($rsid);	        
		?>

	</div>	
		<form class="" ng-submit="viewRec()">
			<input type="text" name="maltType" ng-model="riewRecipes.rid">
			<button id="send" type="submit" class="btn btn-success">Save & Continue</button>
		</form>	




 