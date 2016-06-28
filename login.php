<?php require_once 'includes/session.php' ?>
<!DOCTYPE html>
		<html lang="en">
		<?php require_once 'includes/header.php'; ?>
			<body>
				<?php require_once 'includes/login-navbar.php';?>
				<br><br><br><br><br>
				<center>
				<div class="container">
					<form class="form-register form-signin" method="post" action="auth.php" enctype="multipart/form-data">
						<div class="form-register-with-email">
							<div class="form-white-background">
								<div class="form-title-row">
                                    <h3 class='white'>Login</h3>
                                </div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label white" for="inputUsername">Username</label>
						    		<div class="controls">
						      			<input type="text" id="inputUser" name="username" placeholder="Username">
						    		</div>
						  		</div>
						  		<div class="form-title-row control-group">
						    		<label class="control-label white" for="inputPassword">Password</label>
						    		<div class="controls">
						      			<input type="password" name="password" id="inputPass" placeholder="Password">
						    		</div>
						  		</div>
						  		<div class="form-row form-actions control-group">
						    		<div class="controls">
						      			<button id="send" type="submit" class="btn btn-success">Sign in</button>
						    		</div>
						  		</div>
						  	</div>	
						</div>
				  	</form>	
				</div>
			</center>
			<?php require_once 'includes/footer.php';?>
			</body>
		</html>