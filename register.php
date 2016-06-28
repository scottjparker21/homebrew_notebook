<?php

    error_reporting(E_ALL);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    require_once 'includes/session.php';
    

    if ( !empty($_POST)) {
        // keep track validation errors
        $usernameError = null;
        $passwordError = null;
        $nameError = null;
        $emailError = null;
         
        // keep track post values
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
         
        // validate input
        $valid = true;

        if (empty($username)) {
            $usernameError = 'Please enter Username';
            $valid = false;
        }
         
        if (empty($password)) {
            $passwordError = 'Please enter valid Password';
            $valid = false;
        } 

        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }

        if (empty($email)) {
            $emailError = 'Please enter Email';
            $valid = false;
        }
         
        if ($valid) {
            try {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO user (username,password,name,email,permission) values(?, ?, ?, ?, ?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($username,$password,$name,$email,2));

                $_SESSION["userid"] = $pdo->lastInsertId();
                $_SESSION["permission"] = 1; 

                Database::disconnect();
                header("Location: index.php");
            } catch (PDOException $e){
                echo $e->getMessage();
                die();
            }
            
            $pdo = Database::connect();
            $user = ($_POST["username"]);
            $pass = ($_POST["password"]);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM user WHERE username = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($_SESSION["userid"]));
            $data = $q->fetch(PDO::FETCH_ASSOC);

            $userid = $data['id'];
            $username = $data['username'];
            $name = $data['name'];
            $permission = $data['permission'];
            $email = $data['email'];

            $_SESSION["userid"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["name"] = $name;
            $_SESSION["permission"] = $permission;
            $_SESSION["email"] = $email;

            Database::disconnect();
        }
    }
?>

<!DOCTYPE html>
	<html lang="en">
		<?php require_once 'includes/header.php'; ?>
		<body>
		<?php require_once 'includes/login-navbar.php'; ?>
            <br><br><br><br><br>
			<div class="container">
                
			  	<div class="span10 offset1">
                    <div class="form-white-background">           
                        <form class="form-register" action="register.php" method="post" enctype="multipart/form-data">
                            <div class="form-register-with-email">
                                <div class="form-white-background">
                                    <div class="form-title-row">
                                        <h3 class='white'>Create an Account</h3>
                                    </div>

                                      <div class=" form-row control-group <?php echo !empty($usernameError)?'error':'';?>">
                                        <label class="control-label white">Username</label>
                                        <div class="controls">
                                            <input name="username" type="text"  placeholder="" value="<?php echo !empty($username)?$username:'';?>">
                                            <?php if (!empty($usernameError)): ?>
                                                <span class="help-inline"><?php echo $usernameError;?></span>
                                            <?php endif; ?>
                                        </div>
                                      </div>
                                      <div class=" form-row control-group <?php echo !empty($passwordError)?'error':'';?>">
                                        <label class="control-label white">Password</label>
                                        <div class="controls">
                                            <input name="password" type="text" placeholder="" value="<?php echo !empty($password)?$password:'';?>">
                                            <?php if (!empty($passwordError)): ?>
                                                <span class="help-inline"><?php echo $passwordError;?></span>
                                            <?php endif;?>
                                        </div>
                                      </div>
                                      <div class=" form-row control-group <?php echo !empty($nameError)?'error':'';?>">
                                        <label class="control-label white">Full Name</label>
                                        <div class="controls">
                                            <input name="name" type="text" placeholder="" value="<?php echo !empty($name)?$name:'';?>">
                                            <?php if (!empty($nameError)): ?>
                                                <span class="help-inline"><?php echo $nameError;?></span>
                                            <?php endif;?>
                                        </div>
                                      </div>
                                      <div class=" form-row control-group <?php echo !empty($emailError)?'error':'';?>">
                                        <label class="control-label white">Email</label>
                                        <div class="controls">
                                            <input name="email" type="text" placeholder="" value="<?php echo !empty($email)?$email:'';?>">
                                            <?php if (!empty($emailError)): ?>
                                                <span class="help-inline"><?php echo $emailError;?></span>
                                            <?php endif;?>
                                        </div>
                                      </div>
                                      <div class=" form-row form-actions">
                                          <button type="submit" class="btn btn-success">Create</button>
                                       </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
		  <?php require_once 'includes/footer.php';?>
		</body>
	</html>