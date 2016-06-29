<?php 
		require_once '../includes/database.php';
		session_start();
		$rsi = $_SESSION['rsi'];
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
		 //    echo $rid;
		 //    echo "<pre>";
			// print_r($mash);
			// echo "</pre>";
?>
	<div id="mash-background">
		<div class="col-lg-12">
			<center><h1 class="pacifico-jumbo animated fadeInLeft"> Mash </h1></center>
		</div>	
		<div class="container">

			<div class="row">
				<div id="icon-box" class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<center>
					<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-2">
						<div class="img-responsive">
					        <a href="#/mash"><img class="animated pulse" ng-src="assets/img/barley_c.svg" /></a>
					      <center><div><h4>Mash</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div  ng-init="imgsrc2='assets/img/boil_b.svg'" ng-mouseover="imgsrc2='assets/img/boil_c.svg'" ng-mouseout="imgsrc2='assets/img/boil_b.svg'">
					        <a href="#/boil"><img class="animated pulse" ng-src="{{imgsrc2}}" style=""/></a>
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
			
			<form class="form-register form-signin" name="mashForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">
						

				  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errormalt_amt }">
				    		<label class="control-label">Malt Amount</label>
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
				  		<div class="control-group" ng-class="{ 'has-error' : errornotes }">
				    		<label class="control-label">Notes</label>
				    		<div class="controls">
				    			<?php echo	'<textarea class="notes-input" cols="30" rows="10" ng-init="formData.notes=' ."'" . $mash['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes"/>'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Save</button>
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
	</div>