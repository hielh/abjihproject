<?php /* @var $player playOwner */ ?>

<div class="play_owner_info">
    <h2 class="text-lime"><?php echo $player->getName(); ?></h2>
    <div class="play_owner_info_text">
	<img src="/uploads/<?php echo $player->getPicture(); ?> " />
	<p>
	    <?php echo $player->getDescription(); ?>
	</p>
	

	<div class="clear"></div>
    </div>

    <div class="play_owner_info_links">
	<a href="#">شاري بن راشد العفاسي</a>
	<a href="#">شاري بن راشد العفاسي</a>
    </div>
</div>

<?php include_partial('player/playLists', array('playLists' => $player->getPlayLists())); ?>