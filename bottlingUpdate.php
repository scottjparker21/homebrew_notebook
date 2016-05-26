<?php  require_once 'includes/session.php'; ?>

<?php

session_start();
$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['btl_con']))
//   $errors['btl_con'] = 'btl_con is required.';

// if (empty($_POST['con_duration']))
//   $errors['con_duration'] = 'con_duration is required.';

// if (empty($_POST['maltType']))
//   $errors['maltType'] = 'Malt type is required.';


// if (empty($_POST["userid"]))
// 	$errors['uid'] = "Cannot create recipe if not logged in.";

// response if there are errors
// if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  // $data['success'] = false;
  // $data['errors']  = $errors;

// }   else {
		$data['errors']= NULL;
		
		$btl_con = $_POST['btl_con'];
		$con_duration = $_POST['con_duration'];
		$notes = $_POST['notes'];

		$data['btl_con']= $btl_con;
		$data['con_duration']= $con_duration;
		$data['notes']= $notes;
			
	    // if there are no errors, return a message
	    $data['success'] = true;
	   	$data['message'] = 'Success!';

		if (empty($_POST['btl_con'])) {
			$_POST['btl_con'] = NULL;
		}
		if (empty($_POST['con_duration'])) {
			$_POST['con_duration'] = NULL;
		}
		if (empty($_POST['notes'])) {
			$_POST['notes'] = NULL;
		}
		$rsi = $_SESSION["rsi"];

		         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE bottling set btl_con = ?, con_duration = ?, notes = ? WHERE recipe_step_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($btl_con,$con_duration,$notes,$rsi));
        Database::disconnect();

    // }

    // return a response ==============
	echo json_encode($data);