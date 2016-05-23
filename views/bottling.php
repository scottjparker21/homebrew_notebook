<?php 
		require_once '../includes/database.php';

		// public function read() {
		// try{
			$pdo = Database::connect();
			$sql = 'SELECT * FROM bottling WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array(31));
			$bottling = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		    echo "<pre>";
			print_r($bottling);
			echo "</pre>";


?>
	<div class="col-lg-12">
		<center><h1 id="quicksand"> Bottling </h1></center>
	</div>	
		<div class="container">
			<form class="form-register form-signin" name="bottlingForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorbot_con }">
				    		<label class="control-label">Bottle Conditioning</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.bot_con=' . "'" . $bottling['bot_con'] . "'" . '" type="text"  ng-model="formData.bot_con">'; ?>
				      			<span class="help-block" ng-show="!errorbot_con">{{ errorbot_con }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorcon_dur}">
				    		<label class="control-label">Conditioning Duration</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.con_dur=' . "'" . $bottling['con_dur'] . "'" . '" type="text" name="con_dur" ng-model="formData.con_dur">'; ?>
				      			<span class="help-block" ng-show="!errorcon_dur">{{ errorcon_dur }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.notes=' ."'" . $bottling['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<pre>
							{{ formData.bot_con }}
							{{ formData.con_dur}}
							{{ formData.hops_amt }}
							{{ formData.time_added }}
							{{ formData.notes }}
						</pre>
				  	</div>	
				</div>
		  	</form>	
		</div>