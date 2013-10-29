<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Platform Talent Competition - $2000+ in Cash Prizes. One Stage. #ThePlatformNC</title>
		<meta property="og:title" content="The Platform Talent Competition - $2000+ in Cash Prizes. One Stage."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://theplatformnc.com"/>
		<meta property="og:image" content="<?php echo get_bloginfo('template_url'); ?>/assets/img/the-platform-logo.png" />
		<meta property="og:description" content="THE PLATFORM is a regional (NC, VA, SC) inspirational talent showcase! On November 23rd, 15 finalists will compete in front of a live audience for a $1000 Cash Prize."/>
		<meta property="fb:admins" content="25003118" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/assets/css/platform.css" />

		<?php wp_head(); ?>
	</head>
	<body>
		<section class="header">
			<h1 class="logo"><a href="<?php echo get_site_url(1); ?>?show_home=1"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/the-platform-logo.png"></a></h1>
			<ul class="nav">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<!--<li><a href="#sponsors">Sponsors</a></li>-->
			</ul>
			<ul class="mobile-nav">
				<li><a class="show-mobile-menu">Menu</a></li>
				<ul class="menu">
					<li><a href="">Home</a></li>
				</ul>
			</ul>
		</section>
		<section id="theplatform" class="white">
			<div class="container">
				<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<h2><?php the_title() ?></h2>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
		</section>
		<section id="auditions">
			<div class="container">
				<h2 class="orangered">Auditions <small>Be creative</small></h2>
				<div class="cols">
					<div class="col">
						<h3>1. Online</h3>
						<p>Monday, Oct. 28th at Midnight - Wednesday, Oct. 30th at Midnight, upload your 60 second YouTube video.</p>
						<p class="disclaimer">Registration Required at time of submission.</p>
						<p><a class="blue-bg" href="/contests/2013-online-auditions">Submit your entry</a></p>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26588142-6', 'theplatformnc.com');
  ga('send', 'pageview');

</script>
