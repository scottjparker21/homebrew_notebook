
<?php  require_once 'includes/session.php'; 

	$_SESSION['rsi'] = $_POST['rid'];

	if($_SESSION['rsi'] = 'read'){
		header( "Location: index.php#/review" );
	}else{
	header( "Location: index.php#/mash" );
	}

?>
