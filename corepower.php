<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CorePower Yoga</title>
	<link rel="shortcut icon" type="image/png" href="img/HanlingWang_logo.png"/>
	<link rel="stylesheet" 
	href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.typekit.net/snk1zkr.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/casestudy.css">
	<link rel="stylesheet" href="css/cpy.css">


	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
	<div class="casestudy__landingpage casestudy-landingpage--cpy">
			<!-- Include Header -->
				<?php include "parts/header.html" ?>
		
<!-- Hero image part -->
		<section class="casestudy__hero">
			<div class="portfolio__item portfolio__item--cpy hero__item hero__item--cpy">
				<div class="portfolio__text hero__text">	
					<h1 class="portfolio__title hero__title">CorePower</h1>
					<h1 class="portfolio__title hero__title">Yoga</h1>
					<h4 class="portfolio__subtitle hero__subtitle">Find the Right Yoga Class For You</h4>
					<h5 class="portfolio__tag hero__tag">UX/UI Design</h5>
				</div>
				<img class="portfolio__item__img portfolio__item__img--cpy hero__img hero__img--cpy" src="img/cpy/cpyhero_mockup.png" alt="CorePower Yoga mobile app mockup">	
			</div>
		</section>
	</div>

<!-- Overview -->
	<section class="casestudy__section white overview">
		<div class="section__flexcontent">
			<div class="content__item">
				<h4 class="section__title">CorePower Yoga Mobile Redesign</h4>
				<p class="content__copy">Improve the usability by optimizing the searching flow, adding an onboarding process, and building new desired features.</p>
				<p class="content__copy"><small>*Disclaimer: I am not affiliated with CorePower Yoga. All logos and trademarks belong to CorePower Yoga. This was an unsolicited design 			exploration.
				</small></p>
			</div>
			<div class="overview-list">
				<div class="overview__item">
					<h5>My role</h5>
					<p>User research</p>
					<p>Interaction design</p>
					<p>Prototyping</p>
					<p>User testing</p>
				</div>
				<div class="overview__item">
					<h5>Timeline</h5>
					<p>7 weeks</p>
					<p> (Jun - Aug 2019)</p>
				</div>
					<div class="overview__item">
					<h5>Tools</h5>
					<p>Sketch</p>
					<p>InVision</p>
				</div>
			</div>
		</div>
	</section>

<!-- Intro -->
	<section class="casestudy__section">
		<div class="main_title">
			<h1 class="number">01</h1>
			<h2 class="title">Introduction</h2>
		</div>

		<div class="section__flexcontent ">
			<div class="content__item flex-1">
				<h4 class="section__title">CorePower Yoga Studios</h4>
				<p class="content__copy">CorePower Yoga is the largest chain of yoga studios in the US. It has more than 200 locations nation-wide and offers different types of yoga classes.
				</p>
			</div>
			<div class="content__item flex-1">
				<img src="img/cpy/cpy studio.png" alt="">
			</div>
		</div>

			<div class="section__flexcontent flex-center flex-reverse">
			<div class="content__item">
				<h4 class="section__title">CorePower Yoga Mobile App</h4>
				<p class="content__copy">CorePower Yoga App allows customers to locate CorePower  studios, check class schedules, and track their activities. 
				</p>
			</div>
			<div class="content__item">
				<img class="cpy_app" src="img/cpy/cpy app.png" alt="">
			</div>
		</div>
	</section>

