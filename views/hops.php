<?php 
		require_once '../includes/database.php';

		session_start();
		$rsi = $_SESSION['rsi'];
			$pdo = Database::connect();
			$sql = 'SELECT * FROM hops WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$hops = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		 //    echo "<pre>";
			// print_r($hops);
			// echo "</pre>";


?>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<div id="hops-background">
		<div class="col-lg-12">
				<center><h1  class="pacifico-jumbo animated fadeInLeft"> Hops </h1></center>		
		</div>
		<div class="container" ng-app="">
			
			<div class="row">
				<div id="icon-box" class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<center>
					<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-2">
						<div class="img-responsive" ng-init="imgsrc1='assets/img/barley_b.svg'" ng-mouseover="imgsrc1='assets/img/barley_c.svg'" ng-mouseout="imgsrc1='assets/img/barley_b.svg'">
					        <a href="#/mash"><img class="animated pulse" ng-src="{{imgsrc1}}" /></a>
					      <center><div><h4>Mash</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div  ng-init="imgsrc2='assets/img/boil_b.svg'" ng-mouseover="imgsrc2='assets/img/boil_c.svg'" ng-mouseout="imgsrc2='assets/img/boil_b.svg'">
					        <a href="#/boil"><img class="animated pulse" ng-src="{{imgsrc2}}" style=""/></a>
					      <center><div><h4>Boil</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive">
					        <a href="#/hops"><img class="animated pulse" ng-src="assets/img/hops_c.svg" style=""/></a>
					      <center><div><h4>Hops</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc4='assets/img/carboy_b.svg'" ng-mouseover="imgsrc4='assets/img/carboy_c.svg'" ng-mouseout="imgsrc4='assets/img/carboy_b.svg'">
					        <a href="#/fermentation"><img class="animated pulse" ng-src="{{imgsrc4}}" style=""/></a>
					      <center><div><h4>Fermentation</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc5='assets/img/bot_b.svg'" ng-mouseover="imgsrc5='assets/img/bot_c.svg'" ng-mouseout="imgsrc5='assets/img/bot_b.svg'">
					        <a href="#/bottling"><img class="animated pulse" ng-src="{{imgsrc5}}" style=""/></a>
					      <center><div><h4>Bottling</h4></div></center>
					    </div>
					</div>
					</center>
				</div>
			</div>

			<form class="form-register form-signin" name="hopsForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorname }">
				    		<label class="control-label">Hops Type</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.name=' . "'" . $hops['name'] . "'" . '" type="text"  ng-model="formData.name">'; ?>
				      			<span class="help-block" ng-show="!errorname">{{ errorname }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : erroramt}">
				    		<label class="control-label">Amount</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.amt=' . "'" . $hops['amt'] . "'" . '" type="text" name="amt" ng-model="formData.amt">'; ?>
				      			<span class="help-block" ng-show="!erroramt">{{ erroramt }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errortime_added }">
				    		<label class="control-label">Time Added</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.time_added=' ."'" . $hops['time_added'] ."'" . '" type="text" name="time_added" ng-model="formData.time_added">'; ?>
				      			<span class="help-block" ng-show="errortime_added">{{ errortime_added }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorstep }">
				    		<label class="control-label">Step</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.step=' ."'" . $hops['step'] ."'" . '" type="text" name="step" ng-model="formData.step">'; ?>
				      			<span class="help-block" ng-show="step">{{ step }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Save</button>
				    		</div>
				  		</div>
				  		<!-- <pre>
							{{ formData.name }}
							{{ formData.amt}}
							{{ formData.hops_amt }}
							{{ formData.time_added }}
							{{ formData.time_added }}
						</pre> -->
				  	</div>	
				</div>
		  	</form>	
		</div>
	</div>