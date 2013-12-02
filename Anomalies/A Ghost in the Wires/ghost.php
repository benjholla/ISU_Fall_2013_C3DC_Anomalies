<?php
  // Set your voice URL to http://example.com/ghost.php
  // Test with /ghost.php?From=5355795023 (replace 5355795023 with your phone number to test)
  $solutionA = array('5355795023');
  $solutionB = array('5502971941');

  // do a little sanitization
  $phone = preg_replace('/[^0-9]/', '', $_REQUEST['From']);
  $phone = substr($phone, -10); // grab the last 10 digits (lazy way to strip country code if present)
  if(strlen($phone) === 10) {
    // phone is 10 characters in length (###) ###-####
    if (in_array($phone, $solutionA)){
      echo "<Response><Say>Congratulations! The code is \"Operation, Take, Down\".</Say></Response>";
    } else {
        if (in_array($phone, $solutionB)){
        echo "<Response><Say>Congratulations! The code is \"Kevin, Mitnick, is, free\".</Say></Response>";
      } else {
        // not a solution
        $digits = substr($phone, -10);
        $areaCode = substr($digits, 0, -7);
        $localNumber = substr($digits, -7);
        echo "<Response><Say>Sorry, " . $areaCode . "-" . substr($digits, 3, -4) . "-" . substr($digits, -4) . " is not the correct phone number.</Say></Response>";
      }
    }
  } else {
    echo "<Response><Reject/></Response>";
  }
