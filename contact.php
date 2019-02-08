<?php
	//$GLOBALS['result'];
	
	composeMail();

	function composeMail(){
		$contactname = $_POST['contactname'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$message .= "Phone Number: ";
		$message .= $phone;
		$subject = $_POST['subject'];
		$headers = "From: ".$contactname." <".$_POST['useremail'].">"."\r\n";
		$headers .= "Reply-To: ".$contactname." <".$_POST['useremail'].">"."\r\n";
		$headers .= "Date: " . date("r")."\r\n";

		sendMail($subject, $message, $headers);
	}

	function sendMail($subject, $message, $headers){
		$to = "info@jabulaniprivateexpeditions.com";
		$theSubject = $subject;
		$theheaders = $headers;
		$theMessage = $message;
		
		if(!(mail($to, $theSubject, $theMessage, $theheaders))){
			$GLOBALS['result'] = "Oops, we are currently unable to accept your submission.  Please try again later!";
		}else{
			$GLOBALS['result'] = "Thank you for your submission.  A message has been mailed to the administrators.";
		}
	}
?>

<html>
	<head>
		<title>Jabulani Private Expeditions - Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Jabulani Private Expeditions</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="#">About</a>
									<ul>
										<li><a href="About/firm.html">Our Firm</a></li>
										<li><a href="About/services.html">Our Services</a></li>
										<li><a href="About/team.html">Our Team</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Destinations</a>
									<ul>
										<li>
											<a href="Destinations/zimbabwe.html">Zimbabwe &hellip;</a>
											<ul>
												<li><a href="Destinations/Zimbabwe/vic_falls.html">Victoria Falls</a></li>
												<li><a href="Destinations/Zimbabwe/hwange.html">Hwange</a></li>
												<li><a href="Destinations/Zimbabwe/great_zimbabwe.html">Great Zimbabwe</a></li>
												<li><a href="Destinations/Zimbabwe/eastern_highlands.html">Eastern Highlands</a></li>
											</ul>
										</li>
										<li>
											<a href="Destinations/botswana.html">Botswana &hellip;</a>
											<ul>
												<li><a href="Destinations/Botswana/okavango.html">Okavango Delta</a></li>
												<li><a href="Destinations/Botswana/chobe.html">Chobe National Park</a></li>
												<li><a href="Destinations/Botswana/Moremi.html">Moremi Game Reserve</a></li>
											</ul>
										</li>
										<li>
											<a href="Destinations/namibia.html">Namibia &hellip;</a>
											<ul>
												<li><a href="Destinations/Namibia/etosha.html">Etosha National Park</a></li>
												<li><a href="Destinations/Namibia/sossuss_vlei.html">Sossuss Vlei</a></li>
												<li><a href="Destinations/Namibia/fish_river.html">Fish River Canyon</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2><a href="#">Contact Us</a></h2>
								<p>
									Submitted!
								</p>
							</header>	
												
						<div class="row">
							<article class="col-8 col-12-mobile special">
								<p>
									<?php  //$GLOBALS['result']; 
										echo $GLOBALS['result']. "\r\n \r\n We will be in contact shortly!";
									?>
								</p>
								<ul class="actions">
									<li><a href="index.html" class="button"  style="background-color: #385700;">Return to Home Page</a></li>
									<li><a href="contact.html" class="button"  style="background-color: #385700;">Send Another Message</a></li>
								</ul>
							</article>
							
						</div>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
							
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>We are excited to embark with you on your expedition!</h3>
										</header>
										<p>We are always glad to interact with you, our beloved clients. Follow us on our social media platforms.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>