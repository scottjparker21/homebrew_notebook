
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
  $errors['style'] = 'Malt type is required.';

$name = $_POST['name'];
$style = $_POST['style'];
$maltType = $_POST['maltType'];
$description = $_POST['description'];

// if (empty($_POST["userid"]))
// 	$errors['uid'] = "Cannot create recipe if not logged in.";

// response if there are errors
if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors']  = $errors;

}   else {

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
		            Database::disconnect();

    }

    // return a response ==============
	echo json_encode($data);

























