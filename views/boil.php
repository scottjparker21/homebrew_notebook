
<?php 
		require_once '../includes/database.php';

		// public function read() {
		// try{
			$pdo = Database::connect();
			$sql = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array(1));
			$read = $q->fetchAll(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }


	// $boil = read();

?>
	<div class="col-lg-12">
		<center><h1 id="quicksand"> Boil </h1></center>
	</div>
		
		<div class="container">

			

		
			<form class="form-register form-signin" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorduration }">
				    		<label class="control-label">Duration</label>
				    		<div class="controls">
				      			<input value="1" type="text" name="duration" ng-model="formData.duration">
				      			<span class="help-block" ng-show="!errorName">{{ errorDuration }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorhops_type}">
				    		<label class="control-label">Hops Type</label>
				    		<div class="controls">
				    			<?php echo	'<input value="' . $read[0]['hops_type'] . '" type="text" name="hops_type" ng-model="formData.hops_type">'; ?>
				      			<span class="help-block" ng-show="!errorhops_type">{{ errorhops_type }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorhops_amt }">
				    		<label class="control-label">Hops Amount</label>
				    		<div class="controls">
				    			<?php echo	'<input value="' . $read[0]['hops_amt'] . '" type="text" name="hops_amt" ng-model="formData.hops_amt">'; ?>
				      			<span class="help-block" ng-show="!errorhops_amt">{{ errorhops_amt }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errortime_added }">
				    		<label class="control-label">Time Added</label>
				    		<div class="controls">
				    			<?php echo	'<input value="' . $read[0]['time_added'] . '" type="text" name="time_added" ng-model="formData.time_added">'; ?>
				      			<span class="help-block" ng-show="errortime_added">{{ errortime_added }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<input value="' . $read[0]['notes'] . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<pre>
							{{ formData }}

						</pre>
				  	</div>	
				</div>
		  	</form>	
		</div>
