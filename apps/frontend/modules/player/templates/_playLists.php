<div class="playlist">
    <?php foreach ($playLists as $playList): ?>
        <h2><?php echo $playList->getTitle(); ?></h2>

	<?php foreach ($playList->getPlayIts() as $playIt): ?>
	    <dl>
		<dd class="toPlayNumber">01</dd>
		<dd class="toPlayName"><?php echo $playIt->getName(); ?></dd>
		<dd><a href="#" class="download urlImage" title="download">Download</a></dd>
		<dd ><a href="#" class="share urlImage" title="download">Download</a></dd>
		<dd ><a href="#" class="send urlImage" title="download">Download</a></dd>
		<dd ><a href="#" class="add urlImage" title="download">Download</a></dd>
	    </dl>
	<?php endforeach; ?>
	<div class="clear"></div>
    <?php endforeach; ?>


</div>