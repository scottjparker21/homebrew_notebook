
<?php  require_once 'includes/session.php'; 

	$_SESSION['rsi'] = $_POST['rid'];

	header( "Location: index.php#/review" );


?>
