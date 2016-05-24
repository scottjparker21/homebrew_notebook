<?php  require_once 'includes/session.php'; ?>

<?php


$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['malt_amt']))
//   $errors['malt_amt'] = 'malt_amt is required.';

// if (empty($_POST['malt_type']))
//   $errors['malt_type'] = 'malt_type is required.';

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
		
		$malt_amt = $_POST['malt_amt'];
		$malt_type = $_POST['malt_type'];
		$water_amt = $_POST['water_amt'];
		$notes = $_POST['notes'];

		$data['malt_amt']= $malt_amt;
		$data['malt_type']= $malt_type;
		$data['water_amt']= $water_amt;
		$data['notes']= $notes;
			
	    // if there are no errors, return a message
	    $data['success'] = true;
	   	$data['message'] = 'Success!';

		if (empty($_POST['malt_amt'])) {
			$_POST['malt_amt'] = NULL;
		}
		if (empty($_POST['malt_type'])) {
			$_POST['malt_type'] = NULL;
		}
		if (empty($_POST['water_amt'])) {
			$_POST['water_amt'] = NULL;
		}
		if (empty($_POST['notes'])) {
			$_POST['notes'] = NULL;
		}
		// $rsi = $_SESSION["rsi"];

		$pdo = Database::connect();

		         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE mash set malt_amt = ?, malt_type = ?, water_amt = ?, notes = ? WHERE recipe_step_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($malt_amt,$malt_type,$water_amt,$notes,31));
        Database::disconnect();
       
        
         Database::disconnect();
    // }

    // return a response ==============
	echo json_encode($data);