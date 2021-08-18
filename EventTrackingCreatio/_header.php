<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?=$_HTML_TITLE?></title>
		<link rel="stylesheet" href="css/components.css">
		<link rel="stylesheet" href="css/icons.css">
		<link rel="stylesheet" href="css/responsee.css">
		<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="owl-carousel/owl.theme.css">
		<!-- CUSTOM STYLE -->
		<link rel="stylesheet" href="css/template-style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>	
		<script src="https://webtracking-v01.bpmonline.com/JS/track-cookies.js"></script>
		<script src="https://webtracking-v01.bpmonline.com/JS/create-object.js"></script>
	</head>
  
	<body class="size-1140">
	<!-- PREMIUM FEATURES BUTTON -->
	<a target="_blank" class="hide-s" href="index.php" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
	
	<!-- HEADER -->
	<header role="banner">
	  <!-- Top Bar -->
	  <div class="top-bar background-white">
		<div class="line">
		  <div class="s-12 m-6 l-6">
			<div class="top-bar-contact">
			  <p class="text-size-12">Contact Us: <?include 'consts.php'; echo $phone;?> | <a class="text-orange-hover" href="mailto:<?include 'consts.php'; echo $email;?>">
				<?include 'consts.php'; echo $email;?>
			  </a></p>
			</div>
		  </div>
		  <div class="s-12 m-6 l-6">
			<div class="right">
			  <ul class="top-bar-social right">
				<li><a href="<?include 'consts.php'; echo $facebook;?>"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
				<li><a href="<?include 'consts.php'; echo $twitter;?>"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
				<li><a href="<?include 'consts.php'; echo $linkedIn;?>"><i class="icon-linked_in_circle text-orange-hover"></i></a></li>
				<li><a href="<?include 'consts.php'; echo $youtube;?>"><i class="icon-sli-social-youtube text-orange-hover"></i></a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <!-- Top Navigation -->
	  <nav class="background-white background-primary-hightlight">
		<div class="line">
		  <div class="s-12 l-2">
			<!-- <a href="index.php" class="logo"><img src="img/logo-free.png" alt=""></a> -->
			<h7 class="headline text-thin text-size-30">
			  Kay<span class="text-primary">Jay</span> Group
			  <p class="text-size-20 text-s-size-16 text-thin">
			  Creatio <span class="text-primary">proud</span> partner
			  </p>
			  
		  </h7>
		  </div>
		  <div class="top-nav s-12 l-10">
			<p class="nav-text"></p>
			<ul class="right chevron">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="products.php">Products</a></li>
			  <li><a>Services</a>
				<ul>
				  <li><a href="service1.php">Academy</a></li>
				  <li><a href="service2.php">Marketplace</a></li>
				</ul>
			  </li>
			  <li><a href="about.php">About</a></li>
			  <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="contact.php">Contact</a></li>
			</ul>
		  </div>
		</div>
	  </nav>
	</header>
	
	<!-- Website event tracking
	 https://academy.creatio.com/docs/user/marketing_tools/website_tracking/website_tracking-->
	<script type="text/javascript">
		( function (w, d, s, t, r) { var root = (w['creatioTracking'] = w['creatioTracking'] || {}), v = (root['v'] = root['v'] || {}); v['hst'] = s; v['tnt'] = t; v['res'] = r; var se = d.createElement('script'), he = d.getElementsByTagName('head')[0], m = (d.cookie.indexOf('CRTTRKG_DBG=1') === -1), tc = 'creatio-tracking-engine' + (m ? '.min' : '') + '.js'; se.async = true; se.src = "https://webtracking-v01.bpmonline.com/JS/" + tc; he.appendChild(se); } )(window, document, 'https://az2-tracking-receiver.creatio.com', '715873b6-be84-424b-ba6e-faceab80589c', '37eae979-5d14-4012-836d-c2ade7ddee8c');
	</script>

	<!-- Landing Page 
	https://academy.creatio.com/docs/user/crm_tools/landing_pages_and_web_forms/connect_a%20landing%20to%20creatio/connect_your_website_landing_page_to_Creatio -->
	<script>
		/**
		* Replace the "css-selector" placeholders in the code below with the element selectors on your landing page.
		* You can use #id or any other CSS selector that will define the input field explicitly.
		* Example: "Email": "#MyEmailField".
		* If you don't have a field from the list below placed on your landing, leave the placeholder or remove the line.
		*/
		var config = {
			fields: {
				"Name": "#name-form", // Name of a visitor, submitting the page
				"Email": "#email-form", // Visitor's email
				"Commentary": "#subject-form", // Notes
				"Notes": "#message-form" // Notes
				// "Zip": "css-selector", // Visitor's ZIP code
				// "MobilePhone": "css-selector", // Visitor's phone number
				// "Company	": "css-selector", // Name of a company (for business landing pages)
				// "Industry": "css-selector", // Company industry (for business landing pages)
				// "FullJobTitle": "css-selector", // Visitor's job title (for business landing pages)
				// "UseEmail": "css-selector", // Logical value: 'true' equals to visitor's opt-in to receive emails
				// "City": "css-selector", // City
				// "Country": "css-selector", // Country
			},
			customFields: {},
			landingId: "91836290-e0c5-4949-b64d-2d8ef436b624",
			serviceUrl: "https://102664-crm-bundle.creatio.com/0/ServiceModel/GeneratedObjectWebFormService.svc/SaveWebFormObjectData",
			redirectUrl: "http://k_krylov_nb:8090/index.php"
		};
		/**
		* The function below creates a object from the submitted data.
		* Bind this function call to the "onSubmit" event of the form or any other elements events.
		* Example: <form class="mainForm" name="landingForm" onSubmit="createObject(); return false">
		*/
		function createObject() {
			landing.createObjectFromLanding(config);
		}
		/**
		* The function below inits landing page using URL parameters.
		*/
		function initLanding() {
			landing.initLanding(config);
		}
		jQuery(document).ready(initLanding);
	</script>
</html>