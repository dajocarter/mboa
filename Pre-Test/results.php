<?php
/*
if (isset($_GET)) { // We are getting the results of the quiz
  // Get the results for each question
  // Display the results
}
*/    /*** mysql hostname ***/
if (isset($_POST)) { // We are posting the user's answers to the db
  require_once("../templates/config.php");
  
  // Store answers in variables
  $results = $_POST;
  $q1 = $results['q1'];
  $q2 = $results['q2'];
  $q3 = $results['q3'];
  $q4 = $results['q4'];
  $q5 = $results['q5'];

  $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare the sql statement to be executed
  $sql = "INSERT INTO Answers (q1, q2, q3, q4, q5) VALUES (:q1, :q2, :q3, :q4, :q5)";
  $query = $db -> prepare($sql);

  // Execute the prepared statement
  $query -> execute(array( 
    ':q1' => $q1, 
    ':q2' => $q2, 
    ':q3' => $q3,
    ':q4' => $q4, 
    ':q5' => $q5
  ));
}

?>

