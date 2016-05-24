<?php  require_once 'includes/session.php'; ?>

<?php


$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
// if (empty($_POST['color']))
//   $errors['color'] = 'color is required.';

// if (empty($_POST['abv']))
//   $errors['abv'] = 'abv is required.';

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
		
		$color = $_POST['color'];
		$abv = $_POST['abv'];
		$ibu = $_POST['ibu'];
		$notes = $_POST['notes'];

		$data['color']= $color;
		$data['abv']= $abv;
		$data['ibu']= $ibu;
		$data['notes']= $notes;
			
	    // if there are no errors, return a message
	    $data['success'] = true;
	   	$data['message'] = 'Success!';

		if (empty($_POST['color'])) {
			$_POST['color'] = NULL;
		}
		if (empty($_POST['abv'])) {
			$_POST['abv'] = NULL;
		}
		if (empty($_POST['ibu'])) {
			$_POST['ibu'] = NULL;
		}
		if (empty($_POST['notes'])) {
			$_POST['notes'] = NULL;
		}
		// $rsi = $_SESSION["rsi"];

		$pdo = Database::connect();

		         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE results set color = ?, abv = ?, ibu = ?, notes = ? WHERE recipe_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($color,$abv,$ibu,$notes,31));
        Database::disconnect();
       
        
         Database::disconnect();
    // }

    // return a response ==============
	echo json_encode($data);