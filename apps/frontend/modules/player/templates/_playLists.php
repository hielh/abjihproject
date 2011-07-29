<?php $i = 0; ?>
<div class="play_listing">
    <h3>بن راشد العفاسي</h3>
    <?php foreach ($playLists as $playList): ?>
	<div class="play_sublisting">
	    <h2><?php echo $playList->getTitle(); ?></h2>
	    <?php foreach ($playList->getTracks() as $Track): ?>
        <?php $class = ($i%2)? 'alpha':'omega'; ?>
		<div class="grid_9  <?php echo $class; ?> play_sublisting_item">
		    <div>
              <a href="#" class="track grid_5"><?php echo $Track->getName(); ?></a>
              <ul class="play_sublisting_actions">
                  <li><a href="#" class="min-share">a</a></li>
                  <li><a href="#" class="min-report">a</a></li>
                  <li><a href="<?php echo url_for('addToPlaylist'); ?>" id="addToPlaylist_<?php echo $Track->getId(); ?>" class="min-addtoplaylist addToPlaylist">a</a></li>
                  <li><a href="#" class="min-listen listenToTrack">a</a></li>
                  <li><a href="<?php echo $Track->getUrl(); ?>" title="<span class='text-lime'><?php echo $Track->getName(); ?></span> <?php echo $playerName; ?>" target="_blank" class="min-download download">a</a></li>
              </ul>
		    </div>
		</div>
	    <?php $i++; ?>
	    <?php endforeach; ?>

	    <div class="clear"></div>
	</div>
    <?php endforeach; ?>
</div>