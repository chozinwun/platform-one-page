<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/assets/css/platform.css" />

		<?php wp_head(); ?>
	</head>
	<body>
		<section class="header">
			<h1 class="logo"><a href="<?php echo get_site_url(1); ?>?show_home=1"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/summit-web-horiz-white.png"></a></h1>
			<ul class="nav">
				<li><a href="">Home</a></li>
				<li><a href="#theplatform">The Platform</a></li>
				<li><a href="#auditions">Auditions</a></li>
				<li><a href="#scholarships">Scholarships</a></li>
				<li><a href="#faqs">FAQs</a></li>
				<!--<li><a href="#sponsors">Sponsors</a></li>-->
			</ul>
			<ul class="mobile-nav">
				<li><a class="show-mobile-menu">Menu</a></li>
				<ul class="menu">
					<li><a href="">Home</a></li>
					<li><a href="#theplatform">The Platform</a></li>
					<li><a href="#auditions">Auditions</a></li>
					<li><a href="#scholarships">Scholarships</a></li>
					<li><a href="#faqs">FAQs</a></li>
				</ul>
			</ul>
		</section>
		<section class="intro">
			<div class="slide">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/the-platform-logo.png" height="250px" />
				<p class="callout">$2000+ in Prizes. One Stage.</p>
			</div>
			<div class="countdown">
				<span class="message">In Person Auditions begin in</span>
				<ul class="timer">
					<li>
						<span class="days time">0</span>
						<span>Days</span>
					</li>
					<li>
						<span class="hours time">0</span>
						<span>Hours</span>
					</li>
					<li>
						<span class="minutes time">0</span>
						<span>Minutes</span>
					</li>
					<li>
						<span class="seconds time">0</span>
						<span>Seconds</span>
					</li>
				</ul>
			</div>
		</section>
		<section id="theplatform" class="white">
			<div class="container">
				<h2>What is The Platform?</h2>
				<div class="cols">
					<div class="col">
						<iframe width="100%" height="315" src="//www.youtube.com/embed/UdRhmzN1rnE?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col">
						<p>THE PLATFORM is a regional (NC, VA, SC) inspirational talent showcase! On November 23rd, 15 finalists will compete in front of a live audience for a $1000 Cash Prize.</p>
						<p>This is YOUR opportunity to win big and inspire someone with your gift. The Platform is open to the general public with No age requirements! So if you sing, dance, act or play the spoons, this is YOUR chance!</p>
						<p>No Talent? No Worries. College students! Enter to win thousands in scholarships!</p>
						<p>In person auditions are on November 16th, 2013.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="auditions">
			<div class="container">
				<h2 class="orangered">Auditions <small>Be creative</small></h2>
				<div class="cols">
					<div class="col">
						<h3>1. Online</h3>
						<p>Wednesday, Oct. 29th - Friday, Nov. 1st at Midnight, upload your 60 second YouTube video.</p>
						<p>Online auditions are closed.</p>
					</div>
					<div class="col">
						<h3>2. In Person</h3>
						<p>Saturday, November 16th 8AM - 5PM at New Jerusalem Cathedral, Greensboro, NC. </p>
						<p class="disclaimer">Registration Required. Must be completed by Thursday, November 14th.</p>
						<p><a class="blue-bg" href="/contests/2013-live-auditions">Register Now</a></p>
					</div>
				</div>
			</div>
		</section>
		<section id="scholarships" class="white">
			<div class="container">
				<h2>Scholarships</h2>
				<p>A portion of the proceeds from The Platform will go towards scholarships for NC students that are currently enrolled in college. Application for scholarship will be available on October 28th at Midnight.</p>
				<p><a class="green-bg" href="/contests/scholarship-giveaway">Complete Entry</a></p>
			</div>
		</section>
		<section id="faqs">
			<div class="container">
				<div class="cols">
					<div class="col">
						<h2 class="lightblue">FAQs</h2>
						<p>Q: Can I register the day of the audition in person?<br />A: No. Registration for in person auditions must be completed by Thursday November 14th.</p>
						<p>Q: Can I upload more that one video for online auditions?<br />A: No. Only one video per particpant will be accepted.</p>
						<p>Q: Are group auditions allowed?<br />A: Yes. Groups may have no more than 6 participants.</p>
						<p>Q: Is there an age requirement for auditioning?<br />A: No. Participants ages 17 and younger must be accompanied by a parent/legal guardian.<p>
						<p>Q: Is there a GPA requirement to win a scholarship?<br />A: No.</p>
						<p>Q: How can I contact The Summit for more information?<br />A: Feel free to e-mail us at <a href="mailto:thesummit@newjc.org">thesummit@newjc.org</a>.</p>
					</col>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="container">
				<p>&copy; 2013 The Summit College Ministry. All Rights Reserved.</p>
			</div>
		</section>

		<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/assets/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/assets/js/platform.js"></script>
	</body>
</html>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26588142-4']);
  _gaq.push(['_setDomainName', 'campusunity.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>