<!-- Problems -->
	<section class="casestudy__section white problem">
		<div class="main_title tr">
			<h1 class="number">02</h1>
			<h2 class="title">Problems</h2>
		</div>

		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title">Find problems by analyzing the current app</h4>
					<p class="content__copy">As a CorePower Yoga app user, I have always felt the app is not intuitive and the features can be cumbersome to use. So I analyzed the app in order to gain a better understanding of the problems. Here are three major problems I want to address in the redesign:
				</p>
			</div>
			<div class="content__item flex-1">
			</div>
		</div>
	<!-- Problem 1 -->
		<div class="section__flexcontent flex-end section__flexcontent--problem">
			<div class="content__item problem1">
				<h5 class="section__title">Problem 1</h5>
				<h5 class="section__title">Information architecture doesn’t match users’  mental models</h5>
				<p class="content__copy">On the choose location page, some grouping of the locations don’t follow real-world conventions and are confusing to users. After choosing the location, all the studios in that area are listed on the page. However, the studio names are not familiar to users and only provide limited information. Users need to look up more information in order to choose the right studio. 
				</p>
			</div>
			<div class="content__item">
				<img class="img-problem" src="img/cpy/problem1.png" alt="">
			</div>
		</div>
	<!-- Problem 2 -->
		<div class="section__flexcontent flex-end flex-reverse section__flexcontent--problem">
			<div class="content__item problem2">
				<h5 class="section__title">Problem 2</h5>
				<h5 class="section__title">Inconsistent user flow leads to confusion</h5>
				<p class="content__copy">When users want to select locations to view class schedules, they start the user flow by choosing locations but end up in building filters. This inconsistent user flow fails to meet users’ expectations. Mixing the chosen location flow with the building filter flow increases users’ cognitive load and causes users to make mistakes.
				</p>
			</div>
			<div class="content__item">
				<img class="img-problem" src="img/cpy/problem2.png" alt="">
			</div>
		</div>
	<!-- Problem 3 -->
		<div class="section__flexcontent flex-end section__flexcontent--problem">
			<div class="content__item problem3">
				<h5 class="section__title">Problem 3</h5>
				<h5 class="section__title">Inconsistent features between the mobile app and  the website</h5>
				<p class="content__copy">On the CorePower Yoga website, users can sign up to try a free week’s yoga class, check class price and the membership fee. But these features and information do not exist in the CorePower yoga app. This enforced users to switch between the app and the website to achieve their goals.
				</p>
			</div>
			<div class="content__item">
				<img class="img-problem" src="img/cpy/problem3.png" alt="">
			</div>
		</div>
	</section>

<!-- Design Goals -->
	<section class="casestudy__section">
		<div class="main_title">
			<h1 class="number">03</h1>
			<h2 class="title">Goals</h2>
		</div>

		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title">Redesign Goals</h4>
					<p class="content__copy">My goal is to redesign the app to make it more intuitive so users can find their desired information effectively and effortlessly. The goal is broken down into three parts:
				</p>
			</div>
			<div class="content__item flex-1">
			</div>
		</div>

		<div class="section__flexcontent flex-center goals">
			<div class="content__item">
				<img class="goal-icon1" src="img/cpy/goal1.png" alt="">
				<h5 class="section__title tc">Improve findability and discoverability</h5>
			</div>
			
			<div class="content__item">
				<img class="goal-icon2" src="img/cpy/goal2.png" alt="">
				<h5 class="section__title tc">Eliminate unnecessary learning and confusion</h5>
			</div>

			<div class="content__item">
				<img class="goal-icon3" src="img/cpy/goal3.png" alt="">
				<h5 class="section__title tc">Maintain consistency</h5>
			</div>
		</div>
	</section>

<!-- Design Process -->
	<section class="casestudy__section white">
		<div class="main_title tr">
			<h1 class="number">04</h1>
			<h2 class="title">Design Process</h2>
		</div>

		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<img src="img/cpy/design process.png" alt="">
			</div>	
		</div>
	</section>

<!-- User Research -->
	<section class="casestudy__section">
		<div class="main_title">
			<h1 class="number">05</h1>
			<h2 class="title">User Research</h2>
		</div>

		<div class="section__flexcontent demographic-research">
			<div class="content__item">
				<h4 class="section__title">Demographic Research</h4>
				<p class="content__copy">I conducted demographic research to identify the target audience of CorePower yoga. </p>
			</div>
			
			<div class="content__item">
				<p class="content__copy">CorePower Yoga’s primary target market is females aged 25 to 54 who care about fitness and health. They have at least one college degree and most have household incomes above $75K. They live in densely populated urban areas in the United States. </p>
			</div>

			<div class="content__item">
				<p class="content__copy">The secondary market is males between the ages of 25 and 35. They have at least one college degree. They have disposable incomes and are open to new ideas.</p>
			</div>
		</div>

		<div class="section__flexcontent flex-column">
			<div class="content__item">
				<h5 class="section__title">CorePower Yoga Audience Demographics</h5>
			</div>
			<div class="content__item">
				<img src="img/cpy/demographic data.png" alt="">
			</div>
		</div>
	</section>

