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
					<p>Required input</p>
					<div>
						<input name="" required>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Custom validation message</p>
					<div>
						<input name="" required data-parsley-required-message="Custom Error Message">
					</div>
				</fieldset>
	
				<fieldset>
					<p>Numbers only</p>
					<div>
						<input name="" required data-parsley-type="number">
					</div>
				</fieldset>

				<fieldset>
					<p>Letters Only</p>
					<div>
						<input name="" required data-parsley-pattern="^[a-zA-Z]+$">
					</div>
				</fieldset>
				
				<fieldset>
					<p>Email input</p>
					<div>
						<input name="" required type="email">
					</div>
				</fieldset>

				<fieldset>
					<p>Mask</p>
					<div>
						<input name="" required data-inputmask="'mask': '99-999-999'">
					</div>
				</fieldset>
				
				<fieldset>
					<p>Textarea with min characters</p>
					<div>
						<textarea name="" required minlength="5"></textarea>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Textarea with max characters</p>
					<div>
						<textarea name="" required maxlength="5"></textarea>
					</div>
				</fieldset>

				<fieldset>
					<p>Textarea with min and max characters</p>
					<div>
						<textarea name="" required data-parsley-length="[5, 10]"></textarea>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Required dropdown</p>
					<div>
						<select name="" required>
							<option value=""></option>
							<option>DropdownA</option>
							<option>DropdownB</option>
						</select>
					</div>
				</fieldset>

				<fieldset>
					<p>Multi selection with a min</p>
					<div>
						<select name="[]" multiple="multiple" required data-parsley-mincheck="2">
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
				
				<fieldset>
					<p>Multi selection with a max</p>
					<div>
						<select name="[]" multiple="multiple" required data-parsley-maxcheck="2">
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
	
				<fieldset>
					<p>Multi selection with a min and max</p>
					<div>
						<select name="[]" multiple="multiple" required data-parsley-mincheck="1" data-parsley-maxcheck="2">
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
							<optgroup label="Section">
								<option>Drop Down Option A</option>
								<option>Drop Down Option B</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
				
				<fieldset>
					<p>Checkboxs with a min</p>
					<label class="checkbox">
						<input name="checkbox1" type="checkbox" required data-parsley-mincheck="2">
						<span></span><p>Normal</p>
					</label>
					<label class="checkbox">
						<input name="checkbox1" type="checkbox">
						<span></span><p>Normal</p>
					</label>
					<label class="checkbox">
						<input name="checkbox1" type="checkbox">
						<span></span><p>Normal</p>
					</label>
				</fieldset>
				
				<fieldset>
					<p>Checkboxs with a max</p>
					<label class="checkbox">
						<input name="checkbox2" type="checkbox" required data-parsley-maxcheck="2">
						<span></span><p>Normal</p>
					</label>
					<label class="checkbox">
						<input name="checkbox2" type="checkbox">
						<span></span><p>Normal</p>
					</label>
					<label class="checkbox">
						<input name="checkbox2" type="checkbox">
						<span></span><p>Normal</p>
					</label>
				</fieldset>

				<fieldset>
					<p>Required radios</p>
					<label class="radio">
						<input name="radio1" type="radio" required>
						<span></span><p>Normal</p>
					</label>
					<label class="radio">
						<input name="radio1" type="radio">
						<span></span><p>Normal</p>
					</label>
					<label class="radio">
						<input name="radio1" type="radio">
						<span></span><p>Normal</p>
					</label>
				</fieldset>
		
				<fieldset>
					<p>Required swtiches</p>
					<label class="switch">
						<input name="switch1" type="checkbox" required>
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