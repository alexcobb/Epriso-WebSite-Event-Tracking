<?
$_HTML_TITLE = "Contact Us";
include("_header.php");
?>
	<!-- MAIN -->
	<main role="main">
		
		<!-- Content -->
		<article>
			<header class="section background-primary text-center">
				<h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1"><?=$_HTML_TITLE?></h1>
			</header>
			<div class="section background-white"> 
				<div class="line">
					<div class="margin">
						<!-- Company Information -->
						<div class="s-12 m-12 l-6">
							<h2 class="text-uppercase text-strong margin-bottom-30">Company Information</h2>
							<div class="float-left">
								<i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
							</div>
							<div class="margin-left-80 margin-bottom">
								<h4 class="text-strong margin-bottom-0">Company Address</h4>
								<p><?include 'consts.php'; echo $address;?><br><br>
								</p>
							</div>
							<div class="float-left">
								<i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
							</div>
							<div class="margin-left-80 margin-bottom">
								<h4 class="text-strong margin-bottom-0">E-mail</h4>
								<p>
									<a href="mailto:<?include 'consts.php'; echo $email;?>"><?include 'consts.php'; echo $email;?></a>
									<br/>
									<br/>
								</p>
							</div>
							<div class="float-left">
								<i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
							</div>
							<div class="margin-left-80">
								<h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
								<p><?include 'consts.php'; echo $phone;?><br>
								</p>
							</div>
						</div>

						<!-- Contact Form -->
						<div class="s-12 m-12 l-6">
							<h2 class="text-uppercase text-strong margin-bottom-30">Contact Us</h2>
							<form class="customform" onSubmit="createObject(); return false">
								<div class="line">
									<div class="margin">
										<div class="s-12 m-12 l-6">
											<input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" 
											id="name-form" />
										</div>
										<div class="s-12 m-12 l-6">
											<input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" 
											id="email-form" />
										</div>
									</div>
								</div>
								
								<div class="s-12"> 
									<input name="subject" class="subject border-radius" placeholder="Subject" title="Subject" type="text" id="subject-form" />
								</div>
								<div class="s-12">
									<textarea name="message" class="required message border-radius" placeholder="Your message" rows="3" id="message-form"></textarea>
								</div>
								<div class="s-12 m-12 l-4">
									<button 
										class="submit-form button background-primary border-radius text-white" 
										type="submit"
										onSubmit="createObject(); return false">Send Inquiry
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div> 
		</article>
		
		<div class="background-primary padding text-center">
			<a href="https://www.facebook.com/CreatioCompany" target="_blank">
				<em class="icon-facebook_circle icon2x text-white"></em>
			</a>
		</div>
	
		<!-- MAP -->
		<div class="s-12 grayscale center">
			<iframe title="map"; src="<?include 'consts.php'; echo $googleMaps;?>" width="100%" height="450" style="border:0" />
		</div>
	</main>
<?
include("_footer.php");
?>