<!-- User interview -->
	<section class="casestudy__section white">
		<div class="section__flexcontent flex-column flex-center">
			<div class="content__item tc">
				<h4 class="section__title">User Interviews</h4>
				<p class="content__copy">I conducted user interviews with three target audiences. To observe how they interact with the CorePower yoga app, they were asked to complete specific tasks. After that, I asked them about what they liked and disliked about the app in order to understand their pain points and expectations.</p>
			</div>
			
			<div class="content__item">
				<h5 class="section__title tc">Key Findings</h5>
				<div class="keyfindings">
					<p class="content__copy flex-1">1. The users had a difficult time finding the yoga studio since they had to choose one from a list with only the studios’ names. More information was needed such as the studio’s address, distance, and relative location.</p>
					<p class="content__copy flex-1">2. The filter feature was confusing to users because it was different from filters common in mobile apps. It didn’t meet users’ expectations, so they stopped using it. </p>
				</div>
				<div class="keyfindings">
					<p class="content__copy flex-1">3. Users got lost when completing a task because the page did not indicate where they were or what actions they should take.</p>
					<p class="content__copy flex-1">4. Not sure which type of yoga class they should choose since there was no detailed information.</p>
				</div>
			</div>
		</div>
	</section>

<!-- App Reviews -->

	<section class="casestudy__section app-reviews">
		<div class="section__flexcontent flex-column flex-center">
			<div class="content__item tc">
				<h4 class="section__title">App Reviews</h4>
				<p class="content__copy">I researched CorePower yoga app reviews in Apple App Store and Google Play to gather additional data on users’ demands.</p>
			</div>
			<div class="content__item app-review-imgs">
				<img class="flex-1" src="img/cpy/app review 1.png" alt="">
				<img class="flex-1" src="img/cpy/app review 2.png" alt="">
			</div>

			<div class="content__item">
				<h5 class="section__title tc">Key Findings</h5>
				<div class="keyfindings">
					<p class="content__copy flex-1 tc">View class schedule without logging into the app</p>
					<p class="content__copy flex-1 tc">Remember users often visited studio locations</p>
					<p class="content__copy flex-1 tc">Only apply the filter when needed</p>
					<p class="content__copy flex-1 tc">Add the class price</p>
				</div>	
			</div>
		</div>
	</section>

<!-- Ideation -->
	<section class="casestudy__section persona">
		<div class="main_title tr">
			<h1 class="number">06</h1>
			<h2 class="title">Ideation</h2>
		</div>

<!-- Persona -->
		<div class="section__flexcontent flex-center persona-1">
			<div class="content__item flex-1">
				<h4 class="section__title">Persona</h4>
				<p class="content__copy">I constructed three personas to represent patterns of users with different goals and behaviors.</p>
			</div>
			<div class="content__item flex-1">
				<img class="persona-img" src="img/cpy/persona1.jpg" alt="">
			</div>
		</div>
		<div class="section__flexcontent flex-center persona-2">
			<div class="content__item">
				<img class="persona-img" src="img/cpy/persona2.jpg" alt="">
			</div>
			<div class="content__item">
				<img class="persona-img" src="img/cpy/persona3.jpg" alt="">
			</div>
		</div>
	</section>

