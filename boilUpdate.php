<?php  require_once 'includes/session.php'; ?>

<?php


// public function read(){
// 	try{
// 		$pdo = Database::connect();
// 		$sql = 'SELECT * FROM boil WHERE recipe_step_id = ?';
// 		$q = $pdo->prepare($sql);
// 		$q->execute(array($_SESSION['rsi']));
// 		$data = $q->fetchAll(PDO::FETCH_ASSOC);
// 	    Database::disconnect();
// 	    return $data;
// 	} catch (PDOException $error){

// 		header( "Location: 500.php" );
// 		//echo $error->getMessage();
// 		die();

// 	}

// }


$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['duration']))
//   $errors['duration'] = 'duration is required.';

// if (empty($_POST['hops_type']))
//   $errors['hops_type'] = 'hops_type is required.';

// if (empty($_POST['maltType']))
//   $errors['maltType'] = 'Malt type is required.';


// if (empty($_POST["userid"]))
// 	$errors['uid'] = "Cannot create recipe if not logged in.";

// response if there are errors
// if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
//   $data['success'] = false;
//   $data['errors']  = $errors;

// }   else {
// 		$data['errors']= NULL;
		
		// $duration = $_POST['duration'];
		// $hops_type = $_POST['hops_type'];
		// $hops_amt = $_POST['hops_amt'];
		// $time_added = $_POST['time_added'];
		// $notes = $_POST['notes'];
			
	 //    // if there are no errors, return a message
	 //    $data['success'] = true;
	 //   	$data['message'] = 'Success!';

		// if (empty($_POST['duration'])) {
		// 	$_POST['duration'] = NULL;
		// }
		// if (empty($_POST['hops_type'])) {
		// 	$_POST['hops_type'] = NULL;
		// }
		// if (empty($_POST['hops_amt'])) {
		// 	$_POST['hops_amt'] = NULL;
		// }
		// if (empty($_POST['time_added'])) {
		// 	$_POST['time_added'] = NULL;
		// }
		// if (empty($_POST['notes'])) {
		// 	$_POST['notes'] = NULL;
		// }
		// // $rsi = $_SESSION["rsi"];

		// $pdo = Database::connect();

		         
        // $pdo = Database::connect();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql = "UPDATE boil set duration = ?, hops_type = ?, hops_amt = ?, time_added = ?, notes = ? WHERE recipe_step_id = ?";
        // $q = $pdo->prepare($sql);
        // $q->execute(array($duration,$hops_type,$hops_amt,$time_added,$notes,2));
        // Database::disconnect();
        // header("Location: index.php");
        
         // Database::disconnect();
    // }

    // return a response ==============
	// echo json_encode($data);