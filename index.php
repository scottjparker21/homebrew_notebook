<?php  require_once 'includes/session.php'; ?>
<!DOCTYPE html>
	<html ng-app="brewApp" lang="en" style="background-color:#ede9ce;">
		<?php require_once 'includes/header.php';?>
		<body >
			<?php require_once 'includes/navbar.php';?>			
	
			<div class="container" style="background-color:#ede9ce;">	
				<div id="content">
				
					<div class="row">
						<div class="col-lg-12">
						<!-- content -->
							<div id="main">
						        <div ng-view></div>
						    </div>
						    
						</div>
					</div>
				</div>
				<br>
			</div>
			<?php require_once 'includes/footer.php';?>
		</body>
	</html>