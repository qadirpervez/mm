<?php
$currentPage = 'apply';
include 'header.inc';
include 'menu.inc';
?>
<!-- Start Form Heading -->
	<section class="apply-heading" id="apply-heading">
		<h3>Job Application Form</h3>
	</section>
<!-- End Form Heading -->
<!-- Start Application Form -->
	<section class="application-form">
		<h4>Application Form</h4><br />
		<form action="processEOI.php" id="applyform" method="post" name="applyform" novalidate="novalidate" >

		<fieldset>
			<legend>Personal Information</legend>
<!-- Job Reference Number -->
				<label for="Jobreferencenumber">Job reference number:</label>
				<input type="text" id="Jobreferencenumber" name="Jobreferencenumber" value=""
	maxlength="5" required="required" readonly="readonly" /><br />
<!-- First Name -->
				<label for="FirstName">First name:</label><input type="text" id="FirstName" name="firstname" value=""
	maxlength="20" required="required" /> <br />
<!-- Last Name -->
				<label for="LastName">Last name: </label><input type="text" id="LastName" name="lastname" value=""
	maxlength="20" required="required" /> <br />
<!-- Start Date of Birth -->
				<label>Date of Birth: </label>
<!-- Day Select Section -->
					<label for="Day">Day</label>
						<select name="day" id="Day">
							<option value="01" selected="selected" >01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
<!-- Month Select Section -->
					<label for="Month">Month</label>
						<select name="month" id="Month">
							<option value="01" selected="selected">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
<!-- Year Select Section -->
					<label for="Year">Year</label><input type="text" id="Year" name="year" value="" minlength="4" maxlength="4" required="required" />
		</fieldset><br />
<!-- End Date of Birth Section -->
<!-- Start Gender Section -->
		<fieldset>
		<legend>Gender</legend>
				<label>Select Gender: </label>
					<input type="radio" name="gender" id="male" value="male" checked="checked" /> Male<br />
  					<input type="radio" name="gender" id="female" value="female" /> Female<br />
  					<input type="radio" name="gender" id="other" value="other" /> Other
		</fieldset><br />
<!-- End Gender Section -->
<!-- Start Address Section -->
		<fieldset>
			<legend>Personal Address Information</legend>
<!-- Street Address Section -->
				<label for="Street">Street address:</label><input type="text" id="Street" name="street" value=""
		maxlength="40" required="required" />
<!-- Suburb/Town Section -->
				<label for="Town">Suburb/Town: </label><input type="text" id="Town" name="town" value=""
		maxlength="40" required="required"/>
<!-- State Selection Section -->
				<label for="State">State: </label>
					<select name="state" id="State">
						<option value="VIC" selected="selected">VIC</option>
						<option value="NSW">NSW</option>
						<option value="NSW">QLD</option>
						<option value="NT">NT</option>
						<option value="WA">WA</option>
						<option value="SA">SA</option>
						<option value="TAS">TAS</option>
						<option value="ACT">ACT</option>
					</select><br />
<!-- Postcode Section -->
				<label for="Postcode">Postcode: </label><input type="text" id="Postcode" name="postcode"
		value="" minlength="4" maxlength="4" required="required" />
		</fieldset><br />
<!-- Start Contact Information Section -->
		<fieldset>
			<legend>Contact Information</legend>
<!-- Email Information Section -->
				<label for="email">Email: </label><input type="email" name="email" id="email" placeholder="e.g.: xyz@abc.com" required="required" />
<!-- Phone Number Section -->
				<label for="phone">Phone number: </label><input type="tel" id="phone" name="phone" value="" placeholder="Contact Number" minlength="8" maxlength="12" required="required" /><br />
		</fieldset><br />
<!-- End Contact Information Section -->
<!-- Start Skills checkbox Section -->
		Skills:<br />
			<input type="checkbox" class="skills" id="c" name="skills[]" value="c,c++" /> <label for="c">C,C++</label><br />
			<input type="checkbox" class="skills" id="css" name="skills[]" value="css,html" /> <label for="css">CSS,HTML</label><br />
			<input type="checkbox" class="skills" id="php" name="skills[]" value="php,java" /> <label for="php">PHP,JAVA</label><br />
			<input type="checkbox" class="skills" id="dbms" name="skills[]" value="dbms" /> <label for="dbms">Database Management</label><br />
			<input type="checkbox" class="skills" id="python" name="skills[]" value="python" /> <label for="python">Python</label><br />
			<input type="checkbox" class="skills" id="otherskil" name="skills[]" value="other"  /> <label for="other">Other skills..</label>	<br /><br />
<!-- End Skills checkbox Section -->
<!-- Start other skills textarea Section -->
		<label for="otherskills">Other Skills:</label><br/>
			<textarea name="otherskills" id="otherskills" rows="10" cols="50" placeholder="Your comments"></textarea><br />
			<div id="errorBox">

			</div>
<!-- End Skills checkbox Section -->
<!-- Apply Button -->
		<input type="submit" name="submitBTN" value="Apply" id="apply-button" />
<!-- Reset Button -->
		<input type="reset" id="reset-button" />
		</form>
	</section>
	<script src="scripts/apply.js"></script>
		<script>
		load();
		</script>
<!-- End Application Form -->
<?php include 'footer.inc'; ?>