<!-- context scenarios -->
	<section class="casestudy__section context-scenarios">
		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">Context Scenarios</h4>
				<p class="content__copy">Context Scenarios are powerful tools that I use to bridge the research-design gap. I developed three context scenarios for each persona to focus on how they would use the redesigned app to achieve their goals and also help me extract design requirements.</p>
			</div>

			<div class="content__item carousel">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<img src="img/cpy/context scenario1.jpg" alt="Sarah's context scenario" style="width:100%">
					</div>
					<div class="mySlides fade">
						<img src="img/cpy/context scenario2.jpg" alt="Iva's context scenario" style="width:100%">
					</div>
					<div class="mySlides fade">
						<img src="img/cpy/context scenario3.jpg" alt="Matthew's context scenario" style="width:100%">
					</div>
				
				
					<!-- next and previous buttons -->
				 <span class="prev">&#10094;</span>
	  		 <span class="next">&#10095;</span>
				</div>
				<br>
				<!-- dots -->
				<div style="text-align:center">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div>
	</section>

	
<!-- Design requirements -->
	<section class="casestudy__section white">
		<div class="section__flexcontent flex-column">
			<h4 class="section__title">Design Requirements</h4>
			<div class="design_requirements">
				<div class="content__item">
					<h5 class="section__title">1. Provide new users guidance and details on how to sign up for the free trial</h5>
					<p class="content__copy">A free trial is appealing to users, but they probably want more information before they decide to sign up for it. Guidance should explain how the free trial works, introduce different class types, and assist users in picking the right class to begin with.</p>
				</div>
				<div class="content__item">
					<h5 class="section__title">2. Visualizing search results</h5>
					<p class="content__copy">By using a map and the relative location, users can locate the studios more easily.</p>
				</div>
				<div class="content__item">
					<h5 class="section__title">3. Improve the usability of the filter</h5>
					<p class="content__copy">Use the common filter design to make it easier to learn and use.</p>
				</div>
			</div>
			<div class="design_requirements">
				<div class="content__item">
					<h5 class="section__title">4. Add a class purchase feature</h5>
					<p class="content__copy">Users don’t have to switch to CorePower Yoga’s website to buy classes.</p>
				</div>
				<div class="content__item">
					<h5 class="section__title">5. Allow users to browse without logging in</h5>
					<p class="content__copy"> If users just need to view class schedules, they do not need to sign up or login.</p>
				</div>
			</div>
		</div>	
	</section>

<!-- Wireflows -->
	<section class="casestudy__section wireflows">
		<div class="section__flexcontent">
			<div class="content__item">
				<h4 class="section__title">Wireflows</h4>
				<p class="content__copy">Based on the context scenarios and sketches, I developed task-oriented wireframes that translated the design requirements into specific interaction steps.</p>
			</div>
			<div class="content__item">
			</div>
		</div>

    <div class="carousel">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="img/cpy/flow1.png" alt="Sarah's flow1" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/flow2-1.png" alt="Iva's flow2-1" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/flow2-2.png" alt="Matthew's flow2-2" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/flow3.png" alt="Matthew's flow-3" style="width:100%">
				</div>
			
			
				<!-- next and previous buttons -->
				<span class="prev">&#10094;</span>
				<span class="next">&#10095;</span>
			</div>
			<br>
			<!-- dots -->
			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</div>
	</section>

<!-- Prototyping -->
	<section class="casestudy__section persona white">
		<div class="main_title">
			<h1 class="number">07</h1>
			<h2 class="title">Prototyping</h2>
		</div>

