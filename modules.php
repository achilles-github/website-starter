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
			
		<h1 class="fadeIn">Framework Components</h1>

		</div>
		</div>

		<div class="wrapper">
		<div class="content">
			
			<h1>H1 Heading</h1>
			<p>Normal paragraph</p>
			<br>
			<h2>H2 Heading</h2>
			<p>Normal paragraph</p>
			<br>
			<h3>H3 Heading</h3>
			<p>Normal paragraph</p>
			<br>
			<h4>H4 Heading</h4>
			<p>Normal paragraph</p>
			<br>
			<h5>H5 Heading</h5>
			<p>Normal paragraph</p>
			<br>
			<h6>H6 Heading</h6>
			<p>Normal paragraph</p>

			<hr class="hidden">

			<p>Paragraph with an inline icon <i class="icon-help"></i></p>
			<p><em>Italicized</em></p>
			<p><strong>Bolded</strong></p>
			<p><u>Underlined</u></p>
			<p>Sup<sup>subscript</sup></p>
			<p>Sub<sub>subscript</sub></p>
			<p><small>Small</small></p>
						
			<hr class="hidden">

			<p class="breadcrumb"><a href="#">Breadcrumb</a><span>/</span><a href="#">Page name</a><span>/</span><a href="#" class="active">Page name</a></p>
			
			<hr class="hidden">
			
			<p><strong>Unordered List</strong></p>
			<ul class="ul">
				<li>List Item</li>
				<li>List Item
					<ul class="ul">
						<li>Sub List Item</li>
						<li>Sub List Item</li>
					</ul>
				</li>
			</ul>
			
			<br>
			
			<p><strong>Ordered List</strong></p>
			<ol class="ol">
				<li>List Item</li>
				<li>List Item
					<ol class="ol">
						<li>Sub List Item</li>
						<li>Sub List Item</li>
					</ol>
				</li>
			</ol>
			
			<hr>
			<h2>Esstional icons set</h2>
			
			<i class="icon icon-chevron-left"></i>
			<i class="icon icon-chevron-right"></i>
			<i class="icon icon-chevron-up"></i>
			<i class="icon icon-chevron-down"></i>
			<i class="icon icon-arrow-left"></i>
			<i class="icon icon-arrow-right"></i>
			<i class="icon icon-arrow-up"></i>
			<i class="icon icon-arrow-down"></i>
			
			<hr class="hidden height-10px">
						
			<i class="icon icon-home"></i>
			<i class="icon icon-calendar"></i>
			<i class="icon icon-clock"></i>
			<i class="icon icon-configuration-wheel"></i>
			<i class="icon icon-link"></i>
			<i class="icon icon-globe"></i>
			<i class="icon icon-magnifier"></i>
			<i class="icon icon-chat-bubble"></i>
			<i class="icon icon-chat-bubbles"></i>
			<i class="icon icon-envelope"></i>
			<i class="icon icon-phone"></i>
			<i class="icon icon-telephone"></i>
			<i class="icon icon-address"></i>
			<i class="icon icon-bullhorn"></i>

			<hr class="hidden height-10px">
						
			<i class="icon icon-minus"></i>
			<i class="icon icon-plus"></i>
			<i class="icon icon-cross"></i>
			<i class="icon icon-check"></i>
			<i class="icon icon-denied"></i>
			
			<hr class="hidden height-10px">
			
			<i class="icon icon-help"></i>
			<i class="icon icon-question-mark"></i>		
			<i class="icon icon-warning"></i>	
			<i class="icon icon-exclamation-mark"></i>			

			<hr class="hidden height-10px">
			
			<i class="icon icon-facebook"></i>
			<i class="icon icon-twitter"></i>
			<i class="icon icon-google-plus"></i>
			<i class="icon icon-linkedin"></i>
			<i class="icon icon-vimeo"></i>
			<i class="icon icon-youtube"></i>
			<i class="icon icon-dribbble"></i>
			<i class="icon icon-tumbler"></i>
			<i class="icon icon-stackoverflow"></i>
			<i class="icon icon-yahoo"></i>
			<i class="icon icon-yelp"></i>
			<i class="icon icon-paypal"></i>
			<i class="icon icon-picassa"></i>
			<i class="icon icon-soundcloud"></i>
			<i class="icon icon-feed"></i>
			<i class="icon icon-skype"></i>
			<i class="icon icon-blogger"></i>
			<i class="icon icon-dropbox"></i>
			<i class="icon icon-github"></i>
			<i class="icon icon-google-drive"></i>
			<i class="icon icon-onedrive"></i>
			<i class="icon icon-steam"></i>
			<i class="icon icon-twitch"></i>
			<i class="icon icon-pinterest"></i>
			<i class="icon icon-instagram"></i>
			<i class="icon icon-stumbleupon"></i>
			<i class="icon icon-behance"></i>
								
			<hr>
			<h2>Buttons</h2>
			
			<a class="button" href="#">Button</a>
			<a class="button button-grey" href="#">Button</a>
			<a class="button button-red" href="#">Button</a>
			<a class="button button-green" href="#">Button</a>
			
			<br>
			
			<a class="button disabled" href="#">Button</a>
			<a class="button button-grey disabled" href="#">Button</a>
			<a class="button button-red disabled" href="#">Button</a>
			<a class="button button-green disabled" href="#">Button</a>
			
			<hr class="hidden">
			<h2>Outlined buttons</h2>
			
			<a class="button button-outlined" href="#">Button</a>
			<a class="button button-outlined button-grey" href="#">Button</a>
			<a class="button button-outlined button-red" href="#">Button</a>
			<a class="button button-outlined button-green" href="#">Button</a>
			
			<br>
			
			<a class="button button-outlined disabled" href="#">Button</a>
			<a class="button button-outlined button-grey disabled" href="#">Button</a>
			<a class="button button-outlined button-red disabled" href="#">Button</a>
			<a class="button button-outlined button-green disabled" href="#">Button</a>
			
			<hr class="hidden">
			<h2>Buttons with icons</h2>
			
			<a class="button" href="#"><i class="icon-calendar left-side-icon"></i>Button</a>
			<a class="button button-outlined" href="#">Button<i class="icon-clock right-side-icon"></i></a>
			<a class="button button-outlined button-red" href="#"><i class="icon-cross"></i></a>
			
			<br>

			<a class="button disabled" href="#"><i class="icon-calendar left-side-icon"></i>Button</a>
			<a class="button disabled" href="#">Button<i class="icon-clock right-side-icon"></i></a>
			<a class="button disabled" href="#"><i class="icon-cross"></i></a>

			<hr class="hidden">
			<h2>Button dropdowns</h2>
			
			<div class="button">
				<i class="icon-plus"></i>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
				</ul>
			</div>
			
			<div class="button">
				<p>Options</p>
				<span class="toggle-icons right-side-icon">
					<i class="icon-chevron-down"></i>
					<i class="icon-minus"></i>
				</span>
				<ul>
					<li><a href="#"><i class="icon-bullhorn left-side-icon"></i> Option with an icon</a></a></li>
					<li><a href="#" class="submenu-toggle">Option with sub-menu</a>
						<ul>
							<li><a href="#">Option</a></li>
							<li><a href="#">Longer Option</a></li>
							<li><a href="#">Extra Long Option</a></li>
						</ul>
					</li>
					<li><a href="#">Normal Option</a></li>
					<li><a href="#" class="disabled">Disabled Option</a></li>
				</ul>
			</div>
			
			<br>
			
			<div class="button">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-grey">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-red">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-green">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<br>
			
			<div class="button button-outlined">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-outlined button-grey">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-outlined button-red">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>
			
			<div class="button button-outlined button-green">
				<label class="checkbox"><input name="" type="checkbox"><span></span><p>Options</p></label>
				<ul>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option A</p></label></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option B</p></label></li>
					<li><hr></li>
					<li><label class="checkbox"><input name="" type="checkbox"><span></span><p>Option C</p></label></li>
				</ul>
			</div>

			<hr class="hidden">
			
			<h2>Buttons with labels</h2>
			
			<a class="button" href="#">Button<mark class="label right-side-icon">1</mark></a>
			<a class="button" href="#">Button<mark class="label mark-red right-side-icon">10</mark></a>
			<a class="button" href="#">Button<mark class="label mark-yellow right-side-icon">100</mark></a>
			<a class="button" href="#">Button<mark class="label mark-green right-side-icon">NEW</mark></a>
			<a class="button disabled" href="#">Button<mark class="label right-side-icon">Disabled</mark></a>
			
			<hr class="hidden">
			<h2>Labels</h2>
			
			<mark>Normal Label</mark>
			<mark class="mark-red">Normal Label</mark>
			<mark class="mark-yellow">Normal Label</mark>
			<mark class="mark-green">Normal Label</mark>
			<mark class="mark-grey">Normal Label</mark>
			
			<hr class="hidden">
		
			<h2>Inline links</h2>
			
			<a class="link" href="#"><p>Inline link</p></a>
			<a class="link link-red" href="#"><p>Red link (on hover)</p></a> 
			<a class="link link-green" href="#"><p>Green link (on hover)</p></a> 
			<a class="link disabled" href="#"><p>Disabled inline link</p></a> 

			<hr>
			<h2>Notifications</h2>

			<div class="notification">
				<div><i class="icon-bullhorn"></i><p>Normal Notification</p></div>
				<i class="close icon-cross"></i>
			</div>
			
			<div class="notification notification-red">
				<div><i class="icon-denied"></i><p>Red Notification</p></div>
				<i class="close icon-cross"></i>
			</div>
			
			<div class="notification notification-yellow">
				<div><i class="icon-warning"></i><p>Yellow Notification</p></div>
				<i class="close icon-cross"></i>
			</div>
			
			<div class="notification notification-green">
				<div><i class="icon-check"></i><p>Green Notification</p></div>
				<i class="close icon-cross"></i>
			</div>
			
			<div class="fixed-notifications-container">
				<div class="notification">
					<div><p>Fixed Notification</p></div>
					<i class="close icon-cross"></i>
				</div>
			</div>
			
			<hr>
			<h2>Tooltips</h2>

			<span class="tooltip-top" title="Tooltip Text">TooltipTop</span>
				<br>
			<span class="tooltip-right" title="Tooltip Text">TooltipRight</span>
				<br>
			<span class="tooltip-bottom" title="Tooltip Text">TooltipBottom</span>
				<br>
			<span class="tooltip-left" title="Tooltip Text">TooltipLeft</span>
				<br>
			<span class="tooltip-top-left" title="Tooltip Text">TooltipTopLeft</span>
				<br>
			<span class="tooltip-top-right" title="Tooltip Text">TooltipTopRight</span>
				<br>
			<span class="tooltip-bottom-right" title="Tooltip Text">TooltipBottomRight</span>
				<br>
			<span class="tooltip-bottom-left" title="Tooltip Text">TooltipBottomLeft</span>
				<br>
			<span class="tooltip-outer-top-left" title="Tooltip Text">TooltipOuterTopLeft</span>
				<br>
			<span class="tooltip-outer-top-right" title="Tooltip Text">TooltipOuterTopRight</span>
				<br>
			<span class="tooltip-outer-bottom-left" title="Tooltip Text">TooltipOuterBottomLeft</span>
				<br>
			<span class="tooltip-outer-bottom-right" title="Tooltip Text">TooltipOuterBottomRight</span>
				<br>
			<span class="tooltip-follow" title="Tooltip Text">TooltipMouseFollow</span>
			
			<hr>
			<h2>Tabels</h2>
			
			<table class="table">
			  <tr>
			    <th>Firstname</th>
			    <th>Lastname</th>
			  </tr>
			  <tr>
			    <td>Peter</td>
			    <td>Griffin</td>
			  </tr>
			  <tr>
			    <td>Lois</td>
			    <td>Griffin</td>
			  </tr>
			</table>
			
			<hr>
			<h2>Tabs</h2>
			<br>

			<div class="tabs">
				<div class="tabs-head">
					<ul>
				    	<li><a href="#tab-1">Tab 1</a></li>
				    	<li><a href="#tab-2">Tab 2</a></li>
					</ul>
				</div>
				<div class="tabs-body">
					<div id="tab-1">
						<div class="tabs">
							<div class="tabs-head">
								<ul>
							    	<li><a href="#tab-1-1">Tab 1.1</a></li>
							    	<li><a href="#tab-1-2">Tab 1.2</a></li>
								</ul>
							</div>
							<div class="tabs-body">
								<div id="tab-1-1">
									<p>Tab 1.1</p>
							  	</div>
							  	<div id="tab-1-2">
									<p>Tab 1.2</p>
							  	</div>
							</div>
						</div>
				  	</div>
				  	<div id="tab-2">
						<p>Tab 2</p>
				  	</div>
				</div>
			</div>
			
			<hr class="hidden">
			
			<div class="tabs tabs-vertical">
				<div class="tabs-head">
					<ul>
				    	<li><a href="#tab-1">Tab 1</a></li>
				    	<li><a href="#tab-2">Tab 2</a></li>
					</ul>
				</div>
				<div class="tabs-body">
					<div id="tab-1">
						<p>Tab 1</p>
				  	</div>
				  	<div id="tab-2">
						<p>Tab 2</p>
				  	</div>
				</div>
			</div>

			<hr>
			<h2>Accordions</h2>
			<br>
			
			<div class="accordion">
				<div class="accordion-head">
					<span class="toggle-icons">
						<i class="icon-chevron-down toggle-icon"></i>
						<i class="icon-chevron-up toggle-icon"></i>
					</span>
					<h3>Basic accordion</h3>
				</div>
				<div class="accordion-body">
					<p>Lorem Ipsum is sfnti nting and typesetting industry dummy text o g and typesetting industry.</p>
				</div>
			</div>
			
			<br>
	
			<div class="accordion">
				<div class="accordion-section">
					<div class="accordion-head">
						<h3>Styled accordion</h3>
						<span class="toggle-icons">
							<i class="icon-chevron-down toggle-icon"></i>
							<i class="icon-chevron-up toggle-icon"></i>
						</span>
					</div>
					<div class="accordion-body">
						<p>Lorem Ipsum is sfnti nting and typesetting industry dummy text o g and typesetting industry.</p>
					</div>
				</div>
				<div class="accordion-section">
					<div class="accordion-head">
						<h3>Styled accordion</h3>
						<span class="toggle-icons">
							<i class="icon-chevron-down toggle-icon"></i>
							<i class="icon-chevron-up toggle-icon"></i>
						</span>
					</div>
					<div class="accordion-body">
						<p>Lorem Ipsum is sfnti nting and typesetting industry dummy text o g and typesetting industry.</p>
					</div>
				</div>
			</div>
			
			<hr>
			<h2>Grid System</h2>
			<br>

			<div class="grid columns1">
				<img alt="image" class="frame" src="assets/images/image.jpg">
			</div>
				
			<div class="grid columns2">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
			</div>
			
			<div class="grid columns3">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
			</div>

			<div class="grid columns4">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
			</div>
			
			<div class="grid columns5">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
				<img alt="image" class="frame" src="assets/images/image.jpg">
			</div>
			
			<hr class="hidden">
			<h2>Side by Side Grid System</h2>
			<br>
			
			<div class="side-by-side">
				<div>
					<img alt="image" src="assets/images/image.jpg">
				</div>
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
	
			<div class="side-by-side rtl">
				<div>
					<img alt="image" src="assets/images/image.jpg">
				</div>
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>

			<div class="side-by-side rtl text-align-justified vertical-align-top-all">
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			
			<hr>
			<h2>Essential form elements</h2>		
			<br>

			<form>
			<div class="grid columns2">

			<fieldset>
				<p>Input</p>
				<div>
					<input name="">
				</div>
			</fieldset>
			
			<fieldset class="placeholder" disabled="disabled">
				<p>Disabled input</p>
				<div>
					<input name="">
				</div>
			</fieldset>
			
			<fieldset>
				<p>Textarea</p>
				<div>
					<textarea name=""></textarea>
				</div>
			</fieldset>
			
			<fieldset disabled="disabled">
				<p>Disabled textarea</p>
				<div>
					<textarea name=""></textarea>
				</div>
			</fieldset>

			<fieldset>
				<p>Dropdown</p>
				<div>
					<select name="" data-placeholder="Choose an option">
						<option value=""></option>
						<option class="icon-calendar">Dropdown Option C</option>
						<option class="icon-clock">Dropdown Option D</option>
						<option class="icon-chat">Dropdown Option E</option>
						<option>Dropdown Option F</option>
						<option>Dropdown Option G</option>
						<option disabled="disabled">Disabled Option H</option>
						<optgroup label="Section">
							<option>Dropdown Option A</option>
							<option>Dropdown Option B</option>
						</optgroup>
						<option>Dropdown Option I</option>
						<option>Dropdown Option J</option>
						<option>Dropdown Option K</option>
						<option>Dropdown Option L</option>
						<option>Dropdown Option M</option>
						<option>Dropdown Option N</option>
						<option>Dropdown Option I</option>
						<option>Dropdown Option J</option>
						<option>Dropdown Option K</option>
						<option>Dropdown Option L</option>
						<option>Dropdown Option M</option>
						<option>Dropdown Option N</option>
					</select>
				</div>
			</fieldset>
		
			<fieldset disabled="disabled">
				<p>Disabled dropdown</p>
				<div>
					<select name="">
						<option value=""></option>
					</select>
				</div>
			</fieldset>
			
			<fieldset>
				<p>Multi selection dropdown</p>
				<div>
					<select name="[]" multiple="multiple">
						<option value=""></option>
						<optgroup label="Section">
							<option>Dropdown Option A</option>
							<option>Dropdown Option B</option>
						</optgroup>
						<option class="icon-calendar">Dropdown Option C</option>
						<option class="icon-clock">Dropdown Option D</option>
						<option class="icon-chat">Dropdown Option E</option>
						<option>Dropdown Option F</option>
						<option>Dropdown Option G</option>
						<option disabled="disabled">Disabled Option H</option>
						<option>Dropdown Option I</option>
						<option>Dropdown Option J</option>
						<option>Dropdown Option K</option>
					</select>
				</div>
			</fieldset>
			
			<fieldset disabled="disabled">
				<p>Disabled multi selection dropdown</p>
				<div>
					<select name="[]" multiple="multiple">
						<option value=""></option>
					</select>
				</div>
			</fieldset>
			
			<fieldset>	
				<p>Upload input</p>			
				<input id="input-1" type="file" class="uploadInput">
			</fieldset>
			
			<fieldset disabled="disabled">	
				<p>Disabled upload input</p>				
				<input id="input-1" type="file" class="uploadInput">
			</fieldset>		

			</div>
			</form>
			
			<hr>
			
			<form>
			<div class="grid columns3">

			<fieldset>
				<p>Date picker</p>
				<div>
					<input name="" class="date-picker" autocomplete="off" readonly="readonly">
				</div>
			</fieldset>
		
			<fieldset>
				<p>Time picker</p>
				<div>
					<input name="" class="time-picker" autocomplete="off" readonly="readonly">
				</div>
			</fieldset>
		
			<fieldset>
				<p>Date &amp; time picker</p>
				<div>
					<input name="" class="date-time-picker" autocomplete="off" readonly="readonly">
				</div>
			</fieldset>

			</div>
			</form>
			
			<hr>
			
			<fieldset>
				<p>Checkboxs</p>
				<label class="checkbox">
					<input name="" type="checkbox">
					<span></span><p>Normal</p>
				</label>
				<label class="checkbox">
					<input name="" type="checkbox" checked="checked">
					<span></span><p>Checked</p>
				</label>
				<label class="checkbox disabled">
					<input name="" type="checkbox" checked="checked" disabled="disabled">
					<span></span><p>Check &amp; Disabled</p>
				</label>
				<label class="checkbox disabled">
					<input name="" type="checkbox" disabled="disabled">
					<span></span><p>Disabled</p>
				</label>
			</fieldset>
		
			<fieldset>
				<p>Radios</p>
				<label class="radio">
					<input name="" type="radio">
					<span></span><p>Normal</p>
				</label>
				<label class="radio">
					<input name="" type="radio" checked="checked">
					<span></span><p>Checked</p>
				</label>
				<label class="radio disabled">
					<input name="" type="radio" checked="checked" disabled="disabled">
					<span></span><p>Check &amp; Disabled</p>
				</label>
				<label class="radio disabled">
					<input name="" type="radio" disabled="disabled">
					<span></span><p>Disabled</p>
				</label>
			</fieldset>
	
			<fieldset>
				<p>Swtiches</p>
				<label class="switch">
					<input name="" type="checkbox">
					<span></span><p>On</p>
				</label>
				<label class="switch">
					<input name="" type="checkbox" checked="checked">
					<span></span><p>Checked</p>
				</label>
				<label class="switch disabled">
					<input name="" type="checkbox" checked="checked" disabled="disabled">
					<span></span><p>Check &amp; Disabled</p>
				</label>
				<label class="switch disabled">
					<input name="" type="checkbox" disabled="disabled">
					<span></span><p>Disabled</p>
				</label>
			</fieldset>

			<hr>
			<h2>Inline form elements</h2>
			<br>
			
			<fieldset>
				<div>
					<p>Inline label</p>
					<input name="">
				</div>
			</fieldset>
			
			<hr class="hidden">
			
			<h2>Inline Icons</h2>
			<br>
			
			<fieldset>
				<div>
					<i class="icon-calendar"></i>
					<input name="">
				</div>
			</fieldset>
			
			<fieldset>
				<div>
					<input name="">
					<i class="icon-calendar"></i>
				</div>
			</fieldset>
			
			<fieldset>
				<div>
					<i class="icon-calendar"></i>
					<input name="">
					<i class="icon-calendar"></i>
				</div>
			</fieldset>
			
			<fieldset>
				<div>
					<input name="">
					<i class="icon-help tooltip-top" title="Tooltip text goes here"></i>
				</div>
			</fieldset>
			
			<hr class="hidden">
			
			<fieldset>
				<div class="has-icon-left">
					<span><i class="icon-calendar"></i></span>
					<input name="">
				</div>
			</fieldset>
						
			<fieldset>
				<div class="has-icon-right">
					<input name="">
					<span><i class="icon-calendar"></i></span>
				</div>
			</fieldset>
			
			<fieldset>
				<div class="has-icon-left-right">
					<span>www.</span>
					<input name="">
					<span>.com</span>
				</div>
			</fieldset>
		
			<fieldset>
				<div class="has-icon-left-right">
					<a>Button</a>
					<input name="">
					<span><i class="icon-calendar"></i></span>
				</div>
			</fieldset>
			
			<fieldset>
				<div class="has-icon-left-right">
					<span><i class="icon-calendar"></i></span>
					<input name="">
					<a>Button</a>
				</div>
			</fieldset>
			
			<fieldset>
				<div class="has-icon-left">
					<a>Button</a>
					<span><i class="icon-calendar"></i></span>
					<input name="">
				</div>
			</fieldset>
						
			<fieldset>
				<div class="has-icon-right">
					<input name="">
					<span><i class="icon-calendar"></i></span>
					<a>Button</a>
				</div>
			</fieldset>

			<fieldset>
				<div class="has-icon-left-right">
					<a>Button</a>
					<span>www.</span>
					<input name="">
					<span>.com</span>
					<a>Button</a>
				</div>
			</fieldset>
			
			<hr class="hidden">
			<h2>Inline fieldsets</h2>
			<br>

			<fieldset>
				<fieldset>
					<p>Inline Input</p>
					<div>
						<input name="">
					</div>
				</fieldset>
				<fieldset>
					<p>Inline Input</p>
					<div>
						<input name="">
					</div>
				</fieldset>
			</fieldset>
			
			<fieldset>
				<fieldset>
					<div class="has-icon-left-right">
						<span>£</span>
						<input name="">
						<span>GBP</span>
					</div>
				</fieldset>
				<fieldset>
					<div>
						<input name="">
					</div>
				</fieldset>
			</fieldset>
			
			<fieldset>
				<fieldset>
					<div>
						<input name="">
					</div>
				</fieldset>
				<fieldset>
					<div class="has-icon-right">
						<input name="">
						<span>USD</span>
					</div>
				</fieldset>
			</fieldset>
			
			<fieldset>
				<fieldset>
					<div>
						<input name="">
					</div>
				</fieldset>
				<fieldset>
					<div class="has-icon-left-right">
						<span>$</span>
						<input name="">
						<span>USD</span>
					</div>
				</fieldset>
			</fieldset>
			
			<fieldset>
				<fieldset>
					<div class="has-icon-right">
						<input name="">
						<span><i class="icon-calendar"></i></span>
					</div>
				</fieldset>
				<fieldset>
					<div class="has-icon-left">
						<span><i class="icon-calendar"></i></span>
						<input name="">
					</div>
				</fieldset>
			</fieldset>
			
			<fieldset>
				<fieldset>
					<div class="has-icon-left">
						<span><i class="icon-calendar"></i></span>
						<input name="">
					</div>
				</fieldset>
				<fieldset>
					<div class="has-icon-right">
						<input name="">
						<span><i class="icon-calendar"></i></span>
					</div>
				</fieldset>
			</fieldset>
			
			<hr>
			<h2>Popups</h2>		
			<br>
			<a class="popup-button" data-popup="#popup1">Popup Button</a>
			<div id="popup1" class="popup" title="Dialog Header">
    			<div class="content">
     				<p>Dialog content</p>
    			</div>
    			<div class="buttons-wrapper">
    		 		<button class="popup-close">Close</button>
    			</div>
   		</div>

		</div>
		</div>
		
		<!--Footer-->
		<?php include("$root/assets/includes/footer.php"); ?>
	</div><!--/Page-->
	<!--Scripts-->
	<?php include("$root/assets/includes/scripts.php"); ?>
</body>
</html>