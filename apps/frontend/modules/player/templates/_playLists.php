
<div class="play_listing">
    <div id="breadcrumbs">
	<ul>
	    <li><a href="#">راشد العفاسي</a></li>
	    <li><a href="#">راشد العفاسي</a></li>
	    <div class="clear"></div>
	</ul>

    </div>
    <?php foreach ($playLists as $playList): ?>
      <?php $i = 0; ?>
      <?php $j = 0; ?>
      <?php $k = 0; ?>
        <div class="play_sublisting">
	    <h2><span class="colapsed"></span><?php echo $playList->getTitle(); ?></h2>
	    <?php foreach ($playList->getTracks() as $Track): ?>
		<?php $class = ($i % 2) ? 'alpha' : 'omega'; ?>
		<?php 
        if ($j==0 or $j==1)
        {
          $odd = '';
          
        }
        else
        {
          $odd = 'odd';
        }
        ?>
		<div class="grid_9  <?php echo $class.' '.$odd; ?> play_sublisting_item">
		    <div>
			<a href="#" class="track grid_5"><?php echo $Track->getName(); ?></a>
			<ul class="play_sublisting_actions">
			    <li><a href="#" class="min-share">a</a></li>
			    <li><a href="#" class="min-report">a</a></li>
			    <li><a href="<?php echo url_for('addToPlaylist'); ?>" id="addToPlaylist_<?php echo $Track->getId(); ?>" class="min-addtoplaylist addToPlaylist">a</a></li>
			    <li><a href="#" class="min-listen listenToTrack">a</a></li>
			    <li><a href="<?php echo $Track->getUrl(); ?>" title="<span class='text-blue'><?php echo $Track->getName(); ?></span> <?php echo $playerName; ?>" target="_blank" class="min-download download">a</a></li>
			</ul>
		    </div>
		</div>
        <?php 
        if ($j==3)
        {
          $j = 0;
          
        }
        else{
        
          $j++;
        }
        ?>
		<?php $i++; ?>
		<?php  ?>
		<?php $k++; ?>
	    <?php endforeach; ?>

    	<div class="clear"></div>
        </div>
    <?php endforeach; ?>
</div>

