<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') { // We are getting the results of the quiz
  require_once("../../templates/config.php");
  try {
	  $select = "SELECT q1, q2, q3, q4, q5 FROM Answers";
	  $get = $db -> query($select);
	  //$get -> execute():

	  $results = array();

	  while ($row = $get->fetch(PDO::FETCH_ASSOC)) {
	    // Each row is one user's responses
	    // Save their response to each question
	    $q1 = $row['q1'];
	    $q2 = $row['q2'];
	    $q3 = $row['q3'];
	    $q4 = $row['q4'];
	    $q5 = $row['q5'];
	    // Store those responses in an array
	    $response = array('q1' => $q1, 'q2' => $q2, 'q3' => $q3, 'q4' => $q4, 'q5' => $q5);
	    // Push that array to an array holding every one's responses
	    $results[] = $response;
	  }
	  // Initialize counters
	  $q1_A = $q1_B = $q1_C = $q1_D = $q1_E = 
	  $q2_A = $q2_B = $q2_C = $q2_D = $q2_E = 
	  $q3_A = $q3_B = $q3_C = $q3_D = $q3_E = 
	  $q4_A = $q4_B = $q4_C = $q4_D = $q4_E = 
	  $q5_A = $q5_B = $q5_C = $q5_D = $q5_E = 0;

	  // Go through all responses and count number of response
	  foreach ($results as $result) { 
	  	foreach ($result as $question => $value) {
	  		if ( isset($value) ) { 
	  			${$question . '_' . $value} += 1;
	  		}
	  		else { 
  			 continue;
  			}
	  	}
	  }

	  $data = array(
	  	'q1' => array('A' => $q1_A, 'B' => $q1_B, 'C' => $q1_C, 'D' => $q1_D, 'E' => $q1_E, 'sum' => ($q1_A + $q1_B + $q1_C + $q1_D + $q1_E)), 
	  	'q2' => array('A' => $q2_A, 'B' => $q2_B, 'C' => $q2_C, 'D' => $q2_D, 'E' => $q2_E, 'sum' => ($q2_A + $q2_B + $q2_C + $q2_D + $q2_E)),
	  	'q3' => array('A' => $q3_A, 'B' => $q3_B, 'C' => $q3_C, 'D' => $q3_D, 'E' => $q3_E, 'sum' => ($q3_A + $q3_B + $q3_C + $q3_D + $q3_E)),
	  	'q4' => array('A' => $q4_A, 'B' => $q4_B, 'C' => $q4_C, 'D' => $q4_D, 'E' => $q4_E, 'sum' => ($q4_A + $q4_B + $q4_C + $q4_D + $q4_E)),
	  	'q5' => array('A' => $q5_A, 'B' => $q5_B, 'C' => $q5_C, 'D' => $q5_D, 'E' => $q5_E, 'sum' => ($q5_A + $q5_B + $q5_C + $q5_D + $q5_E))
	  );
	  echo json_encode( $data );
  }
  catch(PDOException $error) {
	    echo $error->getMessage();
	}
}