
<?php  require_once 'includes/session.php'; 

// process.php
        // array to pass back data


$_SESSION['rid'] = $_POST['rid'];

header( "Location: index.php#/mash" );

    // return a response ==============
?>
