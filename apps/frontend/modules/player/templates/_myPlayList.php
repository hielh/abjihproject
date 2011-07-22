<?php if ($myPlayLists instanceof sfOutputEscaperIteratorDecorator) $myPlayLists = $myPlayLists->getRawValue(); ?>

<?php $jsPlaylist = ""; ?>

<?php foreach ($myPlayLists as $myPlayList): ?>
  <?php
  $jsPlaylist .= '
    {
      name:"<span class=\'text-lime\'>' . $myPlayList->getTrack()->getName() . '</span> - '.$myPlayList->getTrack()->getPlayList()->getPlayOwner()->getName().' ",
      mp3:"' . $myPlayList->getTrack()->getUrl() . '",
    },';
  ?>
<?php endforeach; ?>

<?php include_partial('home/notice'); ?>
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