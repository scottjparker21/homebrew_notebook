<?php 
		require_once '../includes/database.php';
		session_start();	
	?>

	<div class="container">
		<h1> Review <?php echo $_SESSION['rsi']; ?> </h1>

		<?php
			
			
		$rsi = $_SESSION['rsi'];
		//mash
		$pdo = Database::connect();
			$sql = 'SELECT * FROM mash WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$mash = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();

		//boil

			$sql2 = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q2 = $pdo->prepare($sql2);
			$q2->execute(array($rsi));
			$boil = $q2->fetch(PDO::FETCH_ASSOC);

		//hops
			$sql3 = 'SELECT * FROM hops WHERE recipe_step_id = ?';
			$q3 = $pdo->prepare($sql3);
			$q3->execute(array($rsi));
			$hops = $q3->fetch(PDO::FETCH_ASSOC);



		//bottling
			$sql4 = 'SELECT * FROM bottling WHERE recipe_step_id = ?';
			$q4 = $pdo->prepare($sql4);
			$q4->execute(array($rsi));
			$bottling = $q4->fetch(PDO::FETCH_ASSOC);


		//fermentation
			$sql5 = 'SELECT * FROM fermentation WHERE recipe_step_id = ?';
			$q5 = $pdo->prepare($sql5);
			$q5->execute(array($rsi));
			$fermentation = $q5->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();

		    			        
		?>		<div class="container">
			<!-- Mash -->
					<div class="col-lg-6">
						<form class="" name="mashForm" ng-submit="processForm()" enctype="multipart/form-data">
							<div class="">
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
						
							      			<button id="send" type="submit" class="btn btn-success">Update Recipe</button>
							    		</div>
							  		</div>
							  		<!-- <pre>
										{{ formData.malt_amt }}
										{{ formData.malt_type}}
										{{ formData.water_amt }}
										{{ formData.notes }}
										{{ formData.notes }}
									</pre> -->
							  	</div>	
							</div>
					  	</form>	
				  	</div>
			<!-- Boil -->
				  	<div class="col-lg-6">
				  		<center><form class="" name="boilForm" ng-submit="processForm()" enctype="multipart/form-data">
							<div class="">
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
							    			<?php echo	'<input ng-init="formData.hops_amt=' ."'" . $boil['hops_amt'] ."'" . '" type="text" name="hops_amt" ng-model="formData.hops_amt">'; ?>
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
						
							      			<button id="send" type="submit" class="btn btn-success">Update Recipe</button>
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
			<!-- Hops -->	  	
				  	<div class="col-lg-6">
				  		<form class="" name="hopsForm" ng-submit="processForm()" enctype="multipart/form-data">
							<div class="">
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
		<!-- Fermentation -->	  		
				  	<div class="col-lg-6">
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
				  	</div>
			 <!-- Bottling -->			
				  	<div class="col-lg-6">
				  		<form class="form-register form-signin" name="bottlingForm" ng-submit="processForm()" enctype="multipart/form-data">
							<div class="form-register-with-email">
								<div class="form-white-background">
									<!-- success message -->
									<div id="message" ng-show="message">{{ message }}</div>

							  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorbtl_con }">
							    		<label class="control-label">Bottle Conditioning</label>
							    		<div class="controls">
							      			<?php echo '<input ng-init="formData.btl_con=' . "'" . $bottling['btl_con'] . "'" . '" type="text"  ng-model="formData.btl_con">'; ?>
							      			<span class="help-block" ng-show="!errorbtl_con">{{ errorbtl_con }}</span> 
							    		</div>
							  		</div>
							  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorcon_duration}">
							    		<label class="control-label">Conditioning Duration</label>
							    		<div class="controls">
							    			<?php echo	'<input ng-init="formData.con_duration=' . "'" . $bottling['con_duration'] . "'" . '" type="text" name="con_duration" ng-model="formData.con_duration">'; ?>
							      			<span class="help-block" ng-show="!errorcon_duration">{{ errorcon_duration }}</span> 
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
							  		<!-- <pre>
										{{ formData.btl_con }}
										{{ formData.con_duration}}
										{{ formData.hops_amt }}
										{{ formData.time_added }}
										{{ formData.notes }}
									</pre> -->
							  	</div>	
							</div>
					  	</form>	
				  	</div>
				</div>  