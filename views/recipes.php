	<?php 
		require_once '../includes/database.php';
		session_start();
	?>
	<div id="recipes-background">
		<div class="container">
			<div id="rid" ng-show="rid">{{ rid }}</div>
			<center><h1 class="pacifico-jumbo"> Your Recipes </h1></center>

			<?php
						$uid = $_SESSION["userid"];

						$pdo = Database::connect();
						$sql = "SELECT `recipe_id` FROM `recipe` INNER JOIN `recipe_step` ON `recipe`.`id` = `recipe_step`.`recipe_id` WHERE `recipe`.`uid` = ?";
						$q = $pdo->prepare($sql);
						$q->execute(array($uid));
						$data = $q->fetchAll(PDO::FETCH_ASSOC);
						
				        foreach ($data as $recipe_id => $value) {
				        	foreach ($value as $rid){
				     
								$sql3 = "SELECT `recipe_step`.`id` FROM `recipe_step` INNER JOIN `recipe` ON `recipe_step`.`recipe_id` = `recipe`.`id` WHERE `recipe_step`.`recipe_id` = ?";
								$q3 = $pdo->prepare($sql3);
								$q3->execute(array($rid));
								$rsid = $q3->fetchAll(PDO::FETCH_ASSOC);
								
								foreach ($rsid as $key=>$value) {
								  foreach($value as $k=>$v){

									$sql = "SELECT * FROM `recipe` WHERE `id` = ? ";
									$q = $pdo->prepare($sql);
									$q->execute(array($rid));
									$recipe = $q->fetch(PDO::FETCH_ASSOC);
							        
									$sql2 = "SELECT * FROM `results` WHERE `id` = ? ";
									$q2 = $pdo->prepare($sql2);
									$q2->execute(array($rid));
									$results = $q2->fetch(PDO::FETCH_ASSOC);

							        Database::disconnect();

							        echo '<form action="getrid.php" method="post">';
							        echo '<center><div class="recipe-page-box col-lg-5 col-lg-offset-1">';
							        echo '<h1 class="white">' . $recipe['name'] . '</h1>';
							        echo '<h3 class="white">Style: ' . $recipe['style'] . '</h3>';
							        echo '<h5 class="white">Color: ' . $results['color'] . '</h3>';
							        echo '<input type="hidden" name="rid" value="'.$rid.'">';
							        echo '<input type="hidden" name="rsid" value="'.$v.'">';
							        echo '<button id="send" type="submit" class="btn btn-success">Edit</button>';
							        echo '</form>';
							        echo '<form action="getview.php" method="post">';
							        echo '<input type="hidden" name="rid" value="'.$rid.'">';
							        echo '<input type="hidden" name="rsid" value="'.$v.'">';
							        echo '<button id="send" type="submit" class="btn btn-success">View</button>';
							        echo '</form>';
							        echo '</div></center>';
							    	}
								}
				        	}		        	
				        }
			?>
		</div>	
	</div>		




 