<!-- paper prototyping -->
		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title">Paper Prototyping & User Testing</h4>
				<p class="content__copy">I created paper prototypes based on the wireframes and evaluated them with three users. This enabled me to observe the interaction between users and the interfaces and identify problems.</p>
			</div>
			<div class="content__item flex-1">
				<img class="persona-img" src="img/cpy/user-testing.png" alt="">
			</div>
			</div>
			<div class="section__flexcontent flex-column">
				<h5 class="section__title">Feedback from testers:</h5>
				<div class="flex-multiple">
					<div class="content__item">
						<h5 class="section__title">Task 1</h5>
						<p class="content__copy">1. Users felt confused about the yoga level page since there were only beginner and advanced levels to choose from. They were expecting intermediate level.<br>2. Users did not want to read long texts. They pointed out that the class information was too long so that they just ignored it.</p>
					</div>
					<div class="content__item">
						<h5 class="section__title">Task 2</h5>
						<p class="content__copy">1. Users said the home page was clumsy because there was no clear visual hierarchy. They also felt awkward seeing their names on the home page.
						<br>2.The “see class schedules” button was not attached to the studio card so users did not know its function. Also, the interface didn't indicate clearly which studio was selected.
						<br>3.Users failed to connect the bookmark icon to the function of saving classes.</p>
					</div>
						<div class="content__item">
						<h5 class="section__title">Task 3</h5>
						<p class="content__copy">1. Although testers completed task 3 smoothly, some complained that the home page was not clear to view and unorganized.</p>
					</div>
				</div>
			</div>
	</section>

	<!-- Hi-fi prototyping -->
	<section class="casestudy__section yellow">
		<div class="section__flexcontent">
			<div class="content__item">
				<h4 class="section__title">Prototyping</h4>
				<p class="content__copy">I modified my design based on feedback from testers and created the first version prototypes.  </p>
			</div>
			<div class="content__item">
			</div>
		</div>

		<div class="carousel">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="img/cpy/prototype1.png" alt="Sarah's prototype1.png" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/prototype2-1.png" alt="Iva's prototype2-1.png" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/prototype2-2.png" alt="Iva's prototype2-2.png" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src="img/cpy/prototype3.png" alt="Matthew's prototype3.png" style="width:100%">
				</div>
			
			
				<!-- next and previous buttons -->
				<span class="prev">&#10094;</span>
				<span class="next">&#10095;</span>
			</div>
			<br>
			<!-- dots -->
			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</div>
	</section>

<!-- Evaluation -->
	<section class="casestudy__section persona white">
		<div class="main_title tr">
			<h1 class="number">08</h1>
			<h2 class="title">Evaluation</h2>
		</div>

<!-- paper prototyping -->
		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">Clickable Prototype Testing</h4>
				<p class="content__copy">I conducted think-aloud user testing using the clickable prototype. In general, all participants were able to complete task 2 and 3 smoothly. For task 1, some participants were uncertain which button to click first: the “Search for classes” button or the “Sign Up for Free Week” button. Some testers prefer to check out the class schedule first before signing up for the free trial. If they could find a class they wanted to attend, they would sign up for Free Week. Some participants got lost on the class list page because they didn't realize each card was clickable.</p>
			</div>
			<div class="content__item flex-1">
				<img class="flex-child-small-img" src="img/cpy/user-testing2.png" alt="">
			</div>
		</div>

		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">Expert Review</h4>
				<p class="content__copy">I invited Julia, who is a UX designer and also a member of CorePower Yoga, to review my design, in order to identify more usability issues. 
				</p>
			</div>
			<div class="content__item">
				<p class="content__copy">
					1. Rethink how to prioritize elements on the home screen. The home screen lacks hierarchy and looks cluttered. Keep the most important features on the home screen, and remove others. Class schedules, for instance, should be given higher priority than class histories.
				</p>
				<p class="content__copy">
					2. Signing up for Free Week is too long. It is better to have fewer steps for new users.
				</p>
				<p class="content__copy">
					3. Thin text is not very readable on mobile screens.
				</p>  
			</div>
		</div>
	</section>

<!-- Hi-fi Iteration -->
	<section class="casestudy__section">
		 <div class="main_title">
			<h1 class="number">09</h1>
			<h2 class="title">Iteration</h2>
		</div>
<!-- User flow iteration -->
		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">Iteration of the User Flow</h4>
				<p class="content__copy">During the testing, I found that first-time users wanted to browse class and studio information before they decided to try the free trial. In that case, I divided user flow 1 into two parts to better match users' mental models.</p>
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/userflowv2.png" alt="">
			</div>
		</div>
	</section>

