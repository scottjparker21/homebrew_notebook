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
             			<li><a href="/index.php">Home</a></li>
                  
                  <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Recipes<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li ng-class="{ active: isActive('/myRecipes')}"><a href="#/recipes">My Recipes</a></li>
                        <li ng-class="{ active: isActive('/newRecipe')}"><a href="#/newRecipe">New Recipe</a></li>
                        <li ng-class="{ active: isActive('/boil')}"><a href="#/boil">Boil</a></li>
                        <li ng-class="{ active: isActive('/bottling')}"><a href="#/bottling">Bottling</a></li>
                        <li ng-class="{ active: isActive('/fermentation')}"><a href="#/fermentation">Fermentation</a></li>
                        <li ng-class="{ active: isActive('/hops')}"><a href="#/hops">Hops</a></li>
                        <li ng-class="{ active: isActive('/mash')}"><a href="#/mash">Mash</a></li>
                        <li ng-class="{ active: isActive('/results')}"><a href="#/results">Results</a></li>
                      </ul> 
                  <li><a href=""></a></li>   -->              
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
                        
                    <?php if( isset($_SESSION['permission'])){ ?>
                      <li><a class="" href=""><i class="fa fa-user fa-fw"></i>&nbsp;<?php echo $_SESSION['name']; ?></a></li>
                    <?php } ?>
                    <?php if( isset( $_SESSION['permission'] )){ ?>
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