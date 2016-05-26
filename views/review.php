<?php 
		require_once '../includes/database.php';
		session_start();
		$rsi = $_SESSION['rsi'];
	?>

	<div class="container">
		<h1> Recipes by: <?php echo $_SESSION['rsi']; ?> </h1>

		<?php


			

		//mash
			$pdo = Database::connect();
			$sql = 'SELECT * FROM mash WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$mash = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();

		//boil
			$pdo = Database::connect();
			$sql = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$boil = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();

		//hops
			$pdo = Database::connect();
			$sql = 'SELECT * FROM hops WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$hops = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();



		//bottling
			$pdo = Database::connect();
			$sql = 'SELECT * FROM bottling WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$bottling = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();


		//fermentation
		    $pdo = Database::connect();
			$sql = 'SELECT * FROM fermentation WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$fermentation = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();

		    echo $mash['malt_amt'];
		    echo $hops['type'];
					        
		?>