<!-- landing page iteration -->
	<section class="casestudy__section white">
		<div class="section__flexcontent flex-center">
				<h4 class="section__title">Key Screens Iteration</h4>
		</div>
		<div class="section__flexcontent flex-column flex-center">
			<div class="content__item">
				<img class="iteration-img" src="img/cpy/landingpagev1v2.png" alt="">
			</div>
			<div class="content__item">
				<h5 class="section__title">Landing page iteration</h5>
				<p class="content__copy">
					<span class="number-tag">1</span>Add information about the free trial on the landing page to catch users' attention and interest
				</p>
				<p class="content__copy">
					<span class="number-tag">2</span>Use more action packed words for CTA button; Remove the sign in button to highlight the CTA button
				</p>
					<p class="content__copy">
					<span class="number-tag">3</span>Allow access to studio and class information without login  or signup
				</p>
			</div>
		</div>
	</section>

<!-- Onboarding page iteration -->
	<section class="casestudy__section white">
		<div class="section__flexcontent flex-center flex-column">
			<div class="content__item">
				<img class="iteration-img" src="img/cpy/onboardingv1v2.png" alt="">
			</div>
			<div class="content__item">
				<h5 class="section__title">Onboarding page iteration</h5>
				<p class="content__copy">
					<span class="number-tag">1</span>Add a description of the purpose of selecting a yoga level 
				</p>
				<p class="content__copy">
					<span class="number-tag">2</span>Make it easier for users to understand the yoga levels by expanding the options
				</p>
			</div>
		</div>
	</section>

<!-- homepage Iteration 1-->
	<section class="casestudy__section white">
		<div class="section__flexcontent  flex-column flex-center">
			<div class="content__item">
				<img class="iteration-img" src="img/cpy/homepagev1v2-1.png" alt="">
			</div>
			<div class="content__item">
				<h5 class="section__title">Homepage iteration 1</h5>
				<p class="content__copy">
					<span class="number-tag">1</span>Reduce the home page sections to make it more clean and highlight the primary information.
				</p>
				<p class="content__copy">
					<span class="number-tag">2</span>Promote the class schedule to the homepage so users can see it when they open the app
				</p>
			</div>
		</div>
	</section>

<!-- homepage Iteration 2-->
	<section class="casestudy__section white">
		<div class="section__flexcontent flex-center flex-column">
			<div class="content__item">
				<img class="iteration-img" src="img/cpy/homepagev1v2-2.png" alt="">
			</div>
			<div class="content__item">
				<h5 class="section__title">Homepage iteration 2</h5>
				<p class="content__copy">
					<span class="number-tag">1</span>Move secondary information to the profile page for clearer navigation
				</p>
				<p class="content__copy">
					<span class="number-tag">2</span>Move Buy Class to the main navigation tab
				</p>
			</div>
		</div>
	</section>

<!-- Final Deliverables -->
	<section class="casestudy__section deliverables black">
		 <div class="main_title tr">
			<h1 class="number">10</h1>
			<h2 class="title">Final Deliverables</h2>
		</div>
<!-- Find Class -->
		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">Find Studio and class without logging in</h4>
			</div>
			<div class="content__item flex-1">
				<img class="prototype-gif" src="img/cpy/search class.gif" alt="search class gif">
			</div>
		</div>
		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<img class="" src="img/cpy/find class.png" alt="find class flow screens">
			</div>
		</div>
	</section>

<!-- Free Trial -->
	<section class="casestudy__section deliverables light-black">
		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title tc">Sign up for free trial</h4>
				<img class="prototype-gif" src="img/cpy/free trial.gif" alt="search class gif">
			</div>
			<div class="content__item flex-2">
				<img class="" src="img/cpy/free-trial.png" alt="Sign up for free trial screens">
			</div>
		</div>
	</section>

<!-- Add Schedule -->
	<section class="casestudy__section deliverables black">
		<div class="section__flexcontent flex-center flex-reverse">
			<div class="content__item flex-1">
				<h4 class="section__title tc">Add class schedule to homepage</h4>
				<img class="prototype-gif" src="img/cpy/add class schedule.gif" alt="add class schedule to homepage gif">	
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/add-schedule.png" alt="add schedule trial screens">
			</div>
		</div>
	</section>

