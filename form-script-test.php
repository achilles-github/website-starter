<?php include("configuration.php"); ?>
<?php include("$root/assets/includes/doctype.php"); ?>

	<title><?php echo $websiteName; ?></title>
	<meta name="description" content="">
	<?php include("$root/assets/includes/head.php"); ?>

<body id="<?php echo $pageName; ?>">
<?php include("$root/assets/includes/header.php"); ?>

	<div id="page"><!--Page Container-->

		<div class="topSection">
		<div class="content">

		</div>
		</div>

		<div class="wrapper">
		<div class="content">

			<form data-parsley-validate id="contactForm" action="assets/form-scripts/form-script.php" method="post" autocomplete="off">
			<input type="hidden" name="email_send_to" value="request@loaidesign.co.uk">
			<input type="hidden" name="email_subject" value="Call Back Request">
			
			<div class="grid columns2">

				<fieldset>
					<p>Your name</p>
					<div>
						<input name="Name" required>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Phone number</p>
					<div>
						<input name="Phone-number" required data-parsley-type="number">
					</div>
				</fieldset>
				
				<fieldset>
					<p>Your email</p>
					<div>
						<input name="Email-address" required type="email">
					</div>
				</fieldset>

				<fieldset>
					<p>Mask</p>
					<div>
						<input name="Budget" required data-inputmask="'mask': '£99,00'">
					</div>
				</fieldset>

				<fieldset>
					<p>Message</p>
					<div>
						<textarea name="Message" required data-parsley-length="[5, 10]"></textarea>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Are you a member?</p>
					<div>
						<select name="Are-you-a-member" required>
							<option value=""></option>
							<option>Yes</option>
							<option>No</option>
						</select>
					</div>
				</fieldset>

				<fieldset>
					<p>Who are your favourite developer?</p>
					<div>
						<select name="Favourite-developer[]" multiple="multiple" required data-parsley-mincheck="2">
							<optgroup label="Section">
								<option>Bhavin</option>
								<option>Bhavin again!</option>
							</optgroup>
							<optgroup label="Section">
								<option>Bloody Bhavin!!</option>
								<option>Who else? Bhavin ;)</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
				
				<fieldset>
					<p>What is your favourite colour?</p>
					<label class="checkbox">
						<input name="Favourite-colour" type="checkbox" required data-parsley-mincheck="2">
						<span></span><p>Red</p>
					</label>
					<label class="checkbox">
						<input name="Favourite-colour" type="checkbox">
						<span></span><p>Green</p>
					</label>
					<label class="checkbox">
						<input name="Favourite-colour" type="checkbox">
						<span></span><p>None</p>
					</label>
				</fieldset>

				<fieldset>
					<p>What would you like to have for tea?</p>
					<label class="radio">
						<input name="What-would-you-like-for-tea" type="radio" required>
						<span></span><p>Tea</p>
					</label>
					<label class="radio">
						<input name="What-would-you-like-for-tea" type="radio">
						<span></span><p>Tea &amp; Coffe</p>
					</label>
					<label class="radio">
						<input name="What-would-you-like-for-tea" type="radio">
						<span></span><p>Burgers</p>
					</label>
				</fieldset>
		
				<fieldset>
					<p>Try me when I am on and off</p>
					<label class="switch">
						<input name="Turn-me-on" type="checkbox" required>
						<span></span><p>On</p>
					</label>
				</fieldset>
				
				</div>
				<br>
				<button class="submit" data-form-error="Please check your entries & try again" data-form-pass="Sent, thank You!" type="submit">Send</button>
			</form>

		</div>
		</div>

	<!--Footer-->
	<?php include("$root/assets/includes/footer.php"); ?>
	</div><!--/Page-->
	<!--Scripts-->
	<?php include("$root/assets/includes/scripts.php"); ?>
</body>