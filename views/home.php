	<?php 
		require_once '../includes/database.php';
		session_start();	
	?>
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<div class="jumbotron">
			<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12">
						<center><h1 id="quicksand" class="animated fadeInLeft"> Homebrew Notebook </h1></center>
						<center><div><img class="animated fadeInRight" id="jumbo-icon" ng-src="assets/img/jumbo_icons.svg" /></div></center>
					</div>
				</div>
	  		</div>
		</div>
			<div id="subhead" class="row" style="background-color:#935347;">
				<div class="col-lg-12">
					<div class="col-lg-8 col-lg-offset-2">
						<center><h1 id="pacifico-home">Create,Share, and Learn with Homebrew Notebook.</h1></center>
					</div>
				</div>
			</div>
		</div>	
	<!-- <div id="overview" class="container"> -->
		<div id="overview" class="row">
		
<!-- 			<center><div class="col-lg-12">
 -->			<center><div class="col-lg-10 col-lg-offset-2">
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-pencil fa-3x "></i></div>
						<h2> Create </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It makes documenting a recipe fun, easy, and interactive. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
					
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-paper-plane-o fa-3x "></i></div>
						<center><h2> Share </h2></center>
						<center><p class="white">Homebrew Notebook allows users to share recipes with friends and other users. Effortless collaborate of recipes and share your favorite recipes with others. Social media integration with Facebook, Instagram, and Twitter is under construction.</p></center>
					</div>
				</div></center>
				<center><div class="col-lg-10 col-lg-offset-2">
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-university fa-3x "></i></div>
						<center><h2> Learn </h2></center>
						<center><p class="white">Homebrew Notebook is a learning tool as well as a recipe archive. Learn from other users mistakes and successes by looking over their notes. Refer to onsite interactive graphics to learn more about the brewing process.</p></center>
					</div>
					<div class=" home-box col-lg-5">
						<center><div><i class="fa fa-server fa-3x "></i></div>
						<center><h2> Save </h2></center>
						<center><p class="white"> Homebrew Notebook allows for recipe archiving. Have access to your recipes anytime, anywhere. Never scribble out a changed recipe again, Homebrew Notebook allows you to update recipes quickly and effortlessly.</p></center>
					</div>,
				</div></center>
<!-- 				</div></center>
			</div></center> -->
		</div>
	</div>

	<div class="row home-padding" style="background-color:#ede9ce;">
		<div class="row">
			<center><h1 id="pacifico-blue"> Recent User Recipes </h1></center>
		</div>
		<!-- user recipes -->
		<div class="row">
			<div class="col-lg-12 user-recipe-outer">
			<?php
				// grabs three most recent user recipes
				$pdo = Database::connect();
				$sql = 'SELECT id from recipe ORDER BY id DESC LIMIT 3';
				$q = $pdo->prepare($sql);
				$q->execute();
				$user_recipes = $q->fetchAll(PDO::FETCH_ASSOC);
				foreach($user_recipes as $ur=>$value) {
					foreach ($value as $urid) {
						$sql2 = 'SELECT * from recipe WHERE id = ?';
						$q2 = $pdo->prepare($sql2);
						$q2->execute(array($urid));
						$ur = $q2->fetch(PDO::FETCH_ASSOC);
						// echo '<p>' . $ur['name'] . '</p>';
						// echo '<p>' . $ur['style'] . '</p>';
						// echo '<p>' . $ur['malt_type'] . '</p>';	
						echo 	'<div class="user-recipe-box">';
						echo 		'<center><img ng-src="assets/img/blue_bot_icon.svg"/></center>';
						echo     	'<h2 class="blue">' . $ur['name'] . '</h2>';
						echo     	'<h2 class="blue">' . $ur['style'] . '</h2>';
						echo     	'<h2 class="blue">' . $ur['malt_type'] . '</h2>';			
						echo	'</div>';
					}
				}
				Database::disconnect();
			?>
			</div>
		</div>
	</div>
<!-- start infographic -->
		<div class="row home-padding" style="background-color:#c7ad88;">
			<div class="row">
				<div id="texbox">
					<div class="row">
						<div class="col-lg-12">
							<center><h1 id="pacifico-home">The Brewing Process</h3></center>
							<center><img id="process" ng-src="{{imgsrc}}" /></center>		
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<center><div>
						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_milling.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Milling</h5></div>
				    	</div>

						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_mashing.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Mashing</h5></div>
				    	</div>
						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_boiling.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Boiling</h5></div>
				   	 	</div>

						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_filtering.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Filtration</h5></div>
				    	</div>
						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_fermenting.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Fermentation</h5></div>
				    	</div>
						<div class="process-buttons col-lg-1 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_bottling.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
				        	<div><h5>Bottling</h5></div>
				    	</div>
			    	</div></center>
			    </div>
			</div>
		</div>
