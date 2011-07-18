<?php if ($myPlayLists instanceof sfOutputEscaperIteratorDecorator) $myPlayLists = $myPlayLists->getRawValue(); ?>

<?php $jsPlaylist = ""; ?>

<?php foreach ($myPlayLists as $myPlayList): ?>
  <?php
  $jsPlaylist .= '
    {
      name:"' . $myPlayList->getPlayIt()->getName() . '",
      mp3:"' . $myPlayList->getPlayIt()->getUrl() . '",
    },';
  ?>
<?php endforeach; ?>

<div class="show-notice error" style="display:none">
    <div class="notice-title">notification title when adding new mp3</div>
    <div class="notice-text">notification content when adding new mp3</div>
</div>

<?php if (isset($reloadPlaylist) && (!$reloadPlaylist)): ?>
  <script>
<?php endif; ?>
  privateListener = [<?php echo $jsPlaylist; ?>]; 
  
  <?php if (isset($reloadPlaylist) && ($reloadPlaylist)): ?>
    audioPlaylist.setPlaylist(privateListener);
    audioPlaylist.displayPlaylist();
  <?php endif; ?>

<?php if (isset($reloadPlaylist) && (!$reloadPlaylist)): ?>
  </script>
<?php endif; ?>