
<?php  require_once 'includes/session.php'; ?>

<?php
// process.php
        // array to pass back data
$data = array();

$data = json_decode(file_get_contents("php://input"));
$rid = mysql_real_escape_string($data->rid);



$_SESSION['rid'] = $_POST['rid'];
$data['foo'] = $rid;
$data['bar'] = $_POST['rid'];
$data['bar'] = $_POST['obj'];
$data['sess'] = $_SESSION['rid'] ;

    // return a response ==============
	echo json_encode($data);