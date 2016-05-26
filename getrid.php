
<?php  require_once 'includes/session.php'; ?>

<?php
// process.php
        // array to pass back data

$_SESSION['rid'] = $_POST['recipe_id'];
$data['foo'] = $_POST['recipe_id'];
$data['sess'] = $_SESSION['rid'] ;

    // return a response ==============
	echo json_encode($data);