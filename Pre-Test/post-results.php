<?php
/*** mysql hostname ***/
if (isset($_POST)) { // We are posting the user's answers to the db
  require_once("../../templates/config.php");
  
  try {
    // Store answers in variables
    $results = $_POST;
    $q1 = $results['q1'];
    $q2 = $results['q2'];
    $q3 = $results['q3'];
    $q4 = $results['q4'];
    $q5 = $results['q5'];

    // Prepare the sql statement to be executed
    $insert = "INSERT INTO Answers (q1, q2, q3, q4, q5) VALUES (:q1, :q2, :q3, :q4, :q5)";
    $post = $db -> prepare($insert);

    // Execute the prepared statement
    $post -> execute(array( 
      ':q1' => $q1, 
      ':q2' => $q2, 
      ':q3' => $q3,
      ':q4' => $q4, 
      ':q5' => $q5
    ));
  }
  catch(PDOException $error) {
    echo $error->getMessage();
  }
}
