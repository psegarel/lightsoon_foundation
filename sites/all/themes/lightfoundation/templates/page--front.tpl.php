<!--.page -->
<div role="document" class="page">
	<!-- Preloader -->
	<div id="loader">
		<div id="loaderInner"></div>
	</div>
	

	<!--Wrapper-->
	<div id="wrapper">
		<!--Header-->
		<header id="header" class=" default clearfix">
			<!--Holder 960-->
			<div class=" clearfix">
				
				<!--Logo-->
				<div class="logo">
					<a href="#wrapper"><h1><span><?php print $site_name; ?></span></h1></a>
				</div>
				<!--End logo-->	
				
			</div><!--/ Holder 960-->
		</div><!--/ Header-->
	
		<!-- Messages -->	
		<?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
			
	</div><!--/ Wrapper-->	
</div>
<!--/.page -->
