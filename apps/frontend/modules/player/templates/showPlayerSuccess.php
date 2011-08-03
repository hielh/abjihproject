<?php /* @var $player playOwner */ ?>

<div class="play_owner_info">
    <h2 class="text-lime"><?php echo $player->getName(); ?></h2>
    <div class="play_owner_info_text">
	<div class="image"><img src="/uploads/<?php echo $player->getPicture(); ?> " /></div>
	<div class="info">
	    <p>
		<strong>الاسم:</strong>
	      				 مشاري بن راشد بن غريب بن محمد بن راشد العفاسي.
	    </p>
	    <p>
		<strong>الاسم:</strong>
	      				 مشاري بن راشد بن غريب بن محمد بن راشد العفاسي.
	    </p>
	    <p>
		<strong>الاسم:</strong>
	      				 مشاري بن راشد بن غريب بن محمد بن راشد العفاسي.
	    </p>
	</div>


	<div class="clear"></div>
    </div>

    <div class="play_owner_info_links">
	<span class="share"><a href="#">شــارك الصفحـــة مع أصدقــــاءك</a></span>
	<span class="favorite"><a href="#">أضف هذا المقرئ إلى المفضلة</a></span>
    </div>
</div>

<?php include_partial('player/playLists', array('playLists' => $player->getPlayLists(), 'playerName' => $player->getName())); ?>