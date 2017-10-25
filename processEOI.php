<?php
  if(isset($_POST['submitBTN'])){
    // if form submitted
    require_once('settings.php');
    $conn = @mysqli_connect($host, $user, $password, $database);
    $table = 0;
    if(!$conn){
      echo "UNABLE TO CONNECT TO THE SERVER";
    } else {
      require_once 'otherFunction.php';
      $tableExistCheck = checkTable($conn, $database);
      if($tableExistCheck){
        //table exist
        $table = 1;
      } else {
        // create table
        $tableCreated = createTable($conn);
        if($tableCreated){
          //table created
          $table = 1;
        } else {
          // table not created
          $table = 0;
        }
      }
    } // else ends where otherFunction is included.
    if($table == 1){
      // if table created or existed
      if(!empty($_POST['Jobreferencenumber']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['day']) && !empty($_POST['month']) && !empty($_POST['year']) && !empty($_POST['gender']) && !empty($_POST['street']) && !empty($_POST['town']) && !empty($_POST['state']) && !empty($_POST['postcode']) && !empty($_POST['email']) && !empty($_POST['phone'])){
        $validateData = validate($_POST);
        if(empty($validateData)){
          $skills = "";
          foreach ($_POST['skills'] as $skill) {
            $skills .= $skill." ";
          }
          $job_ref_no = $_POST['Jobreferencenumber'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $street = $_POST['street'];
          $town = $_POST['town'];
          $state = $_POST['state'];
          $post = $_POST['postcode'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $other = $_POST['otherskills'];
          $insertQuery = "INSERT INTO eoi (EOInumber, job_ref_no, first_name, last_name, street, town, state, post, email, phone, skills, other, status) VALUES (NULL, '$job_ref_no', '$firstname', '$lastname', '$street', '$town', '$state', '$post', '$email', '$phone', '$skills', '$other', 'New')";
          echo $insertQuery." <br />";
          $result = $conn->query($insertQuery);
          if($result === TRUE){
            echo "YOUR APPLICATION SUBMITTED <a href='index.php'>HOME</a>";
          } else {
            echo "Something Went Wrong";
          }
        } else {
          //error redirect with error.
          echo '<pre>';print_r($validateData);
          echo '<a href = "apply.php">Back</a>';
        }
      } else {
        echo "Please fill all the mandatory fields.";
      }
    }
  } else {
    // redirect as direct access
    echo '<script>window.location.href = "index.php";</script>';
  }
?>
