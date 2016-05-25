<?php  require_once 'includes/session.php'; ?>
<!DOCTYPE html>
	<html ng-app="brewApp" lang="en">
		<?php require_once 'includes/header.php';?>
		<body style="background-color:#ede9ce;">
			<?php require_once 'includes/navbar.php';?>
			<div class="results">
			</div>
			<!-- <div class="jumbotron">
				<div class="container-fluid">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
              			<img class="" src="" alt="">
          			</div>
          		</div>
			</div> -->	
			<div class="container">	
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