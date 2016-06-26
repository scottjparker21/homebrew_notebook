<?php 
		require_once '../includes/database.php';
 		session_start();
		$rsi = $_SESSION['rsi'];
			$pdo = Database::connect();
			$sql = 'SELECT * FROM bottling WHERE recipe_step_id = ?';
			$q = $pdo->prepare($sql);
			$q->execute(array($rsi));
			$bottling = $q->fetch(PDO::FETCH_ASSOC);
		    Database::disconnect();
		    // return $data;
		// } catch (PDOException $error){
		// 	echo "something went wrong.";
		// 	//echo $error->getMessage();
		// 	die();
		// }

		 //    echo "<pre>";
			// print_r($bottling);
			// echo "</pre>";


?>
	<div id="bottling-background">
		<div class="col-lg-12">
			<center><h1 class="pacifico-jumbo animated fadeInLeft"> Bottling </h1></center>
		</div>	
		<div class="container">

			<div class="row">
				<div id="icon-box" class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<center>
					<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-2">
						<div class="img-responsive" ng-init="imgsrc1='assets/img/barley_b.svg'" ng-mouseover="imgsrc1='assets/img/barley_c.svg'" ng-mouseout="imgsrc1='assets/img/barley_b.svg'">
					        <a href="#/mash"><img class="" ng-src="{{imgsrc1}}" /></a>
					      <center><div><h4>Mash</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div  ng-init="imgsrc2='assets/img/boil_b.svg'" ng-mouseover="imgsrc2='assets/img/boil_c.svg'" ng-mouseout="imgsrc2='assets/img/boil_b.svg'">
					        <a href="#/boil"><img class="" ng-src="{{imgsrc2}}" style=""/></a>
					      <center><div><h4>Boil</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc3='assets/img/hops_b.svg'" ng-mouseover="imgsrc3='assets/img/hops_c.svg'" ng-mouseout="imgsrc3='assets/img/hops_b.svg'">
					        <a href="#/hops"><img class="" ng-src="{{imgsrc3}}" style=""/></a>
					      <center><div><h4>Hops</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive" ng-init="imgsrc4='assets/img/carboy_b.svg'" ng-mouseover="imgsrc4='assets/img/carboy_c.svg'" ng-mouseout="imgsrc4='assets/img/carboy_b.svg'">
					        <a href="#/fermentation"><img class="" ng-src="{{imgsrc4}}" style=""/></a>
					      <center><div><h4>Fermentation</h4></div></center>
					    </div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="img-responsive">
					        <a href="#/bottling"><img class="" ng-src="assets/img/bot_c.svg" style=""/></a>
					      <center><div><h4>Bottling</h4></div></center>
					    </div>
					</div>
					</center>
				</div>
			</div>
			
			<form class="form-register form-signin " name="bottlingForm" ng-submit="processForm()" enctype="multipart/form-data">
				<div class="form-register-with-email">
					<div class="form-white-background">

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
				    			<?php echo	'<textarea class="notes-input" cols="30" ng-init="formData.notes=' ."'" . $bottling['notes'] ."'" . '" type="text" name="notes" ng-model="formData.notes">'; ?>
				      			<span class="help-block" ng-show="errornotes">{{ errornotes }}</span> 
				    		</div>
				  		</div>
				  		<div class="form-row form-actions control-group">
				    		<div class="controls">
			
				      			<button id="send" type="submit" class="btn btn-success">Save</button>
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