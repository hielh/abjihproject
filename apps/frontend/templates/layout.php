<html>
    <head>
	<?php include_title() ?>
	<meta charset=utf-8 />
	<?php include_metas() ?>
	<link rel="shortcut icon" href="/favicon.ico" />
	<?php include_stylesheets() ?>
	<?php include_javascripts() ?>
	<link href="css/reset_rtl.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/960.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" media="screen" rel="stylesheet" type="text/css" />
    </head>

    <body>
	<header>
	    <div class="container_12">
		<div id="player" class="grid_5 alpha omega">
		    player div
		</div>
		<div id="search_form" class="grid_4 alpha">
		    <form action="">
			<input type="text" />

		    </form>
		</div>
	    </div>
	    <div class="clear"></div>
	</header>
	<div class="container_12">
	    <div class="grid_8">
		<?php echo $sf_content ?>
	    </div>
	    <div class="grid_4">
		right bar
	    </div>
	    <div class="clear"></div>
	</div>
	<div id="footer">

	    <div class="container_12">
		footer
	    </div>
	</div>
    </body>
</html>