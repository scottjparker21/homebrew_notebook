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
			<?php require_once '../includes/rec_steps.php';?>		
			<form class="form-register form-signin" name="hopsForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

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