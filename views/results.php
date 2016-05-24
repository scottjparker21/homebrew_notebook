<?php 
		require_once '../includes/database.php';

		// public function read() {
		// try{
			$pdo = Database::connect();
			$sql = 'SELECT * FROM results WHERE recipe_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array(31));
			$boil = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		    echo "<pre>";
			print_r($boil);
			echo "</pre>";


?>
	<div class="col-lg-12">
		<center><h1 id="quicksand">Results</h1></center>
	</div>	
		<div class="container">
			<form class="form-register form-signin" name="boilForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						<!-- success message -->
						<div id="message" ng-show="message">{{ message }}</div>

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorcolor }">
				    		<label class="control-label">Color</label>
				    		<div class="controls">
				      			<?php echo '<input ng-init="formData.color=' . "'" . $boil['color'] . "'" . '" type="text"  ng-model="formData.color">'; ?>
				      			<span class="help-block" ng-show="!errorcolor">{{ errorcolor }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorabv}">
				    		<label class="control-label">ABV</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.abv=' . "'" . $boil['abv'] . "'" . '" type="text" name="abv" ng-model="formData.abv">'; ?>
				      			<span class="help-block" ng-show="!errorabv">{{ errorabv }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : erroribu }">
				    		<label class="control-label">IBU</label>
				    		<div class="controls">
				    			<?php echo	'<input ng-init="formData.ibu=' ."'" . $boil['ibu'] ."'" . '" type="text" name="ibu" ng-model="formData.ibu">'; ?>
				      			<span class="help-block" ng-show="!erroribu">{{ erroribu }}</span> 
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
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<pre>
							{{ formData.color }}
							{{ formData.abv}}
							{{ formData.ibu }}
							{{ formData.time_added }}
							{{ formData.notes }}
						</pre>
				  	</div>	
				</div>
		  	</form>	
		</div>