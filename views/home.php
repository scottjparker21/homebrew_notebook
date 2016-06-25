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
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
					
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-paper-plane-o fa-3x "></i></div>
						<center><h2> Share </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
				</div></center>
				<center><div class="col-lg-10 col-lg-offset-2">
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-university fa-3x "></i></div>
						<center><h2> Learn </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
					<div class=" home-box col-lg-5">
						<center><div><i class="fa fa-server fa-3x "></i></div>
						<center><h2> Save </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
				</div></center>
<!-- 				</div></center>
			</div></center> -->
		</div>
	</div>
<!-- user recipes -->
<?php
	// grabs three most recent user recipes
	$pdo = Database::connect();
	$sql = 'SELECT * from recipe ORDER BY id DESC LIMIT 3';
	$q = $pdo->prepare($sql);
	$q->execute();
	$user_recipes = $q->fetch(PDO::FETCH_ASSOC);
	// foreach($user_recipes as $ur=>$value) {
	// 	foreach ($value as $urid)
	// 	echo '<p>'.$urid.'</p>';
		
	// }
	echo '<p>' . $user_recipes['id'] . '</p>';
	echo '<p>' . $user_recipes['name'] . '</p>';
	echo '<p>' . $user_recipes['style'] . '</p>';
	echo '<p>' . $user_recipes['malt_type'] . '</p>';
?>
	<div class="container" style="background-color:#ede9ce;">
		<div class="row">
			<center><h1> Recent User Recipes </h1></center>
		</div>


	</div>
	<div class="container" style="background-color:#c7ad88;">
		<div class="container" style="background-color:#c7ad88;">
			<div class="row">
				<div id="texbox">
					<div class="row">
						<div class="col-lg-12">
							<center><img id="process" ng-src="{{imgsrc}}" /></center>
							<center><h3 style"color:white;">BREWING PROCESS</h3></center>
					</div>
				</div>
			</div>
			<div class="row">
				<center>
				<div class="process-buttons col-lg-1 col-lg-offset-3 img-responsive" ng-init="imgsrc='assets/img/processing.svg'" ng-mouseover="imgsrc='assets/img/process_milling.svg'" ng-mouseout="imgsrc='assets/img/processing.svg'">
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
		    	</center>
		    </div>
		</div>
	</div>
