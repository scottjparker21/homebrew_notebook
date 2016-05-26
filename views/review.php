<?php 
		require_once '../includes/database.php';
		session_start();	
	?>

	<div class="container">
		<h1> Review <?php echo $_SESSION['rsi']; ?> </h1>

		<?php
			
			
		$rsi = $_SESSION['rsi'];
		//mash
		$pdo = Database::connect();
			$sql = 'SELECT * FROM mash WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$mash = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();

		//boil

			$sql2 = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q2 = $pdo->prepare($sql2);
			$q2->execute(array($rsi));
			$boil = $q2->fetch(PDO::FETCH_ASSOC);

		//hops
			$sql3 = 'SELECT * FROM hops WHERE recipe_step_id = ?';
			$q3 = $pdo->prepare($sql3);
			$q3->execute(array($rsi));
			$hops = $q3->fetch(PDO::FETCH_ASSOC);



		//bottling
			$sql4 = 'SELECT * FROM bottling WHERE recipe_step_id = ?';
			$q4 = $pdo->prepare($sql4);
			$q4->execute(array($rsi));
			$bottling = $q4->fetch(PDO::FETCH_ASSOC);


		//fermentation
			$sql5 = 'SELECT * FROM fermentation WHERE recipe_step_id = ?';
			$q5 = $pdo->prepare($sql5);
			$q5->execute(array($rsi));
			$fermentation = $q5->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();

		    echo $mash['malt_amt'];
		    echo $hops['type'];
					        
		?>