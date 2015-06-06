<!--Second Header "Small screens only"-->
<div id="secondHeader">
	 <div class="logo">
   	<!--<p><?php echo $websiteName; ?></p>-->
   	<a href="/"><?php include("$root/assets/includes/logo.php"); ?></a>
	</div>
   <a class="menuSwitch" href="#">
		<i class="icon-chevron-right"></i>
		<i class="icon-chevron-left"></i>
	 	<p>Menu</p>
   </a>
</div>

<!--Main Header-->
<header id="header" class="fixed-header">
	<div class="content">
		
		<div class="logo">
	 		<a href="/"><?php include("$root/assets/includes/logo.php"); ?></a>
		</div>
		
		<nav class="mainMenu">
			<p class="off-canvas-title">Navigation</p>
			<?php include("$root/assets/includes/menu.php"); ?>
		</nav>

	</div>
</header>