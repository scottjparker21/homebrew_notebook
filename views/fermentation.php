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
			<center><h1 class="pacifico-jumbo animated fadeInLeft"> Fermentation </h1></center>
		</div>	
		<div class="container">

			<div class="row">
				<div id="icon-box" class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<center>
					<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-2">
						<div class="img-responsive" ng-init="imgsrc1='assets/img/barley_b.svg'" ng-mouseover="imgsrc1='assets/img/barley_c.svg'" ng-mouseout="imgsrc1='assets/img/barley_b.svg'">
					        <a href="#/mash"><img class="animated pulse nav-icon" ng-src="{{imgsrc1}}" /></a>
					      <center><div><h4>Mash</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div  ng-init="imgsrc2='assets/img/boil_b.svg'" ng-mouseover="imgsrc2='assets/img/boil_c.svg'" ng-mouseout="imgsrc2='assets/img/boil_b.svg'">
					        <a href="#/boil"><img class="animated pulse nav-icon" ng-src="{{imgsrc2}}" style=""/></a>
					      <center><div><h4>Boil</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc3='assets/img/hops_b.svg'" ng-mouseover="imgsrc3='assets/img/hops_c.svg'" ng-mouseout="imgsrc3='assets/img/hops_b.svg'">
					        <a href="#/hops"><img class="animated pulse nav-icon" ng-src="{{imgsrc3}}" style=""/></a>
					      <center><div><h4>Hops</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" >
					        <a href="#/fermentation"><img class="animated pulse nav-icon" ng-src="assets/img/carboy_c.svg" style=""/></a>
					      <center><div><h4>Fermentation</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc5='assets/img/bot_b.svg'" ng-mouseover="imgsrc5='assets/img/bot_c.svg'" ng-mouseout="imgsrc5='assets/img/bot_b.svg'">
					        <a href="#/bottling"><img class="animated pulse nav-icon" ng-src="{{imgsrc5}}" style=""/></a>
					      <center><div><h4>Bottling</h4></div></center>
					    </div>
					</div>
					</center>
				</div>
			</div>
			
			<form class="form-register form-signin" name="fermentationForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">

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
				  		<div class=" control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<textarea class="notes-input" cols="30" rows="10" ng-init="formData.notes=' ."'" . $fermentation['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes"/>'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Save</button>
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
	</div>
