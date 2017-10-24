<?php
$currentPage = 'manage';
include 'header.inc';
include 'menu.inc';
?>
<div class="messages">
  <?php
  if(isset($_GET['success'])){
    if($_GET['success'] == 'delete'){
      echo '<p>Sucessfully Deleted every applicants of that JOB</p>';
    } else if($_GET['success'] == 'failed'){
      echo '<p>Deletion Failed</p>';
    } else if($_GET['success'] == 'changed'){
      echo '<p>Status Changed</p>';
    } else if($_GET['success'] == 'unchanged'){
      echo '<p>Status Not Changed</p>';
    }
  }
  ?>
</div>
<?php
require_once('settings.php');
$conn = @mysqli_connect($host, $user, $password, $database);
if($conn){
  if(isset($_GET['jrn_delete']) && !empty($_GET['jrn_delete'])){
    $jrn_delete = $_GET['jrn_delete'];
    $queryDelete = "DELETE FROM eoi WHERE job_ref_no = '$jrn_delete'";
    if($conn->query($queryDelete) === TRUE){
      echo '<script>window.location.href="manage.php?success=delete"</script>';
    } else {
      echo '<script>window.location.href="manage.php?success=failed"</script>';
    }
  }
  if(isset($_GET['eoinumber']) && isset($_GET['change_status'])){
    if(!empty($_GET['eoinumber'])){
      if($_GET['change_status'] == 'New' || $_GET['change_status'] == 'Current' || $_GET['change_status'] == 'Final' ){
        $status = $_GET['change_status'];
        $queryChange = "UPDATE eoi SET `status` = '$status' WHERE `EOInumber` = ".$_GET['eoinumber'];
        if($conn->query($queryChange) === TRUE){
          echo '<script>window.location.href="manage.php?success=changed"</script>';
        } else {
          echo '<script>window.location.href="manage.php?success=unchanged"</script>';
        }
      }
    }
  }
  $where = '';
  if(isset($_GET['jrn']) && !empty($_GET['jrn'])){
    $jrn = $_GET['jrn'];
    $where .= " AND `job_ref_no` = '$jrn' ";
  }
  if(isset($_GET['jrn']) && !empty($_GET['fname'])){
    $where .= " AND `first_name` LIKE '%" .$_GET['fname']."%' ";
  }
  if(isset($_GET['jrn']) && $_GET['lname']){
    $where .= " AND `last_name` LIKE '%" .$_GET['lname']."%' ";
  }
  $query = "SELECT * FROM eoi WHERE 1 = 1 ".$where;
  $all = $conn->query($query);
}
?>
<div class="content">
  <div class="form-div">
    <form class="search-form">
      <fieldset>
        <legend>Search for applicants</legend>
        <label for="jrn">Job Reference Number:</label>
        <input type="text" name="jrn" id="jrn" /><br />
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" /><br />
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" /><br />
        <input type="submit" value="Search" id="apply-button" />
      </fieldset>
    </form>
  </div>
  <div class="applicant-data">
    <?php
    if($all->num_rows > 0){
    ?>
    <table>
      <th>Applicant Details</th>
      <tr>
        <td>EOI NUMBER</td>
        <td>Job Reference No</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Address</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Skills</td>
        <td>Other Skills</td>
        <td>Status</td>
        <td>Change Status</td>
      </tr>
      <?php
      while ($single = $all->fetch_assoc()) {
				echo '<tr>
          <td>' . $single['EOInumber'] . '</td>
          <td>' . $single['job_ref_no'] . '</td>
					<td>' . $single['first_name'] . '</td>
          <td>' . $single['last_name'] . '</td>
					<td>' . $single['street'] . ', ' . $single['town'] . ', ' . $single['state'] . '- ' . $single['post'] . '</td>
					<td>' . $single['email'] . '</td>
					<td>' . $single['phone'] . '</td>
					<td>' . $single['skills'] . '</td>
					<td>' . $single['other'] . '</td>
					<td>' . $single['status'] . '</td>
          <td>
            <form>
              <input type="hidden" name="eoinumber" value="' . $single['EOInumber'] . '" />
              <select name="change_status">
                <option value="New">New</option>
                <option value="Current">Current</option>
                <option value="Final">Final</option>
                <input type="submit" value="Change" id="apply-button" />
              </select>
            </form>
          </td>
				</tr>';
			}?>
    </table>
    <?php
    } else {
      echo "NO Data FOUND";
    }
    ?>
  </div>
  <div class="form-div">
    <form class="search-form">
      <fieldset>
        <legend>Danger Zone, DELETE</legend>
        <label for="jrn_delete">Job Reference Number:</label>
        <input type="text" name="jrn_delete" id="jrn_delete" /><br />
        <input type="submit" value="DELETE" id="apply-button" />
      </fieldset>
    </form>
  </div>
</div>
<?php include 'footer.inc'; ?>
