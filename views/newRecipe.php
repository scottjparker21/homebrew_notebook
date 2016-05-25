			<?php echo $_SESSION["userid"]; ?>
			<div class="col-lg-12">
				<center><h1 id="quicksand"> New Brew </h1></center>
			</div>
				
				<div class="container">

					

					<form class="form-register form-signin" ng-submit="processForm()" enctype="multipart/form-data">
						<div class="form-register-with-email">
							<div class="form-white-background">
								<!-- success message -->
								<div id="message" ng-show="message">{{ message }}</div>

						  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorName }">
						    		<label class="control-label">Name</label>
						    		<div class="controls">
						      			<input type="text" name="name" ng-model="formData.name">
						      			<span class="help-block" ng-show="!errorName">{{ errorName }}</span> 
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorStyle}">
						    		<label class="control-label">Style</label>
						    		<div class="controls">
						      			<input type="text" name="style" ng-model="formData.style">
						      			<span class="help-block" ng-show="!errorStyle">{{ errorStyle }}</span> 
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorMaltType }">
						    		<label class="control-label">Malt Type</label>
						    		<div class="controls">
						      			<input type="text" name="maltType" ng-model="formData.maltType">
						      			<span class="help-block" ng-show="!errorMaltType">{{ errorMaltType }}</span> 
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group" ng-class="{ 'has-error' : errorDescription }">
						    		<label class="control-label">Description</label>
						    		<div class="controls">
						      			<input type="text" name="description" ng-model="formData.description">
						      			<span class="help-block" ng-show="errorDescription">{{ errorDescription }}</span> 
						    		</div>
						  		</div>
						  		<div class="form-row form-actions control-group">
						    		<div class="controls">
					
						      			<button id="send" type="submit" ng-click="go('/mash')" class="btn btn-success">Next Step</button>
						    		</div>
						  		</div>
						  		<pre>
									{{ formData }}
								</pre>
						  	</div>	
						</div>
				  	</form>	
				</div>
		
			

