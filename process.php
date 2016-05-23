
<?php  require_once 'includes/session.php'; ?>

<?php
// process.php

$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
if (empty($_POST['name']))
  $errors['name'] = 'Name is required.';

if (empty($_POST['style']))
  $errors['style'] = 'Style is required.';

if (empty($_POST['maltType']))
  $errors['maltType'] = 'Malt type is required.';


// if (empty($_POST["userid"]))
// 	$errors['uid'] = "Cannot create recipe if not logged in.";

// response if there are errors
if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors']  = $errors;

}   else {
		$data['errors']= NULL;

		$name = $_POST['name'];
		$style = $_POST['style'];
		$maltType = $_POST['maltType'];
		$description = $_POST['description'];
			

		  // if there are no errors, return a message
		  $data['success'] = true;
		  $data['message'] = 'Success!';


			if (empty($_POST['name'])) {
				$_POST['name'] = NULL;
			}
			if (empty($_POST['style'])) {
				$_POST['style'] = NULL;
			}
			if (empty($_POST['malt_type'])) {
				$_POST['malt_type'] = NULL;
			}
			if (empty($_POST['description'])) {
				$_POST['description'] = NULL;
			}

		$pdo = Database::connect();

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO recipe (uid,name,style,malt_type,description) values(?, ?, ?, ?, ?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($_SESSION["userid"],$name,$style,$maltType,$description));
		            

		            $recipe_id = $pdo->lastInsertId();

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO recipe_step (recipe_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($recipe_id));

		            $rsi = $pdo->lastInsertId();
		            $_SESSION["rsi"] = $rsi;
		            // $data['rsi'] = $rsi;

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO boil (recipe_step_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($rsi));

		           
		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO bottling (recipe_step_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($rsi));

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO fermentation (recipe_step_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($rsi));

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO hops (recipe_step_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($rsi));

		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO mash (recipe_step_id) values(?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($rsi));

		            Database::disconnect();
    }

    // return a response ==============
	echo json_encode($data);

























