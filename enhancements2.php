<?php
$currentPage = 'enhancements2';
include 'header.inc';
include 'menu.inc';
?>
<section  class="enhancement-list-ol">
<!-- Start Enhancement List Section -->
			<h3>My enhancement list 2</h3>
			<ol>
				<li>jQuery fadeToggle() Method. Click on the <a href="about.php#en-button"> Click to see SWINBURNE fading in and out </a> button in About page.</li>
				<li>The setInterval() Method displays current time.<a href="about.php#en-clock" class="">Click Here</a> to see the time now.</li>
			</ol>
		</section>
<!-- End Enhancement List Section -->
<section  class="enhancement-list-desc">
<!-- Start Enhancement List Section -->
			<h3>Enhancement Descriptions</h3>
			<section>
				<h6>jQuery fadeToggle() Method. Click on the <a href="about.php#en-button"> Click to see SWINBURNE fading in and out </a> button in the About page.</h6>
				<p>This is jQuery fadeToggle() Method function used in Javascript to create a FADE IN and FADE OUT effect over a section when clicked on the button by a mouse.
				The jQuery fadeToggle() method toggles between the fadeIn() and fadeOut() methods. If the elements are faded out, fadeToggle() will fade them in. If the elements are faded in, fadeToggle() will fade them out.
				The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.
				I have used www.w3schools.com as a reference for the implementation of above effect. To access the reference link <a href="https://www.w3schools.com/jquery/jquery_fade.asp" class="">click here </a></p>
				<h6>The setInterval() Method displays current time.<a href="about.php#en-clock" class="">Click Here</a> to see the time now.</h6>
				<p>This is one of the timings function that we can use in Javascript. The setInterval() method repeats a given function at every given time-interval.
				The first parameter is the function to be executed. The second parameter indicates the length of the time-interval between each execution.
				I have taken the help of www.w3schools.com to impement this enhancement. Following is the link which will take you to the reference which I have used for ths effect.Link: <a href="https://www.w3schools.com/js/js_timing.asp" class="">click here </a></p>

			</section>
		</section>

<?php include 'footer.php'; ?>