<!-- Apply Filter -->
	<section class="casestudy__section deliverables light-black">
		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title tc">Apply class filter</h4>
				<img class="prototype-gif" src="img/cpy/add filter.gif" alt="search class gif">	
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/add-filter.png" alt="Sign up for free trial screens">
			</div>
		</div>
	</section>

<!-- Save Class -->
	<section class="casestudy__section deliverables black">
		<div class="section__flexcontent flex-center flex-reverse">
			<div class="content__item flex-1">
				<h4 class="section__title tc">Save class</h4>
				<img class="prototype-gif" src="img/cpy/save class.gif" alt="search class gif">	
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/save-class.png" alt="save favorite class screens">
			</div>
		</div>
	</section>

<!-- Buy Class -->
	<section class="casestudy__section deliverables light-black">
		<div class="section__flexcontent flex-center">
			<div class="content__item flex-1">
				<h4 class="section__title tc">Buy class</h4>
				<img class="prototype-gif" src="img/cpy/buy class.gif" alt="search class gif">	
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/buy-class.png" alt="Buy class screens">
			</div>
		</div>
	</section>

<!-- Summary -->
	<section class="casestudy__section white">
		 <div class="main_title">
			<h1 class="number">11</h1>
			<h2 class="title">Summary</h2>
		</div>
<!-- User flow iteration -->
		<div class="section__flexcontent flex-center">
			<div class="content__item">
				<h4 class="section__title">What I Learned</h4>
				<p class="content__copy">Through this project, I learned the entire UX design process through hands-on experience.</p>
				<p class="content__copy">Through observing and engaging with the users, I developed a sense of empathy and understood their needs, desires, and context.</p> 
				<p class="content__copy">When brainstorming solutions for problems, make sure to keep the users' goals in mind.  By creating personas and context scenarios (user stories), I was able to structure the interactive functions.</p>
				<p class="content__copy">My ideas came into reality through wireframing and sketching. And user testing has helped me validate my designs.</p>
				<p class="content__copy">Finally, UI design was not about just looking good. Color, scale, and visual weight all play a role in usability. I aimed to make my UI design both aesthetically pleasing and functional.</p>
			</div>
			<div class="content__item flex-1">
				<img class="" src="img/cpy/cpyhero_mockup.png" alt="">
			</div>
		</div>
	</section>


<!-- Explore other work -->
	<div class="more-work">
		<h4>Explore More Works</h4>
		<div class="works">
			<a href="intermezzo.php">
				<div class="more-work__item">
					<img class="more-work__img img-cover" src="img/intermezzo-bg.png" alt="Intermezzo mockup">	
					<div class="more-work_text">	
						<h3 class="more-work__title">Intermezzo</h3>
						<p class="more-work__subtitle">Shaping the Future of Mobility, Architecture, and Technology</p>
						<p class="portfolio__tag">Automotive | Architecture | UX/UI Design</p>
					</div>
				</div>
			</a>

			<a href="teamup.php">
				<div class="more-work__item">
					<img class="more-work__img" src="img/homepage/teamup.png" alt="Teamup mockup">	
					<div class="more-work_text">	
						<h3 class="more-work__title">TeamUp</h3>
						<p class="more-work__subtitle">Build Better Habits Together</p>
						<p class="portfolio__tag">UX/UI Design</p>
					</div>
				</div>
			</a>

			<a href="wildlife.php">
				<div class="more-work__item">
					<img class="more-work__img" src="img/homepage/wildtracker.png" alt="wild tracker mobile app mockup">	
					<div class="more-work_text">	
						<h3 class="more-work__title">Wild Tracker</h3>
						<p class="more-work__subtitle">Track and Record Wildlife</p>
						<p class="portfolio__tag">Mobile App Design and Development</p>
					</div>
					</div>
				</div>
			</a>
		</div>
	</div>


		<div class="section__flexcontent btn">
			<a class="back-home-btn" href="index.php">Back to Home</a>
		</div>




<!-- Footer -->
	<!-- Include Footer -->
	<?php include "parts/footer.html" ?>

</body>
</html>



