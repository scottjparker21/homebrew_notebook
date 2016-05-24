<?php  require_once 'includes/session.php'; ?>

<?php


$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['name']))
//   $errors['name'] = 'name is required.';

// if (empty($_POST['amt']))
//   $errors['amt'] = 'amt is required.';

// if (empty($_POST['time_added']))
//   $errors['time_added'] = 'Time added is required.';


// if (empty($_POST["userid"]))
// 	$errors['uid'] = "Cannot create recipe if not logged in.";

// response if there are errors
// if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  // $data['success'] = false;
  // $data['errors']  = $errors;

// }   else {
		$data['errors']= NULL;
		
		$name = $_POST['name'];
		$amt = $_POST['amt'];
		$time_added = $_POST['time_added'];
		$step = $_POST['step'];

		$data['name']= $name;
		$data['amt']= $amt;
		$data['time_added']= $time_added;
		$data['step']= $step;
			
	 //    // if there are no errors, return a message
	    $data['success'] = true;
	   	$data['message'] = 'Success!';

		// if (empty($_POST['name'])) {
			$_POST['name'] = NULL;
		}
		if (empty($_POST['amt'])) {
			$_POST['amt'] = NULL;
		}
		if (empty($_POST['time_added'])) {
			$_POST['time_added'] = NULL;
		}
		if (empty($_POST['step'])) {
			$_POST['step'] = NULL;
		}
		// $rsi = $_SESSION["rsi"];

		$pdo = Database::connect();

		         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE hops set name = ?, amt = ?, time_added = ?, step = ? WHERE recipe_step_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name,$amt,$time_added,$step,31));
        Database::disconnect();
       
        
         Database::disconnect();
    // }

    // return a response ==============
	echo json_encode($data);