			<?php echo $_SESSION["userid"]; ?>
			<div class="col-lg-12">
				<center><h1 id="quicksand"> New Brew </h1></center>
			</div>
		
				<div class="container">

					<div id="messages" ng-show="message">{{ message }}</div>

					<form class="form-register form-signin" ng-submit="processForm()" enctype="multipart/form-data">
						<div class="form-register-with-email">
							<div class="form-white-background">

						  		<div class="form-title-row control-group">
						    		<label class="control-label">Name</label>
						    		<div class="controls">
						      			<input type="text" name="name" ng-model="formData.name">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label">Style</label>
						    		<div class="controls">
						      			<input type="text" name="style" ng-model="formData.style">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label">Malt Type</label>
						    		<div class="controls">
						      			<input type="text" name="maltType" ng-model="formData.maltType">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label">Description</label>
						    		<div class="controls">
						      			<input type="text" name="description" ng-model="formData.description"
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
		
			

