<?php
// process.php

$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
if (empty($_POST['name']))
  $errors['name'] = 'Name is required.';

if (empty($_POST['style']))
  $errors['style'] = 'Style is required.';

if (empty($_POST['maltType']))
  $errors['style'] = 'Malt type is required.';

$name = $_POST['name'];
$style = $_POST['style'];
$maltType = $_POST['maltType'];
$description = $_POST['description'];

echo $name . " " . $style . " " . $maltType;



// return a response ==============

// response if there are errors
if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors']  = $errors;
} else {

  // if there are no errors, return a message
  $data['success'] = true;
  $data['message'] = 'Success!';
  $data['style'] = $style;
}

// return all our data to an AJAX call
echo json_encode($data);