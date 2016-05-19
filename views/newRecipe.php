			<div class="col-lg-12">
				<center><h1 id="quicksand"> New Brew </h1></center>
			</div>
			<center>
				<div class="container">
					<form class="form-register form-signin" ng-submit="processForm()" enctype="multipart/form-data">
						<div class="form-register-with-email">
							<div class="form-white-background">
						  		<div class="form-title-row control-group">
						    		<label class="control-label">Name</label>
						    		<div class="controls">
						      			<input type="text" id="inputUser" name="name" ng-model="formData.name">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label">Style</label>
						    		<div class="controls">
						      			<input type="text" name="style" id="style" ng-model="formData.style">
						    		</div>
						  		</div>
						  		<!-- <div class="form-title-row control-group">
						    		<label class="control-label" for="inputPassword">Malt Type</label>
						    		<div class="controls">
						      			<input name="password" id="malt" placeholder="">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label" for="inputPassword">Description</label>
						    		<div class="controls">
						      			<input name="password" id="description" placeholder="">
						    		</div>
						  		</div> -->
						  		<div class="form-row form-actions control-group">
						    		<div class="controls">
					
						      			<button id="send" type="submit" class="btn btn-success">Next Step</button>
						    		</div>
						  		</div>
						  	</div>	
						</div>
				  	</form>	
				</div>
			</center>
			<pre>
				{{ formData }}
			</pre>

