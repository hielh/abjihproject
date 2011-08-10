<?php /* @var $player playOwner */ ?>

<div class="play_owner_info">
    <h2 >شاري بن راشد العفاسي</h2>
    <div class="image">
	<img src="/images/kzabri.jpg">
    </div>
    <div class="play_owner_info_text">
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
	    <div class="play_owner_info_links">
		<ul>
		    <li><a href="#" class="share">شــارك الصفحـــة مع أصدقــــاءك</a></li>
		    <li><a href="#" class="favorite">أضف هذا المقرئ إلى المفضلة</a></li>
		    <li><a href="#" class="ilike">أضف هذا المقرئ إلى المفضلة</a></li>
		</ul>
	    </div>
	</div>

	<div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="play_owner_info_onglet">
	<ul>
	    <li><a href="#" class="quran_active">hohoho</a></li>
	    <li><a href="#" class="about_active">hohoho</a></li>
	    <li><a href="#" class="anashid_active">hohoho</a></li>
	    <li><a href="#" class="pic_active">hohoho</a></li>
	    <li><a href="#" class="video_active">hohoho</a></li>
	    <li><a href="#" class="doc_active">hohoho</a></li>
	</ul>
    </div>
</div>

<?php include_partial('player/playLists', array('playLists' => $player->getPlayLists(), 'playerName' => $player->getName())); ?>