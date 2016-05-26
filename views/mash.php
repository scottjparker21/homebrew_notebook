<?php 
		require_once '../includes/database.php';
		session_start();
		// public function read() {
		// try{
			$pdo = Database::connect();
			$sql = 'SELECT * FROM mash WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$mash = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }
		    echo $rid;
		    echo "<pre>";
			print_r($mash);
			echo "</pre>";
?>
	<div class="col-lg-12">
		<center><h1 class="pacifico"> Mash </h1></center>
	</div>	
		<div class="container">

			<?php require_once '../includes/rec_steps.php';?>
			
			<form class="form-register form-signin" name="mashForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errormalt_amt }">
				    		<label class="control-label">Malt Ammount</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.malt_amt=' . "'" . $mash['malt_amt'] . "'" . '" type="text"  ng-model="formData.malt_amt">'; ?>
				      			<span class="help-block" ng-show="!errormalt_amt">{{ errormalt_amt }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errormalt_type}">
				    		<label class="control-label">Malt Type</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.malt_type=' . "'" . $mash['malt_type'] . "'" . '" type="text" name="malt_type" ng-model="formData.malt_type">'; ?>
				      			<span class="help-block" ng-show="!errormalt_type">{{ errormalt_type }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorwater_amt }">
				    		<label class="control-label">Water Amount</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.water_amt=' ."'" . $mash['water_amt'] ."'" . '" type="text" name="water_amt" ng-model="formData.water_amt">'; ?>
				      			<span class="help-block" ng-show="!errorwater_amt">{{ errorwater_amt }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.notes=' ."'" . $mash['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<pre>
							{{ formData.malt_amt }}
							{{ formData.malt_type}}
							{{ formData.water_amt }}
							{{ formData.notes }}
							{{ formData.notes }}
						</pre>
				  	</div>	
				</div>
		  	</form>	
		</div>