<?php  require_once 'includes/session.php'; ?>

<?php


$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['yeast_type']))
//   $errors['yeast_type'] = 'yeast_type is required.';

// if (empty($_POST['pitching_temp']))
//   $errors['pitching_temp'] = 'pitching_temp is required.';

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
		
		$yeast_type = $_POST['yeast_type'];
		$pitching_temp = $_POST['pitching_temp'];
		$duration = $_POST['duration'];
		$notes = $_POST['notes'];

		$data['yeast_type']= $yeast_type;
		$data['pitching_temp']= $pitching_temp;
		$data['duration']= $duration;
		$data['notes']= $notes;
			
	    // if there are no errors, return a message
	    $data['success'] = true;
	   	$data['message'] = 'Success!';

		if (empty($_POST['yeast_type'])) {
			$_POST['yeast_type'] = NULL;
		}
		if (empty($_POST['pitching_temp'])) {
			$_POST['pitching_temp'] = NULL;
		}
		if (empty($_POST['duration'])) {
			$_POST['duration'] = NULL;
		}
		if (empty($_POST['notes'])) {
			$_POST['notes'] = NULL;
		}
		// $rsi = $_SESSION["rsi"];

		$pdo = Database::connect();

		         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE fermentation set yeast_type = ?, pitching_temp = ?, duration = ?, notes = ? WHERE recipe_step_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($yeast_type,$pitching_temp,$duration,$time_added,$notes,31));
        Database::disconnect();
       
        
         Database::disconnect();
    // }

    // return a response ==============
	echo json_encode($data);