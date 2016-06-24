<?php 
		require_once '../includes/database.php';

		session_start();
		$rsi = $_SESSION['rsi'];
			$pdo = Database::connect();
			$sql = 'SELECT * FROM fermentation WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$fermentation = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		 //    echo "<pre>";
			// print_r($fermentation);
			// echo "</pre>";


?>
	<div id="fermentation-background">
		<div class="col-lg-12">
			<center><h1 class="pacifico-jumbo"> Fermentation </h1></center>
		</div>	
		<div class="container">

			<?php require_once '../includes/rec_steps.php';?>
			<center><div class="row">
			<form class="form-register form-signin" name="fermentationForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : erroryeast_type }">
				    		<label class="control-label">Yeast Type</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.yeast_type=' . "'" . $fermentation['yeast_type'] . "'" . '" type="text"  ng-model="formData.yeast_type">'; ?>
				      			<span class="help-block" ng-show="!erroryeast_type">{{ erroryeast_type }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorpitching_temp }">
				    		<label class="control-label">Pitching Temperature</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.pitching_temp=' ."'" . $fermentation['pitching_temp'] ."'" . '" type="text" name="pitching_temp" ng-model="formData.pitching_temp">'; ?>
				      			<span class="help-block" ng-show="!errorpitching_temp">{{ errorpitching_temp }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorduration }">
				    		<label class="control-label">Fermentation Duration</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.duration=' ."'" . $fermentation['duration'] ."'" . '" type="text" name="duration" ng-model="formData.duration">'; ?>
				      			<span class="help-block" ng-show="errorduration">{{ errorduration }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.notes=' ."'" . $fermentation['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<!-- <pre>
							{{ formData.yeast_type }}
							{{ formData.hops_type}}
							{{ formData.pitching_temp }}
							{{ formData.duration }}
							{{ formData.notes }}
						</pre> -->
				  	</div>	
				</div>
		  	</form>
		  	</div></center>	
		</div>
	</div>
