

<?php

	
			$pdo = Database::connect();
			$sql = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array());
			$boil = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		 //    echo "<pre>";
			// print_r($boil);
			// echo "</pre>";


?>
	<div class="col-lg-12">
		<center><h1 class="pacifico"> Boil </h1></center>
	</div>	
		<div class="container">

			<?php require_once '../includes/rec_steps.php';?>
			
			<center><form class="form-register form-signin" name="boilForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorDuration }">
				    		<label class="control-label">Duration</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.duration=' . "'" . $boil['duration'] . "'" . '" type="text"  ng-model="formData.duration">'; ?>
				      			<span class="help-block" ng-show="!errorDuration">{{ errorDuration }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorhops_type}">
				    		<label class="control-label">Hops Type</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.hops_type=' . "'" . $boil['hops_type'] . "'" . '" type="text" name="hops_type" ng-model="formData.hops_type">'; ?>
				      			<span class="help-block" ng-show="!errorhops_type">{{ errorhops_type }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorhops_amt }">
				    		<label class="control-label">Hops Amount</label>
				    		<div class="controls">
				    			<?php echo	'<input value="' ."'" . $boil['hops_amt'] ."'" . '" type="text" name="hops_amt" ng-model="formData.hops_amt">'; ?>
				      			<span class="help-block" ng-show="!errorhops_amt">{{ errorhops_amt }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errortime_added }">
				    		<label class="control-label">Time Added</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.time_added=' ."'" . $boil['time_added'] ."'" . '" type="text" name="time_added" ng-model="formData.time_added">'; ?>
				      			<span class="help-block" ng-show="errortime_added">{{ errortime_added }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.notes=' ."'" . $boil['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Save</button>
				    		</div>
				  		</div>
				  		<!-- <pre>
							{{ formData.duration }}
							{{ formData.hops_type}}
							{{ formData.hops_amt }}
							{{ formData.time_added }}
							{{ formData.notes }}
						</pre> -->
				  	</div>	
				</div>
		  	</form></center>
		</div>
