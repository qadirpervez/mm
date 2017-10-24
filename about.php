<?php
$currentPage = 'about';
include 'header.inc';
include 'menu.inc';
?>
<script src="scripts/enhancements.js"></script>
<section class="student-details">
  <h3>MY PERSONAL DETAILS</h3>
    <aside class="my-photo">
<!-- Start Figure -->
    <figure >
      <div class="my-photo1">
        <img src="images/myphoto.jpg" alt="My photo" class="myphoto" id="myphoto" width="460" height="538" />
        <div class="image-overlay">
          <div class="overlay-text">Hi World ! This is my photo :)</div>
        </div>
      </div>
    </figure>
<!-- Start Figure -->
</aside>
<!-- Start Definition Lists -->
  <section class="detail">
    <h6>My Details</h6>
    <dl class="detail-dl">
    <dt><strong>Name : </strong></dt>
    <dd> Mustaque Halder</dd>
    <dt><strong>Student ID : </strong></dt>
    <dd> 101028715</dd>
    <dt><strong>My tutor's name : </strong></dt>
    <dd> Jabed Chowdhury</dd>
    <dt><strong>Course : </strong></dt>
    <dd>Master of Science (in Network Systems)</dd>
    <dt><strong>Institution : </strong></dt>
    <dd>Swinburne University of Technology</dd>
    <dt><strong>My Current Address : </strong></dt>
    <dd>Unit 3/104-108 Springvale Road, Springvale, VICTORIA 171 (Melbourne, AUSTRALIA)</dd>
    <dt><strong>My Date of Birth : </strong></dt>
    <dd>March 25, 1994</dd>
    <dt><strong>Course Duration: </strong></dt>
    <dd>2 years</dd>
    </dl>
  </section>
<!-- End Definition Lists -->
<!-- Start Timetable -->
  <section class="my-timetable">

    <h6>MY TIMETABLE</h6>
    <table class="time-table">

      <tr>
        <th>Monday </th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
      </tr>
      <tr>
        <td>Gym(6:00-7:30)</td>
        <td>Gym(6:00-7:30)</td>
        <td>Gym(6:00-7:30)</td>
        <td>Gym(6:00-7:30)</td>
        <td>Gym(6:00-7:30)</td>
      </tr>
      <tr>
        <td>Office (10:30-22:30)</td>
        <td>Office (11:30-16:30)</td>
        <td>TNE70003 Lab (08:30-11:30)</td>
        <td>Self Study (08:30-11:30)</td>
        <td>Sports(Cricket) (8:30-11:30)</td>
      </tr>
      <tr>
        <td>Self Study (22:30-23:30)</td>
        <td>Sports(Soccer) (17:30-19:30)</td>
        <td>TNE80007 Lab (11:30-14:30)</td>
        <td>TNE80007 Lecture (14:30-16:30)</td>
        <td>Self Study (12:30-14:30)</td>
      </tr>
      <tr>
        <td>Yoga (23:30-23:45)</td>
        <td>Self Study(20:30-23:30)</td>
        <td>TNE70003 Lecture(14:30-16:30)</td>
        <td>COS60007 Lab(19:30-21:30)</td>
        <td>COS60007 Lecture(18:30-22:30)</td>
      </tr>

    </table>

  </section>
<!-- End Timetable -->
</section>
<!-- Start Contact Information -->
<section class="contact-info">
  <h6>MY CONTACT INFORMATION</h6>
    <div class="email">
      <p>Email Me: <a href="mailto:mynameismustaq@gmail.com">mynameismustaq@gmail.com</a></p>
      <p>Phone Number: +61481207106</p>
    </div>
</section>
<!-- End Contact Information -->

<button id="en-button">Click to see SWINBURNE fading in and out</button>
<section class="endiv">
<h6>swinburne</h6>
<div id="div1" class="diven" >S</div>

<div id="div2" class="diven" >W</div>

<div id="div3" class="diven" >I</div>

<div id="div4" class="diven" >N</div>

<div id="div5" class="diven" >B</div>

<div id="div6" class="diven" >U</div>

<div id="div7" class="diven" >R</div>

<div id="div8" class="diven" >N</div>

<div id="div9" class="diven" >E</div>
</section>

<p id="en-clock">TIME NOW: </p>
<!-- Start Email Section -->
<?php include 'footer.inc'; ?>
