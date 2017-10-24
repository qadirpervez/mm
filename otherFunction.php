<?php
  function checkTable($conn, $database){
    $query = "SELECT count(*) as exist FROM information_schema.TABLES WHERE (TABLE_SCHEMA = '".$database."') AND (TABLE_NAME = 'eoi')";
    $result = $conn->query($query);
    $result = $result->fetch_assoc();
    if($result['exist'] > 0){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  function createTable($conn){
    $query = "CREATE TABLE `eoi` ( `EOInumber` INT(11) NOT NULL AUTO_INCREMENT , `job_ref_no` VARCHAR(255) NOT NULL , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `street` VARCHAR(255) NOT NULL , `town` VARCHAR(255) NOT NULL , `state` VARCHAR(255) NOT NULL , `post` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` VARCHAR(255) NOT NULL , `skills` VARCHAR(255) NULL , `other` VARCHAR(255) NULL , `status` VARCHAR(255) NOT NULL DEFAULT 'New' , PRIMARY KEY (`EOInumber`)) ENGINE = InnoDB";
    if($conn->query($query) === TRUE){
      return TRUE;
    } else {
      return FALSE;
    }

  }
  function validate($formData){
    $errorMsgs = [];
    $jobrefno = test_input($formData['Jobreferencenumber']);
    if(!preg_match("/^[a-zA-Z0-9]{6}$/",$jobrefno)){
      array_push($errorMsgs, "Invalid JOB reference number");
    }
    $firstName = test_input($formData["firstname"]);
    if (!preg_match("/^[a-zA-Z]{0,25}$/",$firstName)) {
      array_push($errorMsgs, "Only letters and white space allowed in First Name");
    }
    $lastname = test_input($formData["lastname"]);
    if (!preg_match("/^[a-zA-Z]{0,25}$/",$lastname)) {
      array_push($errorMsgs, "Only letters and white space allowed in Last Name");
    }
    $street = test_input($formData['street']);
    $town = test_input($formData['town']);
    $state = test_input($formData['state']);
    $postCode = test_input($formData['postcode']);
    if($state == 'VIC'){
      if (!preg_match("/^(800[0-9]|801[0-2]|3[0-9]{3})$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'NSW'){
      if (!preg_match("/^(3644|3691|3707|4375|4377|4380|4383|4385|[1-2][0-9]{3})$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'QLD'){
        if (!preg_match("/^(2406|9726|4[0-9]{3})$/",$postCode)) {
          array_push($errorMsgs, "Post Code is not valid");
        }
    } else if($state == 'NT'){
      if (!preg_match("/^((0|)8[0-9]{2}|909)$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'WA'){
      if (!preg_match("/^(6[0-9]{3})$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'SA'){
      if (!preg_match("/^((0|)872|5[0-9]{3})$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'TAS'){
      if (!preg_match("/^(7[0-9]{3})$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } else if($state == 'ACT'){
      if (!preg_match("/^((0|)200|2540|26[0-9]{2}|29[0-1][0-9])$/",$postCode)) {
        array_push($errorMsgs, "Post Code is not valid");
      }
    } // validated state with zip.
    if(strlen($street) > 40){
      array_push($errorMsgs, "Street cannot be greater tham 40 characters");
    }
    if(strlen($town) > 40){
      array_push($errorMsgs, "Town cannot be greater tham 40 characters");
    }
    $email = test_input($formData['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errorMsgs, "Email is not valid");
    }//email validate
    $phone = test_input($formData['phone']);
    if (!preg_match("/^[0-9 ]{8,12}$/",$phone)) {
      array_push($errorMsgs, "Phone is not valid");
    }//phone validated
    //validating skill other
    if(in_array("other", $formData['skills'])){
      if(empty($formData['otherskills'])){
        array_push($errorMsgs, "Please provide other skills");
      }
    }// other skill validated
    //validate dob
    $day = $formData['day'];
    $month = $formData['month'];
    $year = $formData['year'];
    $todayYear = date("Y");
    $todayMonth = date("m");
    $todayDay = date("d");
    $age = $todayYear - $year;
    if($todayMonth < $month || ($todayMonth == $month && $todayDay < $day)){
      $age--;
    }
    if($age < 15 || $age > 80){
      array_push($errorMsgs, "Age Should be not less than 15 and not greater than 80");
    }
    return $errorMsgs;
  } //validate function end
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
