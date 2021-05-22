<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hanling Wang Portfolio Website</title>
	<link rel="shortcut icon" type="image/png" href="img/HanlingWang_logo.png"/>
	<link rel="stylesheet" 
	href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.typekit.net/snk1zkr.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/grid.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

 <div class="preload">
	<img class="preload-img" src="img/HanlingWang_logo.png" alt="">
		<div class="spinner">
		  <div class="bounce1"></div>
		  <div class="bounce2"></div>
		  <div class="bounce3"></div>
		</div>
		<h5 class="preload-text">LOADING...</h5>
	</div>

<div class="preload-transition">
	<div class="landingpage">
		
			<!-- Include Header -->
				<?php include "parts/header.html" ?>
		
			<!-- Intro -->
			<section class="intro">
				<h1 class="intro__title intro__title--intro-1">
					I am Hanling Wang,
				</h1>

				<h1 class="intro__title intro__title--intro-2">
					a UX designer.
				</h1>
	
				<p class="intro__body">
					I am passionate about crafting <span class="high-light">thoughtful user experience</span>. I believe good design can <span class="high-light">make a positive difference</span> and <span class="high-light">enrich people’s lives.</span>
					<br>Formerly a UX design intern @ <a href="https://www.asml.com/en">ASML</a> PEG GUI Team.
				</p>
			</section>

			<h5 class="intro-action">Selected Works &#8595;</h5>
	</div>	

	<!-- Selected Works -->
	<section class="portfolio row gap small large xlarge">

		<div class="portfolio__card intermezzo col-xs-12"  onclick="location.href='intermezzo.php'">
			<img class="card__img card__img-high" src="img/intermezzo-bg.png" alt="Adagio App Mockup">
			<div class="card__text tr">
				<p class="card__overline">Corporate Sponsored Project</p>
				<h4 class="card__title">Intermezzo</h4>
				<h5 class="card__subtitle">Shaping the Future of Mobility, Architecture, and Technology</h5>
				<p class="card__tag">Automotive | Architecture | UX/UI Design</p>
				<a href="intermezzo.php" class="card__btn">Fast forward to 2050 &#10230;</a>
				<p class="card__number number-right">01</p>
			</div>
		</div>
	

	<!-- TeamUp -->
		<div class="portfolio__card teamup overflow-card col-xs-12 col-lg-6" onclick="location.href='teamup.php'">
			<img class="card__device" src="img/homepage/teamup2.png" alt="TeamUp mobile app mockup">
			<div class="img-group">
				<img class="card__img" src="img/teamup-bg.jpg" alt="tracking habit">
			</div>
			<div class="card__text">
				<h4 class="card__title">TeamUp</h4>
				<h5 class="card__subtitle">Build Better Habits Together</h5>
				<p class="card__tag">Product Design | UX/UI Design | Motion Design</p>
				<a href="teamup.php" class="card__btn">Start a new habit &#10230;</a>
				<p class="card__number">02</p>		
			</div>
		</div>

		<!-- CPY -->
		<div class="portfolio__card overflow-card cpy col-xs-12 col-lg-6" onclick="location.href='corepower.php'">
			<img class="card__device" src="img/homepage/corepower.png" alt="CorePower Yoga mobile app mockup">
			<div class="img-group">
				<img class="card__img" src="img/cpy-bg2.jpeg" alt="yoga class">	
			</div>
			<div class="card__text">
				<h4 class="card__title">CorePower Yoga</h4>
				<h5 class="card__subtitle">CorePower Yoga Mobile App Redesign</h5>
				<p class="card__tag">UX/UI Design</p>
				<a href="corepower.php" class="card__btn">Check the class schedule &#10230;</a>
				<p class="card__number">03</p>		
			</div>
		</div>


	<!-- WildTracker -->
		<div class="portfolio__card wildtracker overflow-card col-xs-12 col-lg-6" onclick="location.href='wildlife.php'">
			<img class="card__device" src="img/homepage/wildtracker.png" alt="wild tracker mobile app mockup">
			<div class="img-group">
				<img class="card__img" src="img/wildlife-bg.jpg" alt="wild animal">	
			</div>
			<div class="card__text tr">
				<h4 class="card__title">Wild Tracker</h4>
				<h5 class="card__subtitle">Track and Record Wildlife</h5>
				<p class="card__tag">Mobile App Design and Development</p>
				<a href="wildlife.php" class="card__btn">Track animals now&#10230;</a>
				<p class="card__number number-right">04</p>		
			</div>
		</div>
	
	<!-- Johnny's Woodworking -->
	<div class="portfolio__card johnny overflow-card col-xs-12 col-lg-6" onclick="location.href='johnny's woodworking.php'">
		<img class="card__device" src="img/homepage/johnny.png" alt="johnny's woodworking mobile app mockup">
		<div class="img-group">
			<img class="card__img" src="img/Johnny-bg2.jpg" alt="A man is doing woodworking">
		</div>
		<div class="card__text tr">
			<h4 class="card__title">Johnny's Woodworking</h4>
			<h5 class="card__subtitle">Online Wood Craft Store</h5>
			<p class="card__tag">Responsive Web Design and Development</p>
			<a href="johnny's woodworking.php" class="card__btn">Start shopping &#10230;</a>
			<p class="card__number number-right">05</p>		
		</div>
	</div>

		<!-- La Boheme -->
		<div class="portfolio__card laboheme overflow-card col-xs-12 col-lg-6" onclick="location.href='laboheme.php'">
			<img class="card__device" src="img/homepage/la boheme.png" alt="La Boheme mobile app mockup">
			<div class="img-group">
				<img class="card__img" src="img/laboheme-bg.jpg" alt="Interior of La Boheme">
			</div>
			<div class="card__text">
				<h4 class="card__title">La Boheme</h4>
				<h5 class="card__subtitle">Rebranding a French restaurant</h5>
				<p class="card__tag">UI/UX Design, Graphic Design</p>
				<a href="laboheme.php" class="card__btn">Visit La Boheme &#10230;</a>
				<p class="card__number">06</p>		
			</div>
		</div>


			<!-- Motion Graphic Design -->
		<div class="portfolio__card motion col-xs-12 overflow-card col-xs-12 col-lg-6" onclick="location.href='motion.php'">
			<img class="card__img" src="img/homepage/yoga.png" alt="">
			<div class="card__text">
				<h4 class="card__title">Motion Graphics</h4>
				<h5 class="card__subtitle">A collection of my motion graphic works</h5>
				<a href="motion.php" class="card__btn">Enjoy watching &#10230;</a>
				<p class="card__number">07</p>
			</div>
			</div>
		</div>
	</section>




	<!-- Footer -->
	<!-- Include Footer -->
				<?php include "parts/footer.html" ?>

	<!-- <script src="js/index.js"></script> -->
</body>
</html>