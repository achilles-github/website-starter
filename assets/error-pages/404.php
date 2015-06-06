<?php include("../../configuration.php"); ?>
<?php include("$root/assets/includes/doctype.php"); ?>

	<title>Page Not Found | <?php echo $websiteName; ?></title>
	<?php include("$root/assets/includes/head.php"); ?>

<body id="error<?php echo $pageName; ?>">
<?php include("$root/assets/includes/header.php"); ?>

	<div id="page"><!--Page Container-->

		<div class="topSection fullscreen">
			<div class="content">
				<h1>Sorry, the page you're looking for does not exist.</h1>
				<p><strong><a href="/">Click here</a></strong> to go to the home page or use the navigation above to find what you are looking for.</p>
			</div>
		</div>

	<!--Footer-->
	<?php include("$root/assets/includes/footer.php"); ?>
	</div><!--/Page-->
	<!--Scripts-->
	<?php include("$root/assets/includes/scripts.php"); ?>
</body>