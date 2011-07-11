<?php /* @var $player playOwner */ ?>
<div class="infoPlayer">
    <div id="optionsPlayer">
	option for player
    </div>
    <img src="/uploads/<?php echo $player->getPicture(); ?> " />
    <p>
	<?php echo $player->getDescription(); ?>
    </p>
    <div class="clear"></div>
    <div>
	<?php include_partial('player/playLists', array('playLists'=> $player->getPlayLists())); ?>
    </div>
</div>