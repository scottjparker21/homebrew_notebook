<?php 
		require_once '../includes/database.php';

		// public function read() {
		// try{
			$pdo = Database::connect();
			$sql = 'SELECT * FROM hops WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array(31));
			$hops = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		    echo "<pre>";
			print_r($hops);
			echo "</pre>";


?>
	<div class="col-lg-12">
		<center><h1 id="quicksand"> Hops </h1></center>
	</div>	
		<div class="container" ng-app="">
			
			<div class="row">
				<div id="icon-box" class="col-lg-10 col-lg-offset-1" style="background-color:floralWhite">
					<center>
					<div class="col-lg-2 col-lg-offset-1 col-md-2 col-sm-2">
						<div id="bleh" ng-init="imgsrc1='assets/img/barley_b.svg'" ng-mouseover="imgsrc1='assets/img/barley_c.svg'" ng-mouseout="imgsrc1='assets/img/barley_b.svg'">
					        <img ng-src="{{imgsrc1}}" style="width: 100%; height: auto;"/>
					      <center><div><h4>Mash</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div id="bleh" ng-init="imgsrc2='assets/img/boil_b.svg'" ng-mouseover="imgsrc2='assets/img/boil_c.svg'" ng-mouseout="imgsrc2='assets/img/boil_b.svg'">
					        <img ng-src="{{imgsrc2}}" style="width: 100%; height: auto;"/>
					      <center><div><h4>Boil</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div id="bleh" ng-init="imgsrc3='assets/img/hops_b.svg'" ng-mouseover="imgsrc3='assets/img/hops_c.svg'" ng-mouseout="imgsrc3='assets/img/hops_b.svg'">
					        <img ng-src="{{imgsrc3}}" style="width: 100%; height: auto;"/>
					      <center><div><h4>Hops</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div id="bleh" ng-init="imgsrc4='assets/img/carboy_b.svg'" ng-mouseover="imgsrc4='assets/img/carboy_c.svg'" ng-mouseout="imgsrc4='assets/img/carboy_b.svg'">
					        <img ng-src="{{imgsrc4}}" style="width: 100%; height: auto;"/>
					      <center><div><h4>Fermentation</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div id="bleh" ng-init="imgsrc5='assets/img/bot_b.svg'" ng-mouseover="imgsrc5='assets/img/bot_c.svg'" ng-mouseout="imgsrc5='assets/img/bot_b.svg'">
					        <img ng-src="{{imgsrc5}}" style="width: 100%; height: auto;"/>
					      <center><div><h4>Bottling</h4></div></center>
					    </div>
					</div>
					</center>
				</div>
			</div>
			
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
			
				      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
				    		</div>
				  		</div>
				  		<pre>
							{{ formData.name }}
							{{ formData.amt}}
							{{ formData.hops_amt }}
							{{ formData.time_added }}
							{{ formData.time_added }}
						</pre>
				  	</div>	
				</div>
		  	</form>	
		</div>