<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CodeShaala</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">




	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index.html">CodeShaala</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="homein.php" data-nav-section="home"><span>Home</span></a></li>
		            <li ><a href="catalog.html"><span>Course Catalog</span></a></li>
		            <li ><a href="forum.html"><span>Forum</span></a></li>
		            <li ><a href="profile.php"><span>Profile</span></a></li>
		            <li ><a href="homeout.php"><span>logout</span></a></li>
		            <li ><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
		          </ul>
		        </div>
			    </nav>

		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">Welcome <?php include 'conn.php';
		$usr=$_SESSION["usr"];
		$sql="SELECT * FROM usrinfo WHERE email='$usr';"; 
		$result=mysqli_query($link,$sql);
		$row=$result->fetch_assoc();
		echo $row['name'];?></h1>

                            <h2 class="to-animate">Where we try to put the fun back in coding. </h2>
                            <p class="to-animate">with a comprehensive and interactive way of learning and remembering, Codeshaala is the BEST place for Budding Aspirants</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-rocket"></i>
						<h2>Web Dev 1:<br>HTML</h2>
						<p>Learn the basics of the internet and coding in HTML .<br></p>
						<p><a href="htmlindex.html" class="btn btn-primary">Go!</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-rocket"></i>
						<h2>Web Dev 2:<br>CSS</h2>
						<p>Learn the use and application of CSS in websites.
                        </p>
						<p><a href="cssindex.html" class="btn btn-primary">Go!</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-rocket"></i>
						<h2>Web Dev 3:<br>javascript</h2>
						<p>Learn how to use javascript to make your websites dynamic.</p>
						<p><a href="jsindex.html" class="btn btn-primary">Go!</a></p>
					</div>
				</div>
            </div>
		</div>
	</section>


	<section id="fh5co-services" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<h2 class=" left-border to-animate">What makes us Different.</h2>
					<div class="row">
						<div class="col-md-8 subtext to-animate">
							<h3>With thousands of Alternatives, why choose CodeShaala</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-anchor"></i>
					<h3>Interactive! </h3>
					<p>The teaching UI is Interactive and filled with loads of fun and practical Exercises and tests providing the best nurture for a budding minds.</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-layers2"></i>
					<h3>Material!</h3>
					<p>Loads of Downloadable Content and  Refernce Material for quick brush up on the go and completely downloadble for offline reference and so much more</p>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-anchor"></i>
					<h3>Daily Tests and Exercises!</h3>
					<p>Let's face it, the best way to learn is through continous and comprhensive tests and here at codeshaala we jogg your memory with Pop-quizes,daily brush-ups and much more...</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-monitor"></i>
					<h3>Emulators!</h3>
					<p>here at codeShaala we believe that coding can ly be leant through rigurous pratical trial and error,so we decidied to make easy-access emulators so you can finally tinker with our code to understand it in its full extent</p>
				</div>

			</div>
		</div>
	</section>


	<section id="fh5co-testimonials" data-section="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Testimonials</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Why CodeShaala? Ask our Users.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;Loved it! Coding was never more fun!&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<p>
							Aditya,Student <span class="subtext">PES university</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;This is the best coding tutorial in the history of coding tutorials,probably ever!&rdquo;</p>
						</blockquote>
						<div class="author to-animate">

							<p>
							Animesh ,Student <span class="subtext">PES University</span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;I'd rate it a 5/7. &rdquo;</p>
						</blockquote>
						<div class="author to-animate">

							<p>
							Abhimanyu,Student<span class="subtext">PES University</span>
							</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>


	<section id="fh5co-contact" data-section="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Get In Touch</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Doubts? Bug? Follower?</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							#69, 13th cross, xNagar, Banglore 560086
						</li>
						<li><i class="icon-phone"></i> (123) 465-6789</li>
						<li><i class="icon-envelope"></i>xyz@gmail.com</li>

					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<h3>Contact Form</h3>
					<div class="form-group ">
						<label for="name" class="sr-only">Name</label>
						<input id="name" class="form-control" placeholder="Name" type="text">
					</div>
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="email" class="form-control" placeholder="Email" type="email">
					</div>
					<div class="form-group ">
						<label for="phone" class="sr-only">Phone</label>
						<input id="phone" class="form-control" placeholder="Phone" type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" value="Send Message" type="submit">
					</div>
					</div>
				</div>

			</div>


	</section>




	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
