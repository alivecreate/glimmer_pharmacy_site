<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<?php require 'ext/head.php' ?>

	<link rel="stylesheet" href="css/colors.php?color=ca2c2e" type="text/css" />

	<title>Contact Us | Glimmer Biotech</title>

</head>


<body class="stretched page-transition" 
data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><img src='./images/loader1.gif' width='300'></div>">
	<div id="wrapper" class="clearfix">

		
		<?php include './ext/header.php' ?>

		<section id="page-title" class="page-title-parallax page-title-dark page-title-center"
         style="background: url('demos/medical/images/contact/page-title.jpg') center 90% / cover; padding:1rem 0" 
         data-bottom-top="background-position:0px -200px;" data-top-bottom="background-position:0px 0px;">

			<div class="container clearfix" style="z-index: 2">
				<div class="emphasis-title dark mb-0">
					<span class="before-heading" style="color: #FFF;">contact@glimmerbiotech.com</span>
					<h2 class="fw-bold ls0" style="color: #FFF;">Contact Us</h2>
				</div>
				<!-- <a href=https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" data-lightbox="iframe"><i class="icon-line-map i-large i-plain dark mx-auto"></i></a> -->
				<!-- <span class="fw-semibold ls1 text-uppercase" style="color: #EEE;">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span> -->
			</div>
			<div class="video-overlay" style="background: rgba(222,98,98,0.85); z-index: 1"></div>

		</section>
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row">
						<div class="col-lg-8">

							<h3>Send us an Email</h3>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-name">Name <small>*</small></label>
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-email">Email <small>*</small></label>
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
									</div>

									<div class="col-md-4 form-group">
										<label for="template-contactform-phone">Phone</label>
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
									</div>

									<div class="w-100"></div>

									<div class="col-md-12 form-group">
										<label for="template-contactform-subject">Subject <small>*</small></label>
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
									</div>

									<!-- <div class="col-md-4 form-group">
										<label for="template-contactform-service">Services</label>
										<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
											<option value="">-- Select One --</option>
											
										</select>
									</div> -->

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="template-contactform-message">Message <small>*</small></label>
										<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
									</div>

									<div class="col-12 form-group d-none">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

									<div class="col-12 form-group">
										<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>

						</div>

						<div class="col-lg-4">

						<?php include './ext/opening-hour.php' ?>
							
						</div>
					</div>

				</div>

			</div>
		</section><!-- #content end -->

		<?php include './ext/footer-contact.php' ?>

	</div>
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>

	<script>
		$('.contact').addClass('current');
	</script>

</body>
</html>