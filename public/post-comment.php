<?php 

// DB connection gives us a $db global variable
require_once  'includes/db-connect.php';

$sql = 'INSERT INTO comments' .
  '(`name`, `comment`)' .
  'VALUES' .
  '("' . $_POST['name'] . '", "'. $_POST['comment'] . '")';

$result = mysqli_query($db, $sql);

// If the comment was inserted, redirect to the homepage where it'll be shown
if($result) {
  header('Location: /');
  die();
}

die('There was an error inserting the comment');
