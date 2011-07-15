<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	     More info: h5bp.com/b/378 -->
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

	<?php include_title() ?>
	<?php include_metas() ?>
	<link rel="shortcut icon" href="/favicon.ico" />


	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<!-- CSS: implied media="all" -->
	<?php include_stylesheets() ?>
	<!-- More ideas for your <head> here: h5bp.com/docs/#head-Tips -->

	<!-- All JavaScript at the bottom, except for Modernizr and Respond.
	     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
	     For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="/js/libs/modernizr-2.0.min.js"></script>
	<script src="/js/libs/respond.min.js"></script>
    </head>

    <body>

	<div id="container">
	    <header>
		<div class="container_12">
		    <?php include_partial('home/htmlPlayer'); ?>

		    <div id="search_form" class="grid_4 alpha">

		    </div>
		</div>
		<div class="clear"></div>
	    </header>
	    <div id="main" role="main" class="container_12">
		<div class="grid_8">
		    <?php echo $sf_content; ?>
		</div>
		<div class="grid_4">
                    <?php if (has_component_slot('right_menu')): ?>
                        <?php include_component_slot('right_menu')?>
                    <?php endif; ?>
		</div>
		<div class="clear"></div>
	    </div>

            <div class="clear"></div>
            <footer>
                footer
            </footer>
	</div> <!--! end of #container -->


	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>

	<?php include_javascripts() ?>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

    </body>
</html>