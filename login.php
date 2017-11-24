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
		            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
		            <li><a href=""><span>Course Catalog</span></a></li>
		            <li><a href=""><span>Forum</span></a></li>
		            <li><a href=""><span>Log-In</span></a></li>
		            <li><a href=""><span>Sign-up</span></a></li>
		            <li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
                            <div class="col-md-12 section-heading text-center">
                                <br><br><br><br><br>
								<?php
								require_once 'conn.php';
								$errormessage='';
								$err='';
								$e='';
							if($_SERVER["REQUEST_METHOD"] == "POST"){
							if(isset($_POST['email']) and isset($_POST['password'])){
	                  $myusername = mysqli_real_escape_string($link,$_POST['email']);
					  
                      $mypassword = mysqli_real_escape_string($link,$_POST['password']);
					   $sql = "SELECT name FROM usrinfo WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
								if($count==1){
									session_start();
									$_SESSION['usr']=$myusername;
									$_SESSION['pass']=$mypassword;
									header("location: homein.html");
									
								}
								else{
									
									$errormessage="email or password is wrong";
								}
								//echo "blah....".$myusername;
								//echo "blh..".$mypassword;
							}
							else if(isset($_POST['Name']) and isset($_POST['DOB']) and isset($_POST['email1']) and isset($_POST['pass1'])and isset($_POST['pass2'])){
								$myusername = mysqli_real_escape_string($link,$_POST['email1']);
					  $myname = mysqli_real_escape_string($link,$_POST['Name']);
					  if(empty($myusername) or empty($myname) or empty($mypass1word) or empty($mypass2word) or empty($mydob)){
						  $e="required feild";
					  }
                      $mydob = mysqli_real_escape_string($link,$_POST['DOB']);
                      $mypass1word = mysqli_real_escape_string($link,$_POST['pass1']);
                      $mypass2word = mysqli_real_escape_string($link,$_POST['pass2']);
if($mypass1word==$mypass2word){
					  $sql="INSERT into usrinfo VALUES('$myusername','$mypass1word','$mydob','$myname');";
$result=mysqli_query($link,$sql);}
else {
	$err="Passwords do not match";
	
}

						
							}
								
								}
								?>
	<form id="log" action="" method="post">				<h2 class="to-animate" style="color:white; font-size: 3em">Log-In to Proceed!</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <br>
							<h3 style="color:white;font-size: 1.2em;">The world of coding awaits!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md" align="center" style="position: relative; left: 250px">
				<div class="col-md-6 to-animate">
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="email" name="email" class="form-control" placeholder="Email" type="email">
					</div>
                    <br>
					<div class="form-group ">
						<label for="password"  class="sr-only">Password</label>
						<input id="password" name="password" class="form-control" placeholder="Password" type="password">
					</div>
                    <br>
					<div class="form-group " >
						<input class="btn btn-primary btn-lg" value="Log-In" type="submit">
					</div>
                    <br>
					<?php echo $errormessage ?>
					</div>
				</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>
</form>
<form id="signin" action="" method="POST">
	<section id="fh5co-contact" data-section="sigin">
        <div class="gradient"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Sign-Up to get started!</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Ready.Steady.Go!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md" align="center" style="position: relative; left: 250px">
				

				<div class="col-md-6 to-animate">
					
					
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="text" class="form-control" placeholder="Name" name="Name" type="text">
					</div> <?php echo $e;?>
                    <br>
                    <div class="form-group ">
						<label for="email" class="sr-only">DOB</label>
						<input id="text" class="form-control" placeholder="DOB (DD/MM/YYYY)" name="DOB" type="text">
					</div><?php echo $e;?>
                    <br>
					<div class="form-group ">
						<label for="email" class="sr-only">Email</label>
						<input id="email" class="form-control" placeholder="Email" name="email1" type="email">
					</div><?php echo $e;?>
                    <br>
					<div class="form-group ">
						<label for="password" class="sr-only">Password</label>
						<input id="password" class="form-control" placeholder="Password" name="pass1" type="password">
					</div><?php echo $e;?>
                    <br>
                    <div class="form-group ">
						<label for="password" class="sr-only">Confirm Password</label>
						<input id="password" class="form-control" placeholder="Confirm Password" name="pass2" type="password">
					</div><?php echo $e;?>
                    <br>
					<?php echo $err; ?>
					<div class="form-group " >
						<input class="btn btn-primary btn-lg" value="Sign-Up!" type="submit"
                               style="background-color: #52d3aa">
					</div>
					</div>
				</div>

			</div>
		</div>
		
	</section>
	</form>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
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

