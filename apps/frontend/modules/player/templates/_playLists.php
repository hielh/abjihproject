<div class="play_listing">
    <h3>بن راشد العفاسي</h3>
    <?php foreach ($playLists as $playList): ?>
	<div class="play_sublisting">
	    <h2><?php echo $playList->getTitle(); ?></h2>
	    <?php foreach ($playList->getTracks() as $Track): ?>
		<div class="grid_9 alpha play_sublisting_item">
		    <div>
			<a href="#" class="track"><?php echo $Track->getName(); ?></a>
			<ul class="play_sublisting_actions">
			    <li><a href="#" class="min-share">a</a></li>
			    <li><a href="#" class="min-report">a</a></li>
			    <li><a href="<?php echo url_for('addToPlaylist'); ?>" id="addToPlaylist_<?php echo $Track->getId(); ?>" class="min-addtoplaylist addToPlaylist">a</a></li>
			    <li><a href="#" class="min-listen">a</a></li>
			    <li><a href="#" class="min-download">a</a></li>
			</ul>
		    </div>

		</div>
	    <?php endforeach; ?>

	    <div class="clear"></div>
	</div>
    <?php endforeach; ?>
</div>