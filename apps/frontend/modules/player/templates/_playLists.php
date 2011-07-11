<div class="playList">
    <?php foreach ($playLists as $playList): ?>
	<h2><?php echo $playList->getTitle(); ?></h2>
	
	    <?php foreach($playList->getPlayIts() as $playIt): ?>
	    <dl>
		<dd><img align="baseline" src="/images/play.png" /></dd>
		<dd>01 - </dd>
		<dd><a href="#" rel="name"><?php echo $playIt->getName(); ?></a></dd>
		<dd><a href="#" class="favorite iconeImage">download</a></dd>
		<dd><a href="#" class="download iconeImage">download</a></dd>
		<dd><a href="#" class="addToPlaylist iconeImage">download</a></dd>

		<div class="clear"></div>
	    </dl>
	<?php endforeach;   ?>
    <?php endforeach;   ?>


</div>