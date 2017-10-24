<?php
$currentPage = 'enhancements';
include 'header.inc';
include 'menu.inc';
?>
<section  class="enhancement-list-ol">
<!-- Start Enhancement List Section -->
			<h3>My enhancement list</h3>
			<ol>
				<li>Image Hover Overlay Effect when hovered on to the <a href="about.html#myphoto">image</a> section.</li>
				<li>Transition Effect in the <a href="jobs.html#transition-button" class=""> "APPLY NOW!!!" </a> section</li>
				<li>Animation Effect in the <a href="jobs.html#job-desc"> "WE ARE HIRING" </a> section.</li>
			</ol>
		</section>
<!-- End Enhancement List Section -->
<section  class="enhancement-list-desc">
<!-- Start Enhancement List Section -->
			<h3>Enhancement Descriptions</h3>
			<section>
				<h6>Image Hover Overlay Effect when hovered on to the <a href="about.html#myphoto">image</a> section.</h6>
				<p>This is Image Hover Overlay Effect function used in CSS to create an overlay effect over an image when hover over by a mouse.
				I have used the Slide in right effect of the overlay effect on the figure of myself which is in the about.html page. In this effect I have used attributes like "transition", "overflow", "position"
				and mainly we have used the ".overlay" while defining the ".hover" function in the style.css
				I have used www.w3schools.com as a reference for the implementation of above effect. To access the reference link <a href="https://www.w3schools.com/css/tryit.asp?filename=trycss_css_image_overlay_slideright" class="">click here </a></p>
				<h6>Transition Effect in the <a href="jobs.html#transition-button" class=""> "APPLY NOW!!!" </a> section</h6>
				<p>This is one of the transition property that we can use in CSS. When you hover over a "div" element, the width or height or both of the widht and height of the div element changes with time.
				I have used the following things while implementing the transition property "transition-property" "transition-duration" in the css file.
				Here the transition-duration is used to set the time for the transion
				whereas the transition-property is used to indicate whether the height or width of the div has to be increased or decreased as a part of transition.
				I have taken the help of www.w3schools to impement this enhancement. Following is the link which will take you to the reference which I have used for ths effect.Link: <a href="https://www.w3schools.com/cssref/tryit.asp?filename=trycss3_transition-property" class="">click here </a></p>
				<h6>Animation Effect in the <a href="jobs.html#job-desc"> "WE ARE HIRING" </a> section.</h6>
				<p>I have implemented one of the many animation effects that are used in CSS. I have used the animation effect to change the background colour to another colour and back. When we specify the keyframe rules in a css style, the animation will gradually change from current style to a new style in a certai time. I have used the HIRING NOW part in
				the jobs.html page to experiment with this animation property where the black colour gradually changes to green and repeats infinitely with time.
				For this animation effect implementation I have taken guide from www.w3schools.com website. The specific reference link which I have used as a reference is given here. Link: <a href="https://www.w3schools.com/css/css3_animations.asp" class="">click here </a></p>
			</section>
		</section>

<?php include 'footer.inc'; ?>
