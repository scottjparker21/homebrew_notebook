
<?php 
		require_once '../includes/database.php';

			session_start();
			$rsi = $_SESSION['rsi'];

			$pdo = Database::connect();
			$sql = 'SELECT * FROM boil WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$boil = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		 //    echo "<pre>";
			// print_r($boil);
			// echo "</pre>";
?>
<div id="boil-background">
	<div class="col-lg-12">
		<center><h1 class="pacifico-jumbo animated fadeInLeft"> Boil </h1></center>
	</div>	
		<div class="container">

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
						<div  class="img-responsive">
					        <a href="#/boil"><img class="animated pulse" ng-src="assets/img/boil_c.svg" style=""/></a>
					      <center><div><h4>Boil</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc3='assets/img/hops_b.svg'" ng-mouseover="imgsrc3='assets/img/hops_c.svg'" ng-mouseout="imgsrc3='assets/img/hops_b.svg'">
					        <a href="#/hops"><img class="animated pulse" ng-src="{{imgsrc3}}" style=""/></a>
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
			
			<center><form class="form-register form-signin" name="boilForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						

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
				  		<div class="control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<textarea class="notes-input" cols="30" rows="10" ng-init="formData.notes=' ."'" . $boil['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes"/>'; ?>
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
</div>
