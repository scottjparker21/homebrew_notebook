
<?php  require_once 'includes/session.php'; 

	$_SESSION['rsi'] = $_POST['rsid'];
	echo "rid= " . $_POST['rid'];
	echo "rsi= " . $_POST['rsid'];
	die();


	header( "Location: index.php#/review" );


?>
