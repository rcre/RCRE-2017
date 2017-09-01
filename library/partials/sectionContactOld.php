<?php // SECTION Contact Form ?>

<section id="contactUs" class="m-padding proposal-contact cf">
	<!-- Contact Form -->

	<?php 
		$salesforce = "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8";
		$destination = site_url().'/thank-you';
		$siteKey = "6LcbpyQUAAAAAKAjUdQypF-uVsjGbdR7VLD09QiK";
		$recaptcha_secret = "6LcbpyQUAAAAAJIV-lpFzJc0EddNPJJUcNWzQn9b";
	 ?>

	<div class="pull-r-1of12 pull-l-1of12 cf">
		<form id="contact-home" class="t-1of2 d-1of2 cf" action="<?php echo $salesforce; ?>" method="post" enctype="multipart/form-data">

		<input type=hidden name="oid" value="00D15000000NClj">
		<input type=hidden name="retURL" value="<?php echo $destination; ?>">

		<h2>Let's Get Started!</h2>
			<div class="m-all t-1of2 d-1of2">
				<label for="first_name">First Name</label>
				<input  id="first_name" name="first_name" tabindex="1" type="text" required />
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="last_name">Last Name</label>
				<input  id="last_name" name="last_name" tabindex="2" type="text" required/>
			</div>
			<div class="m-all t-1of2 d-1of2">
				<label for="email">Email</label>
				<input  id="email" name="email" tabindex="3" type="email" required/>
			</div>
			<div class="m-all t-1of2 d-1of2 last-col">
				<label for="phone">Phone</label>
				<input id="phone" name="phone" tabindex="4" type="tel" placeholder="xxx-xxx-xxxx" pattern="^\d{3}-\d{3}-\d{4}$" required/>
			</div>

			<div class="m-all t-all d-all">
				<label for="description">How Can We Help?</label>
				<textarea id="description" name="description" tabindex="6" required></textarea>
			</div>

			<input type="hidden" name="lead_source" value="Web">
			<input type="hidden" id="00N1500000ImKf9" maxlength="255" name="00N1500000ImKf9" size="20" type="text" value="<?php echo get_page_link(); ?>" /><br>

			<div class="m-all t-all d-all">
				<div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>" data-callback="recaptcha_callback"></div>
			</div>

			<input id="contact_submit" disabled="disabled" class="g-recaptcha cta-border-green" type="submit" name="submit" value="submit">
			
		</form>
		

		<?php 

		 if($_SERVER["REQUEST_METHOD"] === "POST") {
        	//form submitted
        	//check if other form details are correct
		        //verify captcha
		        
		        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
		        $response = json_decode($response, true);
		        
		        if($response["success"] === true) {
		            echo "Logged In Successfully";
		        } else {
		            echo "You are a robot";
		        }
    		}
     	?>
	</div>
</section>