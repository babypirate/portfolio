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
	<section class="portfolio">
	<!-- 	<h3 class="">
			Selected Works
		</h3>
 -->
		<!-- Intermezzo -->
		<div class="portfolio__item portfolio__item--intermezzo" onclick="location.href='intermezzo.php'">
				<div class="portfolio__text">	
					<h4 class="portfolio__subtitle">Corporate Sponsored Project</h4>
					<h1 class="portfolio__title portfolio__title-intermezzo">Intermezzo</h1>
					<h5 class="portfolio__subtitle">Shaping the Future of Mobility, Architecture, and Technology</h5>
					<p class="portfolio__tag">Automotive | Architecture | UX/UI Design</p>
					<a href="intermezzo.php" class="portfolio__btn intermezzo_btn">Fast forward to 2050 &#10230;</a>
				</div>
				<p class="portfolio__number">01</p>	
				<div class="portfolio__item__img--intermezzo">
					<img class="portfolio__item__img portfolio__item__img--intermezzo01" src="img/homepage/intermezzo_cover1.png" alt="Intermezzo - Adagio">
					<img class="portfolio__item__img portfolio__item__img--intermezzo03" src="img/homepage/intermezzo_cover3.png" alt="Intermezzo - Shoe Sensor">
					<img class="portfolio__item__img portfolio__item__img--intermezzo02" src="img/homepage/intermezzo_cover2.png" alt="Intermezzo - Stellantis community center">
				</div>
		</div>

		<!-- TeamUp -->
		<div class="portfolio__item portfolio__item--teamup" onclick="location.href='teamup.php'">
			<div class="portfolio__text">
				<h1 class="portfolio__title portfolio__title-teamup">TeamUp</h1>
				<h5 class="portfolio__subtitle">Build Better Habits Together</h5>
				<p class="portfolio__tag">Product Design | UX/UI Design | Motion Design </p>
				<a href="teamup.php" class="portfolio__btn teamup_btn">Start a new habit &#10230;</a>
			</div>
			<p class="portfolio__number">02</p>
			<img class="portfolio__item__img portfolio__item__img--teamup" src="img/homepage/teamup.png" alt="TeamUp mobile app mockup">	
		</div>

		<!-- CPY -->
		<div class="portfolio__item portfolio__item--cpy" onclick="location.href='corepower.php'">
			<div class="portfolio__text">
				<h1 class="portfolio__title portfolio__title-cpy">CorePower Yoga</h1>
			<!-- 	<h1 class="portfolio__title portfolio__title-cpy">Yoga</h1> -->
				<h5 class="portfolio__subtitle">CorePower Yoga Mobile App Redesign</h5>
				<p class="portfolio__tag">UX/UI Design</p>
				<a href="corepower.php" class="portfolio__btn cpy_btn">Check the class schedule &#10230;</a>
			</div>
			<p class="portfolio__number">03</p>
			<img class="portfolio__item__img portfolio__item__img--cpy" src="img/homepage/corepower.png" alt="CorePower Yoga mobile app mockup">	
		</div>

			<!-- WildTracker -->
		<div class="portfolio__item portfolio__item--wildtracker" onclick="location.href='wildlife.php'">
			<div class="portfolio__text">
				<h1 class="portfolio__title portfolio__title-wildtracker">Wild Tracker</h1>
				<h5 class="portfolio__subtitle">Track and Record Wildlife</h5>
				<p class="portfolio__tag">Mobile App Design and Development<p>
				<a href="wildlife.php" class="portfolio__btn wildtracker_btn">Track animals now&#10230;</a>
			</div>
			<p class="portfolio__number">04</p>
			<img class="portfolio__item__img portfolio__item__img--wildtracker" src="img/homepage/wildtracker.png" alt="wild tracker mobile app mockup">	
		</div>

		<!-- Johnny's Woodworking -->
		<div class="portfolio__item portfolio__item--johnny" onclick="location.href='johnny's woodworking.php'">
			<div class="portfolio__text">
				<h1 class="portfolio__title portfolio__title-johnny">Johnny's<br>Woodworking</h1>
				<h5 class="portfolio__subtitle">Online Wood Craft Store</h5>
				<p class="portfolio__tag">Responsive Web Design and Development</p>
				<a href="johnny's woodworking.php" class="portfolio__btn johnny_btn">Start shopping &#10230;</a>
			</div>
			<p class="portfolio__number">05</p>
			<img class="portfolio__item__img portfolio__item__img--johnny" src="img/homepage/johnny.png" alt="johnny's woodworking mobile app mockup">	
		</div>

			<!-- La Boheme -->
		<div class="portfolio__item portfolio__item--laboheme" onclick="location.href='laboheme.php'">
			<div class="portfolio__text">
				<h1 class="portfolio__title portfolio__title-laboheme">La Boheme</h1>
				<h5 class="portfolio__subtitle">Rebranding a French restaurant</h5>
				<p class="portfolio__tag">UI/UX Design, Graphic Design</p>
				<a href="laboheme.php" class="portfolio__btn laboheme_btn">Visit La Boheme &#10230;</a>
			</div>
			<p class="portfolio__number">06</p>
			<img class="portfolio__item__img portfolio__item__img--laboheme" src="img/homepage/la boheme.png" alt="La Boheme mobile app mockup">	
		</div>
	</section>






	<!-- Footer -->
	<!-- Include Footer -->
				<?php include "parts/footer.html" ?>

	<!-- <script src="js/index.js"></script> -->
</div>
</body>
</html>