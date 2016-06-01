
<?php  require_once 'includes/session.php'; 

	$_SESSION['rsi'] = $_POST['rsid'];
	$_SESSION['rid'] = $_POST['rid'];

	header( "Location: index.php#/mash" );


?>
