 
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
      		<div class="navbar-header">
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
          		</button>
        			<!-- <a class="navbar-brand" href="#"><h5> Milwaukee Glassware </h5><img src="MKE Glass" alt="" id="navlogo"></a> -->
      		</div>
      		<div class="collapse navbar-collapse" id="myNavbar">
        			<ul class="nav navbar-nav">
             			<li><a href="index.php">Home</a></li>
              		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Recipes<span class="caret"></span></a>
                  <li><a href=""></a></li>                
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
                  <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" id="search">
                      </div>
                  </form>
                  <?php if( isset( $_SESSION['permission'] ) && $_SESSION['permission'] == 1 ){ ?>
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-plus fa-fw"></i>&nbsp; Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu"> 
                            <li><a href="crud/address/index.php"> Address </a></li>
                            <li><a href="crud/bin/index.php"> Bin </a></li>
                            <li><a href="crud/category/index.php"> Category </a></li>
                            <li><a href="crud/customer/index.php"> Customer </a></li>
                            <li><a href="crud/payment/index.php"> Payment </a></li>
                            <li><a href="crud/product/index.php"> Product </a></li>
                            <li><a href="crud/shipment_center/index.php"> Shipment Center </a></li>
                            <li><a href="crud/subcategory/index.php"> Address </a></li>
                            <li><a href="crud/tag/index.php"> Tag </a></li>
                        </ul>
                  <?php } ?>
                  <?php if( isset( $_SESSION['permission'] ) && $_SESSION['permission'] == 2 ){ ?>
                      <li><a class="" href="customer.php"><i class="fa fa-user fa-fw"></i>&nbsp;<?php echo $_SESSION['first']; ?></a></li>
                  <?php } ?>
                  <?php if( isset( $_SESSION['userid'] ) ){ ?>
                        <li><i class="icon-user"></i><a class="btn" href="logout.php">Logout</a></li>
                  <?php } 
                      else{ ?>
                      <li><i class="icon-user"></i><a class="btn" href="login.php">Login</a></li>
                      <li><i class=""></i><a class="btn" href="register.php">Register</a></li>
                  <?php } ?>
        		  </ul>
      		</div>
  		</div>
	</nav>